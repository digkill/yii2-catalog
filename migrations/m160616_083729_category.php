<?php

use yii\db\Migration;

class m160616_083729_category extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'parent_id' => $this->integer(),
        ]);

        $this->createIndex('idx-category-parent_id', '{{%category}}', 'parent_id');

        $this->addForeignKey('fk-category-parent', '{{%category}}', 'parent_id', '{{%category}}', 'id', 'SET NULL', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }

}
