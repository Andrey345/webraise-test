<?php

use yii\db\Migration;
use \yii\db\Schema;
/**
 * Class m210427_084509_create_table_author
 */
class m210427_084509_create_table_author extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(){
        $this->createTable('author', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }
    public function down()
    {
        $this->dropTable('author');
    }

    /**
     * {@inheritdoc}
     */


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210427_084509_create_table_author cannot be reverted.\n";

        return false;
    }
    */
}
