<?php

namespace App\Models;

/**
 * Represents a Player.
 */
class Player extends Person
{
    /**
     * Player name
     *
     * @var string
     */
    private $name;

    /**
     * Player Status
     *
     * @var boolean
     */
    private $active;

    /**
     * Construct a Player with a name and the status.
     *
     * @param string $name Player name
     * @param bool $active Player Status
     */
    public function __construct(string $name, bool $active)
    {
        $this->name = $name;
        $this->active = $active;
    }

    /**
     * Get Player name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get Player Status
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Set Player name in string
     *
     * @param string $name is string
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set status in bool
     *
     * @param bool $active is true or false
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Pass the ball to another player.
     *
     * @param Player $player The player to pass the ball to
     *
     * @return void
     */
    public function passBall(Player $player): void
    {
        echo "{$this->name} passes the ball to {$player->getName()}.\n";
    }
}

