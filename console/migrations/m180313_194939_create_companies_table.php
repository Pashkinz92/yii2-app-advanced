<?php

use yii\db\Migration;

/**
 * Handles the creation of table `companies`.
 */
class m180313_194939_create_companies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('companies', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'foundedAt' => $this->date(),
            'BIC' => $this->string()->notNull(),
            'is_active' => $this->boolean()->notNull()->defaultValue(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('companies');
    }
}
