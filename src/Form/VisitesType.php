<?php

namespace App\Form;

use App\Entity\Visites;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VisitesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateVisite')
            ->add('vst_commentaire')
            ->add('vst_praticien')
            ->add('vst_motif')
            ->add('vst_visiteurs')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visites::class,
        ]);
    }
}
