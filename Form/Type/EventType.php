<?php

namespace Acme\SphereOfFateBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


/**
 * Class EventType
 * @package Acme\SphereOfFateBundle\Form\Type
 */
class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('data','text')
            ->add('save','submit', array(
                'label'=>'try your fate'
            ))
            ->getForm();
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data class'=>'Acme\SphereOfFateBundle\Entity\Event'
        ));
    }

    public function getName()
    {
        return 'Sphere_of_Fate';

    }
} 