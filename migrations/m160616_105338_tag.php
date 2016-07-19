<?php

use yii\db\Migration;

class m160616_105338_tag extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%tag}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);

        $this->createIndex('idx-tag-name', '{{%tag}}', 'name');

        $this->createTable('{{%product_tag}}',[
            'product_id' => $this->integer()->notNull(),
            'tag_id' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('pk-product_tag', '{{%product_tag}}', ['product_id', 'tag_id']);

        $this->createIndex('idx-product_tag-product_id', '{{%product_tag}}', 'product_id');
        $this->createIndex('idx-product_tag-tag_id', '{{%product_tag}}', 'tag_id');

        $this->addForeignKey('fk-product_tag-product', '{{%product_tag}}', 'product_id', '{{%product}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('fk-product_tag-tag', '{{%product_tag}}', 'tag_id', '{{%tag}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropTable('{{%product_tag}}');
        $this->dropTable('{{%tag}}');
    }

}
