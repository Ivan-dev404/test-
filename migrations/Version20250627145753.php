<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250627145753 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('profile');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('first_name', 'string', ['notnull' => true]);
        $table->addColumn('last_name', 'string', ['notnull' => true]);
        $table->addColumn('email', 'string', ['notnull' => true]);
        $table->addColumn('phone', 'integer', ['notnull' => true]);
        $table->addColumn('agreement', 'integer', ['notnull' => true, 'length' => 1]);
        $table->addColumn('score_bonus', 'integer', ['notnull' => true, 'default' => 0]);
        $table->setPrimaryKey(['id']);

        $table->addColumn('score', 'string', ['notnull' => true]);
        $table = $schema->createTable('bonus_release');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->setPrimaryKey(['id']);
        $table->addColumn('first_name', 'string', ['notnull' => true]);
        $table->addColumn('release_type', 'string', ['notnull' => true]);

        $table = $schema->getTable('test.profile_bonus_release');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('score', 'string', ['notnull' => true]);
        $table->setPrimaryKey(['id']);
    }
    public function down(Schema $schema): void
    {
        $schema->dropTable('profile');
        $schema->dropTable('bonus_release');
        $schema->dropTable('profile_bonus_release');
    }
}
