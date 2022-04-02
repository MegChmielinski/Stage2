<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220402150925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_FCEC9EF8B225FBD');
        $this->addSql('CREATE TEMPORARY TABLE __temp__personne AS SELECT id, residence_id, nom, prenom, date_naissance, sexe, statut_marital FROM personne');
        $this->addSql('DROP TABLE personne');
        $this->addSql('CREATE TABLE personne (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, residence_id INTEGER DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, sexe BOOLEAN NOT NULL, statut_marital VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(5) NOT NULL, ville VARCHAR(255) NOT NULL, CONSTRAINT FK_FCEC9EF8B225FBD FOREIGN KEY (residence_id) REFERENCES residence (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO personne (id, residence_id, nom, prenom, date_naissance, sexe, statut_marital) SELECT id, residence_id, nom, prenom, date_naissance, sexe, statut_marital FROM __temp__personne');
        $this->addSql('DROP TABLE __temp__personne');
        $this->addSql('CREATE INDEX IDX_FCEC9EF8B225FBD ON personne (residence_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_FCEC9EF8B225FBD');
        $this->addSql('CREATE TEMPORARY TABLE __temp__personne AS SELECT id, residence_id, nom, prenom, date_naissance, sexe, statut_marital FROM personne');
        $this->addSql('DROP TABLE personne');
        $this->addSql('CREATE TABLE personne (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, residence_id INTEGER DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, sexe BOOLEAN NOT NULL, statut_marital VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO personne (id, residence_id, nom, prenom, date_naissance, sexe, statut_marital) SELECT id, residence_id, nom, prenom, date_naissance, sexe, statut_marital FROM __temp__personne');
        $this->addSql('DROP TABLE __temp__personne');
        $this->addSql('CREATE INDEX IDX_FCEC9EF8B225FBD ON personne (residence_id)');
    }
}
