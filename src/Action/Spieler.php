<?php


class Spieler
{
    public $name = "";
    public $vorname = "";
    public $email = "";
    public $jahrgang = 0;
    public $mannschaft_id = 0;
    public $captain = false;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getJahrgang()
    {
        return $this->jahrgang;
    }

    /**
     * @param int $jahrgang
     */
    public function setJahrgang($jahrgang)
    {
        $this->jahrgang = $jahrgang;
    }

    /**
     * @return int
     */
    public function getMannschaftId()
    {
        return $this->mannschaft_id;
    }

    /**
     * @param int $mannschaft_id
     */
    public function setMannschaftId($mannschaft_id)
    {
        $this->mannschaft_id = $mannschaft_id;
    }

    /**
     * @return bool
     */
    public function isCaptain()
    {
        return $this->captain;
    }

    /**
     * @param bool $captain
     */
    public function setCaptain($captain)
    {
        $this->captain = $captain;
    }



}