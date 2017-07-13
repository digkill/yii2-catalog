<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class ValueFixture extends ActiveFixture
{
    public $modelClass = 'app\models\Value';
    public $dataFile = '@app/tests/fixtures/data/value.php';
} 