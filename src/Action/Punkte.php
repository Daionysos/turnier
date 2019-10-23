<?php


class Punkte
{
    public $punkt = 0;
    public $punkt1 = 0;
    public $punkt2 = 0;
    public $punkt3 = 0;
    public $punkt4 = 0;
    public $diff1 = 0;
    public $diff2 = 0;
    public $diff3 = 0;
    public $diff4 = 0;
    public $beschreibung = "";
    public $besetzt = false;

    /**
     * @return int
     */
    public function getPunkt()
    {
        return $this->punkt;
    }

    /**
     * @param int $punkt
     */
    public function setPunkt($punkt)
    {
        $this->punkt = $punkt;
    }

    /**
     * @return int
     */
    public function getPunkt1()
    {
        return $this->punkt1;
    }

    /**
     * @param int $punkt1
     */
    public function setPunkt1($punkt1)
    {
        $this->punkt1 = $punkt1;
    }

    /**
     * @return int
     */
    public function getPunkt2()
    {
        return $this->punkt2;
    }

    /**
     * @param int $punkt2
     */
    public function setPunkt2($punkt2)
    {
        $this->punkt2 = $punkt2;
    }

    /**
     * @return int
     */
    public function getPunkt3()
    {
        return $this->punkt3;
    }

    /**
     * @param int $punkt3
     */
    public function setPunkt3($punkt3)
    {
        $this->punkt3 = $punkt3;
    }

    /**
     * @return int
     */
    public function getPunkt4()
    {
        return $this->punkt4;
    }

    /**
     * @param int $punkt4
     */
    public function setPunkt4($punkt4)
    {
        $this->punkt4 = $punkt4;
    }

    /**
     * @return int
     */
    public function getDiff1()
    {
        return $this->diff1;
    }

    /**
     * @param int $diff1
     */
    public function setDiff1($diff1)
    {
        $this->diff1 = $diff1;
    }

    /**
     * @return int
     */
    public function getDiff2()
    {
        return $this->diff2;
    }

    /**
     * @param int $diff2
     */
    public function setDiff2($diff2)
    {
        $this->diff2 = $diff2;
    }

    /**
     * @return int
     */
    public function getDiff3()
    {
        return $this->diff3;
    }

    /**
     * @param int $diff3
     */
    public function setDiff3($diff3)
    {
        $this->diff3 = $diff3;
    }

    /**
     * @return int
     */
    public function getDiff4()
    {
        return $this->diff4;
    }

    /**
     * @param int $diff4
     */
    public function setDiff4($diff4)
    {
        $this->diff4 = $diff4;
    }

    /**
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * @param string $beschreibung
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

    /**
     * @return mixed
     */
    public function getBesetzt()
    {
        return $this->besetzt;
    }

    /**
     * @param mixed $besetzt
     */
    public function setBesetzt($besetzt)
    {
        $this->besetzt = $besetzt;
    }




}