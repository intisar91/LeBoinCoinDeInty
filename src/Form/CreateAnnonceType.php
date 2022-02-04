<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CreateAnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('photo', TextType::class)
            ->add('title', TextType::class, [
                'attr' => [
                  'placeholder' => "MyTitle", 
                  'class'  => 'custom_class'
                ]
            ])
            ->add('description', TextareaType::class)
            ->add('prix', TextType::class)
            ->add('date', TextType::class)
            ->add('save', SubmitType::class, [
                'attr' => [
                  'class'  => 'btn btn-success'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
