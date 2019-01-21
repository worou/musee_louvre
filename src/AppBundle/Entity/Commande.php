<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @var bool
     *
     * @ORM\Column(name="billet_demi_journee", type="boolean")
     */
    private $billetDemiJournee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_visite", type="date")
     */
    private $dateDeVisite;


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
     * Set billetDemiJournee
     *
     * @param boolean $billetDemiJournee
     *
     * @return Commande
     */
    public function setBilletDemiJournee($billetDemiJournee)
    {
        $this->billetDemiJournee = $billetDemiJournee;

        return $this;
    }

    /**
     * Get billetDemiJournee
     *
     * @return bool
     */
    public function getBilletDemiJournee()
    {
        return $this->billetDemiJournee;
    }

    /**
     * Set dateDeVisite
     *
     * @param \DateTime $dateDeVisite
     *
     * @return Commande
     */
    public function setDateDeVisite($dateDeVisite)
    {
        $this->dateDeVisite = $dateDeVisite;

        return $this;
    }

    /**
     * Get dateDeVisite
     *
     * @return \DateTime
     */
    public function getDateDeVisite()
    {
        return $this->dateDeVisite;
    }
}

