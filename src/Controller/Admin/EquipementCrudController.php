<?php

namespace App\Controller\Admin;

use App\Entity\Equipement;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EquipementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Equipement::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nomOrdinateur'),
            TextField::new('nomUtilisateur'),
            TextField::new('prenomUtilisateur'),
            TextField::new('refQualite'),
            TextField::new('adresseIp'),
            BooleanField::new('enService'),
            TextField::new('loginAdminLocale'),
            TextField::new('pwdAdminLocal')->hideOnIndex(),
            TextField::new('loginAdminDomaine'),
            TextField::new('pwdAdminDomaine')->hideOnIndex(),
            TextField::new('loginUser'),
            TextField::new('pwdUser')->hideOnIndex(),
            BooleanField::new('vpn'),
            DateField::new('dateAchat')->hideOnIndex(),
            TextField::new('macAdresse')->hideOnIndex(),
            TextField::new('numeroSerie')->hideOnIndex(),
            TextField::new('typeMateriel')->hideOnIndex(),
            TextField::new('reseauLan')->hideOnIndex(),
            TextField::new('reference')->hideOnIndex(),
            TextField::new('services')->hideOnIndex(),
            TextField::new('emplacement')->hideOnIndex(),
            TextField::new('systemeExploitation')->hideOnIndex(),
            // SlugField::new('slug')->setTargetFieldName('nomUtilisateur')->hideOnIndex(),
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(TextFilter::new('nomOrdinateur'))
            ->add(TextFilter::new('nomUtilisateur'))
            ->add(TextFilter::new('prenomUtilisateur'))
            ->add(TextFilter::new('refQualite'))
            ->add(TextFilter::new('adresseIp'))
            ->add(TextFilter::new('loginAdminLocale'))
            ->add(TextFilter::new('loginAdminDomaine'))
            ->add(TextFilter::new('loginUser'))
            ->add(BooleanFilter::new('enService'))
            ->add(BooleanFilter::new('vpn'));
    }
}
