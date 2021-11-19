<?php

namespace App\Form;

use App\Entity\Equipement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;
use Symfony\Component\OptionsResolver\OptionsResolver;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;

class EquipementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomOrdinateur')
            ->add('nomUtilisateur')
            ->add('prenomUtilisateur')
            ->add('refQualite')
            ->add('emplacement')
            ->add('services')
            ->add('adresseIp')
            ->add('reference')
            ->add('reseauLan')
            ->add('typeMateriel')
            ->add('numeroSerie')
            ->add('enService')
            ->add('systemeExploitation')
            ->add('macAdresse')
            ->add('dateAchat')
            ->add('loginAdminLocale')
            ->add('pwdAdminLocal')
            ->add('loginAdminDomaine')
            ->add('pwdAdminDomaine')
            ->add('loginUser')
            ->add('pwdUser')
            ->add('vpn')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipement::class,
        ]);
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
