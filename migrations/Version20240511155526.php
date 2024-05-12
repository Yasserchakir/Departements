<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240511155526 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF962E37426C');
        $this->addSql('DROP INDEX IDX_8F87BF962E37426C ON classe');
        $this->addSql('ALTER TABLE classe ADD departement_id INT DEFAULT NULL, DROP id_depart_id');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF96CCF9E01E FOREIGN KEY (departement_id) REFERENCES departement (id)');
        $this->addSql('CREATE INDEX IDX_8F87BF96CCF9E01E ON classe (departement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF96CCF9E01E');
        $this->addSql('DROP INDEX IDX_8F87BF96CCF9E01E ON classe');
        $this->addSql('ALTER TABLE classe ADD id_depart_id INT NOT NULL, DROP departement_id');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF962E37426C FOREIGN KEY (id_depart_id) REFERENCES departement (id)');
        $this->addSql('CREATE INDEX IDX_8F87BF962E37426C ON classe (id_depart_id)');
    }
}
