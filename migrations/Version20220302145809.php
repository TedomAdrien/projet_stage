<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220302145809 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add Name, surname, email, contact, subjet fields to teacher tables';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teachers ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD email VARCHAR(255) DEFAULT NULL, ADD contact LONGTEXT NOT NULL, ADD matiere VARCHAR(255) NOT NULL, DROP sex');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teachers ADD sex TINYINT(1) NOT NULL, DROP nom, DROP prenom, DROP email, DROP contact, DROP matiere');
    }
}
