<?php

namespace App\Models;

/**
 * Representation of a Game
 */
class Game
{
    /**
     * Field where the game is played
     *
     * @var Field
     */
    private $field;

    /**
     * Team #1 vs. Team #2
     *
     * @var array
     */
    private $teams = [];

    /**
     * Get the field where the game is played
     *
     * @return Field
     */
    public function getField(): Field
    {
        return $this->field;
    }

    /**
     * Set the field where the game is played
     *
     * @param Field $field Field where the game is played
     *
     * @return self
     */
    public function setField(Field $field): self
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Get teams (Team #1 vs. Team #2)
     *
     * @return array
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * Set teams (Team #1 vs. Team #2)
     *
     * @param array $teams Team #1 vs. Team #2
     *
     * @return self
     */
    public function setTeams(array $teams): self
    {
        $this->teams = $teams;
        return $this;
    }

    /**
     * Start the game
     */
    public function start()
    {
        echo "The game is starting";
    }
}

