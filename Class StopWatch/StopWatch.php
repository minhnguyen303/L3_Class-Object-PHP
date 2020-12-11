<?php
class StopWatch{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->start();
    }

    function start(){
        $this->startTime = round(microtime(true) * 1000);
    }

    function stop(){
        $this->endTime = round(microtime(true) * 1000);
    }

    function getElapsedTime(){
        return $this->endTime - $this->startTime;
    }

    /**
     * @return false|string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

}