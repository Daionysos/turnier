<?php


class Mannschaften
{
    public $name ='';
    public $details = '';
    public $gruppen_id = 0;
    public $punkte_id = 0;

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getGruppenId()
    {
        return $this->gruppen_id;
    }

    /**
     * @return int
     */
    public function getPunkteId()
    {
        return $this->punkte_id;
    }

    /**
     * @param string $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @param int $gruppen_id
     */
    public function setGruppenId($gruppen_id)
    {
        $this->gruppen_id = $gruppen_id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $punkte_id
     */
    public function setPunkteId($punkte_id)
    {
        $this->punkte_id = $punkte_id;
    }


}