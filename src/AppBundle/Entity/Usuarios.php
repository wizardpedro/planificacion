<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="apenom", type="string", length=100, nullable=true)
     */
    private $apenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nomusuario", type="string", length=50, nullable=true)
     */
    private $nomusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=100, nullable=true)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_active", type="integer", nullable=true)
     */
    private $isActive;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set apenom
     *
     * @param string $apenom
     *
     * @return Usuarios
     */
    public function setApenom($apenom)
    {
        $this->apenom = $apenom;

        return $this;
    }

    /**
     * Get apenom
     *
     * @return string
     */
    public function getApenom()
    {
        return $this->apenom;
    }

    /**
     * Set nomusuario
     *
     * @param string $nomusuario
     *
     * @return Usuarios
     */
    public function setNomusuario($nomusuario)
    {
        $this->nomusuario = $nomusuario;

        return $this;
    }

    /**
     * Get nomusuario
     *
     * @return string
     */
    public function getNomusuario()
    {
        return $this->nomusuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuarios
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param integer $isActive
     *
     * @return Usuarios
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return integer
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}
