<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211122163033 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE praticien (id INT AUTO_INCREMENT NOT NULL, pra_nom VARCHAR(255) DEFAULT NULL, pra_prenom VARCHAR(255) DEFAULT NULL, pra_tel VARCHAR(30) DEFAULT NULL, pra_mail VARCHAR(255) DEFAULT NULL, pra_rue VARCHAR(255) NOT NULL, pra_code_postal VARCHAR(30) NOT NULL, pra_ville VARCHAR(255) NOT NULL, pra_coef_notoriete INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE praticien');
    }
}
