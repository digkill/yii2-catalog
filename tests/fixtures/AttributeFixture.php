<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class AttributeFixture extends ActiveFixture
{
    public $modelClass = 'app\models\Attribute';
    public $dataFile = '@app/tests/fixtures/data/attribute.php';
} 