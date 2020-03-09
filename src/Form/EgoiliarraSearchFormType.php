<?php

namespace App\Form;

use App\Entity\Egoiliarra;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EgoiliarraSearchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'required' => false,
                'label' => 'Deiturak'
            ])
            ->add('matrikula', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'required' => false,
                'label' => 'Matrikula'
            ])
            ->add('marka', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'required' => false,
                'label' => 'Marka'
            ])
            ->add('modelo', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'required' => false,
                'label' => 'Modeloa'
            ])
            ->add('dni', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'required' => false,
                'label' => 'NAN'
            ])
            ->add('telefono1', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'required' => false,
                'label' => 'Telefonoa'
            ])
            ->add('helbidea', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'required' => false,
                'label' => 'Helbidea'
            ])
            ->add('barrutia')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Egoiliarra::class,
        ]);
    }
}
