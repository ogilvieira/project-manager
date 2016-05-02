<?php

namespace ProjectManager\Projects\Model;

use Doctrine\ORM\Mapping as ORM;
use SIOFramework\Common\Model\Model;

/**
 * Class Project
 * @package ProjectManager\Projects\Model
 *
 * @ORM\Entity
 * @ORM\Table(name="pm_project")
 */
class Project extends Model{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $shortDescription;

    /**
     * @ORM\Column(type="date")
     */
    private $startingDate;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectManager\Customers\Model\Customer", inversedBy="projects", cascade={"remove"})
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

    // Getters and Setters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getShortDescription()
    {
        return $this->shortDescription;
    }
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    public function getStartingDate()
    {
        return $this->startingDate;
    }
    public function setStartingDate($startingDate)
    {
        $startingDate = \DateTime::createFromFormat('Y-m-d', $startingDate);

        $this->startingDate = $startingDate;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

}