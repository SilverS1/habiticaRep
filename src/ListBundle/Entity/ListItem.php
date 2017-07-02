<?php

namespace ListBundle\Entity;

/**
 * ListItem
 */
class ListItem
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var int
     */
    private $difficuly;

    /**
     * @var int
     */
    private $listID;

    /**
     * @var int
     */
    private $time;

    /**
     * @var int
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $dueDate;


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
     * Set title
     *
     * @param string $title
     *
     * @return ListItem
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return ListItem
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set difficuly
     *
     * @param integer $difficuly
     *
     * @return ListItem
     */
    public function setDifficuly($difficuly)
    {
        $this->difficuly = $difficuly;

        return $this;
    }

    /**
     * Get difficuly
     *
     * @return int
     */
    public function getDifficuly()
    {
        return $this->difficuly;
    }

    /**
     * Set listID
     *
     * @param integer $listID
     *
     * @return ListItem
     */
    public function setListID($listID)
    {
        $this->listID = $listID;

        return $this;
    }

    /**
     * Get listID
     *
     * @return int
     */
    public function getListID()
    {
        return $this->listID;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return ListItem
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return ListItem
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return ListItem
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return ListItem
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }
}

