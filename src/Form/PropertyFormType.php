<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('surface')
            ->add('rooms')
            ->add('bedrooms')
            ->add('floor')
            ->add('price')
            ->add('city')
            ->add('address')
            ->add('postal_code')
            ->add('sold')
            ->add('heat', ChoiceType::class, ['choices'=>$this->getChoices()])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
            'translation_domain' => 'forms'
        ]);
    }
    public function getChoices()
    {
        $choices = Property::HEAT; // Récupération de la constante HEAT
        $output = [];
        foreach($choices as $key => $value){ // Je fais un foreach clef=> valeur sur mon tableau choices :
            $output[$value] = $key; // Astuce : J'utilise la valeur comme clef et la clef comme valeur.
            return $output;

        }
    }
}
