<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class TimeLimits
{
    protected $returnStartTime;
    protected $leaveTime;
    protected $endTime;

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