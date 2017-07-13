<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class ProductTagFixture extends ActiveFixture
{
    public $modelClass = 'app\models\ProductTag';
    public $dataFile = '@app/tests/fixtures/data/product-tag.php';
} 