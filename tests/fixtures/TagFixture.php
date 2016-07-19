<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class TagFixture extends ActiveFixture
{
    public $modelClass = 'app\models\Tag';
    public $dataFile = '@app/tests/fixtures/data/tag.php';
} 