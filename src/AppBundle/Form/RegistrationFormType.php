<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName');
    }

    public function getParent()
    {
        //这个方法告诉系统，它要override哪个FormType
        //这个parent类可以在symfony的profiler中的Form模块中看到
        return BaseRegistrationFormType::class;
    }
}
