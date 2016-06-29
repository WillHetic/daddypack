<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @ORM\Column(type="string")
     */
    private $address;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="string", nullable=true)
=======
     * @ORM\Column(type="string")
>>>>>>> f7d1c84daecaba449965a7ecfa1b159699a9a1be
     */
    private $lastname;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="string", nullable=true)
=======
     * @ORM\Column(type="string")
>>>>>>> f7d1c84daecaba449965a7ecfa1b159699a9a1be
     */
    private $firstname;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_of_birth;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="smallint", nullable=true)
=======
     * @ORM\Column(type="smallint")
>>>>>>> f7d1c84daecaba449965a7ecfa1b159699a9a1be
     */
    private $sex;

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * @param mixed $date_of_birth
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
    }
}
