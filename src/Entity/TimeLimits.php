<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="time_limits")
 */
class TimeLimits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $returnStartTime;

    /**
     * @ORM\Column(type="integer")
     */
    private $leaveTime;

    /**
     * @ORM\Column(type="integer")
     */
    private $endTime;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getReturnStartTime()
    {
        return $this->returnStartTime;
    }

    public function setReturnStartTime($returnStartTime)
    {
        $this->returnStartTime = $returnStartTime;
    }

    public function getLeaveTime()
    {
        return $this->leaveTime;
    }

    public function setLeaveTime($leaveTime)
    {
        $this->leaveTime = $leaveTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
}