<?php

use yii\db\Migration;

class m160722_105845_post extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);

        $this->addForeignKey('fk-post-category', '{{%post}}', 'category_id', '{{%category}}', 'id', 'SET NULL', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
