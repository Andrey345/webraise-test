<?php

use yii\db\Migration;
use \yii\db\Schema;
/**
 * Class m210427_084519_create_table_book
 */
class m210427_084519_create_table_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(){
        $this->createTable('book', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'author_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);
    }
    public function down()
    {
        $this->dropTable('book');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210427_084519_create_table_book cannot be reverted.\n";

        return false;
    }
    */
}
