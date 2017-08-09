<?php

final class Rover
{
  public $x;
  public $y;
  public $direction;

  // public function __construct()
  // {
  //
  //
  // }

  //#SETTERS
  public function setX(int $number)
  {
    $this->x = $this->x + $number;
  }

  public function setY(int $number)
  {
    $this->y = $this->y + $number;
  }

  public function setDirection(string $orientation)
  {
    $this->direction = $orientation;
  }

  //#Getters
  public function getX()
  {
    return $this->x;
  }

  public function getY()
  {
    return $this->y;
  }

  public function getDirection()
  {
    return $this->direction;
  }

  //#Methodes
  public function forward()
  {
    switch($this->getDirection()) {
      case 'N':
        $this->setY(-1);
        break;

      case 'E':
        $this->setX(1);
        break;

      case 'S':
        $this->setY(1);
        break;


      case 'W':
        $this->setX(-1);
        break;

      default:
        break;
    }
  }

  public function backward()
  {
    switch($this->getDirection()) {
      case 'N':
        $this->setY(1);
        break;

      case 'E':
        $this->setX(-1);
        break;

      case 'S':
        $this->setY(-1);
        break;


      case 'W':
        $this->setX(+1);
        break;

      default:
        break;
    }
  }

  public function turnLeft()
  {
    switch($this->getDirection()){

        case 'N':
          $this->setDirection("W");
          break;

        case 'E':
          $this->setDirection("N");
          break;

        case 'S':
          $this->setDirection("E");
          break;

        case 'W':
          $this->setDirection("S");
          break;

        default:
          break;
    }
  }

  public function turnRight()
  {
    switch($this->getDirection()){

        case 'N':
          $this->setDirection("E");
          break;

        case 'E':
          $this->setDirection("S");
          break;

        case 'S':
          $this->setDirection("W");
          break;

        case 'W':
          $this->setDirection("N");
          break;

        default:
          break;
    }
  }





}
