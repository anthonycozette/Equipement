<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211118141708 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipement (id INT AUTO_INCREMENT NOT NULL, nom_ordinateur VARCHAR(255) NOT NULL, nom_utilisateur VARCHAR(255) NOT NULL, prenom_utilisateur VARCHAR(255) NOT NULL, ref_qualite VARCHAR(255) DEFAULT NULL, emplacement VARCHAR(255) NOT NULL, services VARCHAR(255) NOT NULL, adresse_ip VARCHAR(255) NOT NULL, reference VARCHAR(255) NOT NULL, reseau_lan VARCHAR(255) NOT NULL, type_materiel VARCHAR(255) NOT NULL, numero_serie VARCHAR(255) NOT NULL, en_service TINYINT(1) NOT NULL, systeme_exploitation VARCHAR(255) DEFAULT NULL, mac_adresse VARCHAR(255) DEFAULT NULL, date_achat DATE NOT NULL, login_admin_locale VARCHAR(255) NOT NULL, pwd_admin_local VARCHAR(255) NOT NULL, login_admin_domaine VARCHAR(255) NOT NULL, pwd_admin_domaine VARCHAR(255) NOT NULL, login_usuer VARCHAR(255) NOT NULL, pwd_user VARCHAR(255) NOT NULL, vpn TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649AA08CB10 (login), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE equipement');
        $this->addSql('DROP TABLE user');
    }
}
