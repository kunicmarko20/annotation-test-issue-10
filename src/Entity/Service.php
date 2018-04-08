<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use KunicMarko\SonataAnnotationBundle\Annotation as Sonata;

/**
 * Service
 *
 * @Sonata\Admin("Service")
 *
 * @ORM\Table(name="services")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity()
 */
class Service
{
    /**
     * @var int
     *
     * @Sonata\ListField()
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Sonata\FormField()
     * @Sonata\ListField()
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}