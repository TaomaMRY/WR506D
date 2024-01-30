<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240123154415 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64964DE5A5');
        $this->addSql('DROP INDEX IDX_8D93D64964DE5A5 ON user');
        $this->addSql('ALTER TABLE user DROP media_object_id, DROP username');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` ADD media_object_id INT DEFAULT NULL, ADD username VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D64964DE5A5 FOREIGN KEY (media_object_id) REFERENCES media_object (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64964DE5A5 ON `user` (media_object_id)');
    }
}
