<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BarrutiaRepository")
 */
class Barrutia
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

    /******************************************************************************************************************************************************************/
    /******************************************************************************************************************************************************************/
    /******************************************************************************************************************************************************************/

    public function __toString()
    {
        return $this->getName();
    }

    /******************************************************************************************************************************************************************/
    /******************************************************************************************************************************************************************/
    /******************************************************************************************************************************************************************/

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Egoiliarra", mappedBy="barrutia")
     */
    private $egoiliarras;

    public function __construct()
    {
        $this->egoiliarras = new ArrayCollection();
    }

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

    /**
     * @return Collection|Egoiliarra[]
     */
    public function getEgoiliarras(): Collection
    {
        return $this->egoiliarras;
    }

    public function addEgoiliarra(Egoiliarra $egoiliarra): self
    {
        if (!$this->egoiliarras->contains($egoiliarra)) {
            $this->egoiliarras[] = $egoiliarra;
            $egoiliarra->setBarrutia($this);
        }

        return $this;
    }

    public function removeEgoiliarra(Egoiliarra $egoiliarra): self
    {
        if ($this->egoiliarras->contains($egoiliarra)) {
            $this->egoiliarras->removeElement($egoiliarra);
            // set the owning side to null (unless already changed)
            if ($egoiliarra->getBarrutia() === $this) {
                $egoiliarra->setBarrutia(null);
            }
        }

        return $this;
    }
}
