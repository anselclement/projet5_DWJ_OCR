<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190528091123 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hobbies ADD apropos_id INT NOT NULL');
        $this->addSql('ALTER TABLE hobbies ADD CONSTRAINT FK_38CA341D4E4D9001 FOREIGN KEY (apropos_id) REFERENCES apropos (id)');
        $this->addSql('CREATE INDEX IDX_38CA341D4E4D9001 ON hobbies (apropos_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hobbies DROP FOREIGN KEY FK_38CA341D4E4D9001');
        $this->addSql('DROP INDEX IDX_38CA341D4E4D9001 ON hobbies');
        $this->addSql('ALTER TABLE hobbies DROP apropos_id');
    }
}
