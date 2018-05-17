<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
<<<<<<< HEAD
        $builder->add('description')->add('name')->add('firstname')->add('numberPlayer')->add('pictures')->add('age')->add('role')->add('team');
=======
        $builder->add('name')->add('firstname')->add('numberPlayer')->add('pictures')->add('age')->add('role')->add('team');
>>>>>>> 3b05a3ad55152ddc48beba80b9be4d9a1ca0d903
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Player'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_player';
    }


}
