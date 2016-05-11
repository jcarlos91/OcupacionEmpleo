<?php

namespace OcupacionEmpleoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pert
 *
 * @ORM\Table(name="pert")
 * @ORM\Entity(repositoryClass="OcupacionEmpleoBundle\Repository\PertRepository")
 */
class Pert
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="actividades", type="string", length=10)
     */
    private $actividades;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="predecesor", type="string", length=10)
     */
    private $predecesor;

    /**
     * @var int
     *
     * @ORM\Column(name="duracion", type="integer")
     */
    private $duracion;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set actividades
     *
     * @param string $actividades
     *
     * @return Pert
     */
    public function setActividades($actividades)
    {
        $this->actividades = $actividades;

        return $this;
    }

    /**
     * Get actividades
     *
     * @return string
     */
    public function getActividades()
    {
        return $this->actividades;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Pert
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set predecesor
     *
     * @param string $predecesor
     *
     * @return Pert
     */
    public function setPredecesor($predecesor)
    {
        $this->predecesor = $predecesor;

        return $this;
    }

    /**
     * Get predecesor
     *
     * @return string
     */
    public function getPredecesor()
    {
        return $this->predecesor;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     *
     * @return Pert
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return int
     */
    public function getDuracion()
    {
        return $this->duracion;
    }
}

