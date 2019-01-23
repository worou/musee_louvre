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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Billet", mappedBy="commande")
     */


    private $billets;

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


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->billets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add billet
     *
     * @param \OC\PlatformBundle\Entity\Billet $billet
     *
     * @return Commande
     */
    public function addBillet(\OC\PlatformBundle\Entity\Billet $billet)
    {
        $this->billets[] = $billet;

        return $this;
    }

    /**
     * Remove billet
     *
     * @param \OC\PlatformBundle\Entity\Billet $billet
     */
    public function removeBillet(\OC\PlatformBundle\Entity\Billet $billet)
    {
        $this->billets->removeElement($billet);
    }

    /**
     * Get billets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBillets()
    {
        return $this->billets;
    }
}
