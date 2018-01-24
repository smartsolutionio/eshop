<?php

//..............................................................................

namespace AppBundle\Form;

//..............................................................................

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

//..............................................................................

class ProductForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',              TextType::class)
            ->add('category',          null)
            ->add('farmers',           null)
            ->add('price',             NumberType::class)
            ->add('description',       TextareaType::class)
            ->add('availibility',      TextareaType::class)
            ->add('validity_delivery', TextareaType::class)
            ->add('save',              SubmitType::class)
        ;
    }
}

//..............................................................................
