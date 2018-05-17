<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contest
 *
 * @ORM\Table(name="contest")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContestRepository")
 */
class Contest
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="resultTeam1", type="smallint")
     */
    private $resultTeam1;

    /**
     * @var int
     *
     * @ORM\Column(name="resultTeam2", type="smallint")
     */
    private $resultTeam2;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
     * @ORM\JoinColumn(nullable=false)
     */
    private $team1;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
     * @ORM\JoinColumn(nullable=false)
     */
    private $team2;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Contest
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set resultTeam1
     *
     * @param integer $resultTeam1
     *
     * @return Contest
     */
    public function setResultTeam1($resultTeam1)
    {
        $this->resultTeam1 = $resultTeam1;

        return $this;
    }

    /**
     * Get resultTeam1
     *
     * @return int
     */
    public function getResultTeam1()
    {
        return $this->resultTeam1;
    }

    /**
     * Set resultTeam2
     *
     * @param integer $resultTeam2
     *
     * @return Contest
     */
    public function setResultTeam2($resultTeam2)
    {
        $this->resultTeam2 = $resultTeam2;

        return $this;
    }

    /**
     * Get resultTeam2
     *
     * @return int
     */
    public function getResultTeam2()
    {
        return $this->resultTeam2;
    }

    /**
     * Set team1
     *
     * @param \AppBundle\Entity\Team $team1
     *
     * @return Contest
     */
    public function setTeam1(\AppBundle\Entity\Team $team1)
    {
        $this->team1 = $team1;

        return $this;
    }

    /**
     * Get team1
     *
     * @return \AppBundle\Entity\Team
     */
    public function getTeam1()
    {
        return $this->team1;
    }

    /**
     * Set team2
     *
     * @param \AppBundle\Entity\Team $team2
     *
     * @return Contest
     */
    public function setTeam2(\AppBundle\Entity\Team $team2)
    {
        $this->team2 = $team2;

        return $this;
    }

    /**
     * Get team2
     *
     * @return \AppBundle\Entity\Team
     */
    public function getTeam2()
    {
        return $this->team2;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tests = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add test
     *
     * @param \AppBundle\Entity\Contest $test
     *
     * @return Contest
     */
    public function addTest(\AppBundle\Entity\Contest $test)
    {
        $this->tests[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \AppBundle\Entity\Contest $test
     */
    public function removeTest(\AppBundle\Entity\Contest $test)
    {
        $this->tests->removeElement($test);
    }

    /**
     * Get tests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTests()
    {
        return $this->tests;
    }
}
