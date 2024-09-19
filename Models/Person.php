<?php

namespace App\Models;

/**
 * Represents any person.
 */
class Person
{
/**
   * age of person
   *
   * @var int
   */
  private $age;
  
  /**
     * Name of person
     *
     * @var string
     */
    private $name;

  /**
   * Get age of person
   *
   * @return  int
   */ 
  public function getAge()
  {
    return $this->age;
  }

  /**
   * Set age of person
   *
   * @param  int  $age  age of person
   *
   * @return  self
   */ 
  public function setAge(int $age)
  {
      $this->age = $age;
      
      return $this;
    }

    /**
     * Get name of person
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of person
     *
     * @param string $name Name of person
     *
     * @return self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    function run()
    {
      echo "running";
    }
}