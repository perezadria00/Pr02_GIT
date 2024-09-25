<?php

namespace App\Models;

use ArrayObject;

/**
 * Represents a team in a football match.
 */
class Team
{
    /**
     * Team name
     *
     * @var string
     */
    private $name;

    /**
     * List of players in the team
     *
     * @var ArrayObject
     */
    private $players;

    /**
     * Construct a Team with a name and a list of players.
     *
     * @param string      $name     Team name
     * @param ArrayObject $players  List of players
     */
    public function __construct($name, ArrayObject $players)
    {
        $this->name = $name;
        $this->players = $players;
    }

    /**
     * Get the team name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the list of players in the team.
     *
     * @return ArrayObject
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set the team name.
     *
     * @param string $name Team name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Set the list of players in the team.
     *
     * @param ArrayObject $players List of players
     */
    public function setPlayers(ArrayObject $players)
    {
        $this->players = $players;
    }

    /**
     * Start the game.
     */
    public function play()
    {
        echo "The game is starting with {$this->name} team.";
    }


    //Esta es una prueba para hacer un conflicto
    //....
    //.............
}
