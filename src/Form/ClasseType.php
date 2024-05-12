<?php
namespace App\Form;

use App\Entity\Classe;
use App\Entity\Departement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClasseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom_classe')
            ->add('capacite')
            ->add('Etage')
            ->add('Etat')
            ->add('Equipement')
            ->add('idDeaprt', EntityType::class, [
                'class' => Departement::class,
                'choice_label' => 'Nom', // Display the 'Nom' property of Departement as the choice label
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Classe::class,
        ]);
    }
}
