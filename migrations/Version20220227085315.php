<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220227085315 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add relation between teachers and users table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teachers ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE teachers ADD CONSTRAINT FK_ED071FF6A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_ED071FF6A76ED395 ON teachers (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teachers DROP FOREIGN KEY FK_ED071FF6A76ED395');
        $this->addSql('DROP INDEX IDX_ED071FF6A76ED395 ON teachers');
        $this->addSql('ALTER TABLE teachers DROP user_id');
    }
}
