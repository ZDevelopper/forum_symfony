<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220513131707 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message ADD id_sujet_id INT NOT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F2C96A5EB FOREIGN KEY (id_sujet_id) REFERENCES sujet (id)');
        $this->addSql('CREATE INDEX IDX_B6BD307F2C96A5EB ON message (id_sujet_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F2C96A5EB');
        $this->addSql('DROP INDEX IDX_B6BD307F2C96A5EB ON message');
        $this->addSql('ALTER TABLE message DROP id_sujet_id');
    }
}
