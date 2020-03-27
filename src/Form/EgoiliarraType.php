<?php

namespace App\Form;

use App\Entity\Egoiliarra;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EgoiliarraType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Izena'
            ])
            ->add('matrikula')
            ->add('marka')
            ->add('modelo')
            ->add('dni')
            ->add('telefono1')
            ->add('telefono2')
            ->add('helbidea')
            ->add('herria')
            ->add('enpresa')
            ->add('zaharra')
            ->add('ezindua')
            ->add('zenbakia')
            ->add('helbidea2')
            ->add('ErregistroZenbakia')
            ->add('AlKodea')
            ->add('barrutia')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Egoiliarra::class,
        ]);
    }
}
