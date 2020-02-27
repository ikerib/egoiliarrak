<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EgoiliarraRepository")
 */
class Egoiliarra
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $matrikula;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marka;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $modelo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $dni;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $telefono1;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $telefono2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $helbidea;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $herria;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $enpresa;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zaharra;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ezindua;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zenbakia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $helbidea2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ErregistroZenbakia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $AlKodea;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMatrikula(): ?string
    {
        return $this->matrikula;
    }

    public function setMatrikula(string $matrikula): self
    {
        $this->matrikula = $matrikula;

        return $this;
    }

    public function getMarka(): ?string
    {
        return $this->marka;
    }

    public function setMarka(?string $marka): self
    {
        $this->marka = $marka;

        return $this;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function setModelo(?string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(?string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getTelefono1(): ?string
    {
        return $this->telefono1;
    }

    public function setTelefono1(?string $telefono1): self
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    public function getTelefono2(): ?string
    {
        return $this->telefono2;
    }

    public function setTelefono2(?string $telefono2): self
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    public function getHelbidea(): ?string
    {
        return $this->helbidea;
    }

    public function setHelbidea(?string $helbidea): self
    {
        $this->helbidea = $helbidea;

        return $this;
    }

    public function getHerria(): ?string
    {
        return $this->herria;
    }

    public function setHerria(?string $herria): self
    {
        $this->herria = $herria;

        return $this;
    }

    public function getEnpresa(): ?string
    {
        return $this->enpresa;
    }

    public function setEnpresa(?string $enpresa): self
    {
        $this->enpresa = $enpresa;

        return $this;
    }

    public function getZaharra(): ?string
    {
        return $this->zaharra;
    }

    public function setZaharra(?string $zaharra): self
    {
        $this->zaharra = $zaharra;

        return $this;
    }

    public function getEzindua(): ?string
    {
        return $this->ezindua;
    }

    public function setEzindua(?string $ezindua): self
    {
        $this->ezindua = $ezindua;

        return $this;
    }

    public function getZenbakia(): ?string
    {
        return $this->zenbakia;
    }

    public function setZenbakia(?string $zenbakia): self
    {
        $this->zenbakia = $zenbakia;

        return $this;
    }

    public function getHelbidea2(): ?string
    {
        return $this->helbidea2;
    }

    public function setHelbidea2(?string $helbidea2): self
    {
        $this->helbidea2 = $helbidea2;

        return $this;
    }

    public function getErregistroZenbakia(): ?string
    {
        return $this->ErregistroZenbakia;
    }

    public function setErregistroZenbakia(?string $ErregistroZenbakia): self
    {
        $this->ErregistroZenbakia = $ErregistroZenbakia;

        return $this;
    }

    public function getAlKodea(): ?string
    {
        return $this->AlKodea;
    }

    public function setAlKodea(?string $AlKodea): self
    {
        $this->AlKodea = $AlKodea;

        return $this;
    }
}
