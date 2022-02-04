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
                  'placeholder' => "Titre",
                  'type' => "text", 
                  'class'=> "form-control",
                  'required',
                  'id'=> "title"
                ]
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                  'placeholder' => "Ceci est une description ...",
                  'type' => "text", 
                  'required',
                  'id'=> "desc",
                  'rows'=>"10",
                  'cols'=>"85"
                ]
            ])
            ->add('prix', TextType::class, [
                'attr' => [
                  'placeholder' => "ex: 20,..,100€",
                  'type' => "text", 
                  'class'=> "form-control",
                  'required',
                  'id'=> "price"
                ]
            ])
            ->add('date', TextType::class)
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
