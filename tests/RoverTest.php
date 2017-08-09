<?php
require __DIR__ . '/../src/Rover.php';

use PHPUnit\Framework\TestCase;

final class RoverTest extends TestCase{

  public function testSetX()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);

    $this->assertEquals($rangeRover->getX(),1);
  }

  public function testSetY()
  {
    $rangeRover = new Rover();

    $rangeRover->setY(1);

    $this->assertEquals($rangeRover->getY(),1);
  }

  public function testSetDirection()
  {
    $rangeRover = new Rover();

    $rangeRover->setDirection("N");

    $this->assertEquals($rangeRover->getDirection(),"N");
  }

  public function testForwardNord()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("N");

    $rangeRover->forward($rangeRover->getDirection());

    $this->assertEquals($rangeRover->getDirection(),"N");
    $this->assertEquals($rangeRover->getX(),1);
    $this->assertEquals($rangeRover->getY(),0);

  }

  public function testForwardSud()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("S");

    $rangeRover->forward($rangeRover->getDirection());

    $this->assertEquals($rangeRover->getDirection(),"S");
    $this->assertEquals($rangeRover->getX(),1);
    $this->assertEquals($rangeRover->getY(),2);
  }

  public function testForwardEst()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("E");

    $rangeRover->forward($rangeRover->getDirection());

    $this->assertEquals($rangeRover->getDirection(),"E");
    $this->assertEquals($rangeRover->getX(),2);
    $this->assertEquals($rangeRover->getY(),1);
  }

  public function testForwardWest()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("W");

    $rangeRover->forward($rangeRover->getDirection());

    $this->assertEquals($rangeRover->getDirection(),"W");
    $this->assertEquals($rangeRover->getX(),0);
    $this->assertEquals($rangeRover->getY(),1);
  }



  //#test des turn
  public function testTurnLeftDirectionNord()
  {

    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("N");

    $rangeRover->turnLeft();

    $this->assertEquals($rangeRover->getDirection(),"W");

  }

  public function testTurnLeftDirectionEst()
  {

    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("E");

    $rangeRover->turnLeft();

    $this->assertEquals($rangeRover->getDirection(),"N");

  }

  public function testTurnLeftDirectionSud()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("S");

    $rangeRover->turnLeft();

    $this->assertEquals($rangeRover->getDirection(),"E");
  }

  public function testTurnLeftDirectionWest()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("S");

    $rangeRover->turnLeft();

    $this->assertEquals($rangeRover->getDirection(),"E");
  }

  public function testBackwardNord()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("N");

    $rangeRover->backward($rangeRover->getDirection());

    $this->assertEquals($rangeRover->getDirection(),"N");
    $this->assertEquals($rangeRover->getX(),1);
    $this->assertEquals($rangeRover->getY(),2);

  }

  public function testBackwardEst()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("E");

    $rangeRover->backward($rangeRover->getDirection());

    $this->assertEquals($rangeRover->getDirection(),"E");
    $this->assertEquals($rangeRover->getX(),0);
    $this->assertEquals($rangeRover->getY(),1);

  }

  public function testBackwardSud()
  {
    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("S");

    $rangeRover->backward($rangeRover->getDirection());

    $this->assertEquals($rangeRover->getDirection(),"S");
    $this->assertEquals($rangeRover->getX(),1);
    $this->assertEquals($rangeRover->getY(),0);

  }

  public function testBackwardWest()
  {

    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("W");

    $rangeRover->backward($rangeRover->getDirection());

    $this->assertEquals($rangeRover->getDirection(),"W");
    $this->assertEquals($rangeRover->getX(),2);
    $this->assertEquals($rangeRover->getY(),1);

  }

  public function testTurnRightSud(){

    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("S");

    $rangeRover->turnRight();

    $this->assertEquals($rangeRover->getDirection(),"W");

  }

  public function testTurnRightWest(){

    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("W");

    $rangeRover->turnRight();

    $this->assertEquals($rangeRover->getDirection(),"N");

  }

  public function testTurnRightNord(){

    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("N");

    $rangeRover->turnRight();

    $this->assertEquals($rangeRover->getDirection(),"E");

  }

  public function testTurnRightEst(){

    $rangeRover = new Rover();

    $rangeRover->setX(1);
    $rangeRover->setY(1);
    $rangeRover->setDirection("E");

    $rangeRover->turnRight();

    $this->assertEquals($rangeRover->getDirection(),"S");

  }

}
