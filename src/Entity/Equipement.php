<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipementRepository::class)
 */
class Equipement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomOrdinateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomUtilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomUtilisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $refQualite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emplacement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $services;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseIp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reseauLan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeMateriel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroSerie;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enService;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $systemeExploitation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $macAdresse;

    /**
     * @ORM\Column(type="date")
     */
    private $dateAchat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $loginAdminLocale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pwdAdminLocal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $loginAdminDomaine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pwdAdminDomaine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $loginUser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pwdUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $vpn;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomOrdinateur(): ?string
    {
        return $this->nomOrdinateur;
    }

    public function setNomOrdinateur(string $nomOrdinateur): self
    {
        $this->nomOrdinateur = $nomOrdinateur;

        return $this;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nomUtilisateur;
    }

    public function setNomUtilisateur(string $nomUtilisateur): self
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenomUtilisateur;
    }

    public function setPrenomUtilisateur(string $prenomUtilisateur): self
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    public function getRefQualite(): ?string
    {
        return $this->refQualite;
    }

    public function setRefQualite(?string $refQualite): self
    {
        $this->refQualite = $refQualite;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getServices(): ?string
    {
        return $this->services;
    }

    public function setServices(string $services): self
    {
        $this->services = $services;

        return $this;
    }

    public function getAdresseIp(): ?string
    {
        return $this->adresseIp;
    }

    public function setAdresseIp(string $adresseIp): self
    {
        $this->adresseIp = $adresseIp;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getReseauLan(): ?string
    {
        return $this->reseauLan;
    }

    public function setReseauLan(string $reseauLan): self
    {
        $this->reseauLan = $reseauLan;

        return $this;
    }

    public function getTypeMateriel(): ?string
    {
        return $this->typeMateriel;
    }

    public function setTypeMateriel(string $typeMateriel): self
    {
        $this->typeMateriel = $typeMateriel;

        return $this;
    }

    public function getNumeroSerie(): ?string
    {
        return $this->numeroSerie;
    }

    public function setNumeroSerie(string $numeroSerie): self
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    public function getEnService(): ?bool
    {
        return $this->enService;
    }

    public function setEnService(bool $enService): self
    {
        $this->enService = $enService;

        return $this;
    }

    public function getSystemeExploitation(): ?string
    {
        return $this->systemeExploitation;
    }

    public function setSystemeExploitation(?string $systemeExploitation): self
    {
        $this->systemeExploitation = $systemeExploitation;

        return $this;
    }

    public function getMacAdresse(): ?string
    {
        return $this->macAdresse;
    }

    public function setMacAdresse(?string $macAdresse): self
    {
        $this->macAdresse = $macAdresse;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getLoginAdminLocale(): ?string
    {
        return $this->loginAdminLocale;
    }

    public function setLoginAdminLocale(string $loginAdminLocale): self
    {
        $this->loginAdminLocale = $loginAdminLocale;

        return $this;
    }

    public function getPwdAdminLocal(): ?string
    {
        return $this->pwdAdminLocal;
    }

    public function setPwdAdminLocal(string $pwdAdminLocal): self
    {
        $this->pwdAdminLocal = $pwdAdminLocal;

        return $this;
    }

    public function getLoginAdminDomaine(): ?string
    {
        return $this->loginAdminDomaine;
    }

    public function setLoginAdminDomaine(string $loginAdminDomaine): self
    {
        $this->loginAdminDomaine = $loginAdminDomaine;

        return $this;
    }

    public function getPwdAdminDomaine(): ?string
    {
        return $this->pwdAdminDomaine;
    }

    public function setPwdAdminDomaine(string $pwdAdminDomaine): self
    {
        $this->pwdAdminDomaine = $pwdAdminDomaine;

        return $this;
    }

    public function getLoginUser(): ?string
    {
        return $this->loginUser;
    }

    public function setLoginUser(string $loginUser): self
    {
        $this->loginUser = $loginUser;

        return $this;
    }

    public function getPwdUser(): ?string
    {
        return $this->pwdUser;
    }

    public function setPwdUser(string $pwdUser): self
    {
        $this->pwdUser = $pwdUser;

        return $this;
    }

    public function getVpn(): ?bool
    {
        return $this->vpn;
    }

    public function setVpn(bool $vpn): self
    {
        $this->vpn = $vpn;

        return $this;
    }
}
