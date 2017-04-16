<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Rents;
use app\models\Clients;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Rents;
        $items = ArrayHelper::map(Clients::find()->all(), 'id', 'name');
        $rents = Rents::find()->all();

        return $this->render('index',[
            'model' => $model,
            'items' =>$items,
            'rents' =>$rents]);
    }

    /**
     * Displays contact page.
     *
     * @return string
     */

    public function actionAdd()
    {
         $rent = new Rents();
         $rent->client_id =$_POST['Rents']['client_id'];
         $rent->address = $_POST['Rents']['address'];
         $rent->value = $_POST['Rents']['value'];
         $rent->save();
         
         return $this->redirect('index');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
