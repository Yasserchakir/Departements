<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240511165723 extends AbstractMigration
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
        $this->addSql('ALTER TABLE classe CHANGE id_depart_id id_deaprt_id INT NOT NULL');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF9627140428 FOREIGN KEY (id_deaprt_id) REFERENCES departement (id)');
        $this->addSql('CREATE INDEX IDX_8F87BF9627140428 ON classe (id_deaprt_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF9627140428');
        $this->addSql('DROP INDEX IDX_8F87BF9627140428 ON classe');
        $this->addSql('ALTER TABLE classe CHANGE id_deaprt_id id_depart_id INT NOT NULL');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF962E37426C FOREIGN KEY (id_depart_id) REFERENCES departement (id)');
        $this->addSql('CREATE INDEX IDX_8F87BF962E37426C ON classe (id_depart_id)');
    }
}
