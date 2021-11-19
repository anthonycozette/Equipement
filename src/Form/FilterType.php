<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;
use Symfony\Component\OptionsResolver\OptionsResolver;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;

class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
