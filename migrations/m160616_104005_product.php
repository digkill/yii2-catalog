<?php

use yii\db\Migration;

class m160616_104005_product extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'content' => $this->text(),
            'price' => $this->integer()->notNull(),
            'active' => $this->smallInteger(1)->notNull()->defaultValue(0),
        ]);

        $this->createIndex('idx-product-category_id', '{{%product}}', 'category_id');
        $this->createIndex('idx-product-active', '{{%product}}', 'active');

        $this->addForeignKey('fk-product-category', '{{%product}}', 'category_id', '{{%category}}', 'id', 'SET NULL', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }

}
