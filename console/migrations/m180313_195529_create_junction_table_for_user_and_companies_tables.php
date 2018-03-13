<?php

use yii\db\Migration;

/**
 * Handles the creation of table `companies_employees`.
 * Has foreign keys to the tables:
 *
 * - `user`
 * - `companies`
 */
class m180313_195529_create_junction_table_for_user_and_companies_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('companies_employees', [
            'company_id' => $this->integer(),
            'user_id' => $this->integer(),
            'PRIMARY KEY(user_id, company_id)',
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-companies_employees-user_id',
            'companies_employees',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-companies_employees-user_id',
            'companies_employees',
            'user_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'
        );

        // creates index for column `company_id`
        $this->createIndex(
            'idx-companies_employees-company_id',
            'companies_employees',
            'company_id'
        );

        // add foreign key for table `companies`
        $this->addForeignKey(
            'fk-companies_employees-company_id',
            'companies_employees',
            'company_id',
            'companies',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-companies_employees-user_id',
            'companies_employees'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-companies_employees-user_id',
            'companies_employees'
        );

        // drops foreign key for table `companies`
        $this->dropForeignKey(
            'fk-companies_employees-company_id',
            'companies_employees'
        );

        // drops index for column `company_id`
        $this->dropIndex(
            'idx-companies_employees-company_id',
            'companies_employees'
        );

        $this->dropTable('companies_employees');
    }
}
