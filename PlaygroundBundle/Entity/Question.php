<?php

namespace Oras\PlaygroundBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 */
class Question
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
     */
    private $questionType;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $set;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->set = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set label
     *
     * @param string $label
     * @return Question
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set questionType
     *
     * @param integer $questionType
     * @return Question
     */
    public function setQuestionType($questionType)
    {
        $this->questionType = $questionType;

        return $this;
    }

    /**
     * Get questionType
     *
     * @return integer 
     */
    public function getQuestionType()
    {
        return $this->questionType;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Question
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Add set
     *
     * @param \Oras\PlaygroundBundle\Entity\Set $set
     * @return Question
     */
    public function addSet(\Oras\PlaygroundBundle\Entity\Set $set)
    {
        $this->set[] = $set;

        return $this;
    }

    /**
     * Remove set
     *
     * @param \Oras\PlaygroundBundle\Entity\Set $set
     */
    public function removeSet(\Oras\PlaygroundBundle\Entity\Set $set)
    {
        $this->set->removeElement($set);
    }

    /**
     * Get set
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSet()
    {
        return $this->set;
    }
}
