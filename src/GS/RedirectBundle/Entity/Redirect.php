<?php

namespace GS\RedirectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Redirect
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GS\RedirectBundle\Entity\RedirectRepository")
 */
class Redirect
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Source_URL", type="string", length=255)
     */
    private $sourceURL;

    /**
     * @var string
     *
     * @ORM\Column(name="Destination_URL", type="string", length=255)
     */
    private $destinationURL;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Active", type="boolean")
     */
    private $active;


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
     * Set sourceURL
     *
     * @param string $sourceURL
     * @return Redirect
     */
    public function setSourceURL($sourceURL)
    {
        $this->sourceURL = $sourceURL;

        return $this;
    }

    /**
     * Get sourceURL
     *
     * @return string 
     */
    public function getSourceURL()
    {
        return $this->sourceURL;
    }

    /**
     * Set destinationURL
     *
     * @param string $destinationURL
     * @return Redirect
     */
    public function setDestinationURL($destinationURL)
    {
        $this->destinationURL = $destinationURL;

        return $this;
    }

    /**
     * Get destinationURL
     *
     * @return string 
     */
    public function getDestinationURL()
    {
        return $this->destinationURL;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Redirect
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
