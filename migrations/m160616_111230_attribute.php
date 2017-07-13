<?php

use yii\db\Migration;

class m160616_111230_attribute extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%attribute}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);

        $this->createTable('{{%value}}', [
            'product_id' => $this->integer()->notNull(),
            'attribute_id' => $this->integer()->notNull(),
            'value' => $this->string()->notNull(),
        ]);

        $this->addPrimaryKey('pk-value', '{{%value}}', ['product_id', 'attribute_id']);


        $this->createIndex('idx-value-product_id', '{{%value}}', 'product_id');
        $this->createIndex('idx-value-attribute_id', '{{%value}}', 'attribute_id');


        $this->addForeignKey('fk-value-product', '{{%value}}', 'product_id', '{{%product}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('fk-value-attribute', '{{%value}}', 'attribute_id', '{{%attribute}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropTable('{{%value}}');
        $this->dropTable('{{%attribute}}');
    }
}
