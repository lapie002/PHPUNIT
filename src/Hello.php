<?php

declare(strict_types=1);

final class Hello
{

  public $greetings;
  public $name;


  public function __construct()
  {

    // string $message en Param dans le constructeur.
    //$this->greetings = "Bonjour cher " . $message;

    $this->greetings = NULL;
    $this->name = NULL;

  }

  public function getGreetings()
  {
    return $this->greetings;
  }

  public function setGreetings(string $texte)
  {
    $this->greetings = "Bonjour cher " . $texte;
    $this->name = $texte;
  }

  public function getName()
  {
    return $this->name;
  }

  public function mangerDesPates(string $sauce = "carbo")
  {
    return "des pates " . $sauce;
  }

}
