<?php

namespace FrontRunner\Bundle\ExtendCallBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityManager;

class CallType extends AbstractType
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'subject',
                'text',
                [
                    'required' => true,
                    'label'    => 'orocrm.call.subject.label'
                ]
            )
            ->add(
                'phoneNumber',
                'orocrm_call_phone',
                [
                    'required'    => false,
                    'label'       => 'orocrm.call.phone_number.label',
                    'suggestions' => $options['phone_suggestions']
                ]
            )
            ->add(
                'notes',
                'oro_resizeable_rich_text',
                [
                    'required' => false,
                    'label'    => 'orocrm.call.notes.label'
                ]
            )
            ->add(
                'callDateTime',
                'oro_datetime',
                [
                    'required' => true,
                    'label'    => 'orocrm.call.call_date_time.label'
                ]
            )
            ->add(
                'callStatus',
                'entity',
                [
                    'required' => true,
                    'label'    => 'orocrm.call.call_status.label',
                    'class'    => 'OroCRM\Bundle\CallBundle\Entity\CallStatus'
                ]
            )
            ->add(
                'duration',
                'oro_time_interval',
                [
                    'required' => false,
                    'label'    => 'orocrm.call.duration.label'
                ]
            )
            ->add(
                'direction',
                'translatable_entity',
                [
                    'required' => false,
                    'label'    => 'orocrm.call.direction.label',
                    'class'    => 'OroCRM\Bundle\CallBundle\Entity\CallDirection'
                ]
            );
    }
}
