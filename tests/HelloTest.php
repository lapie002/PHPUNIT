<?php
require __DIR__ . '/../src/Hello.php';

// declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers Hello
 */
final class HelloTest extends TestCase
{
//...code
public function testIndex()
{
  $this->assertTrue(true);
}

public function testHelloIsInstantiable()
{
  $hello = new Hello();
  $hello->setGreetings('Tartempion');


  $this->assertEquals($hello->greetings,'Bonjour cher Tartempion');

}

public function testReturnUsername()
{
  $hello = new Hello();
  $hello->setGreetings('John Doe');

  $this->assertEquals($hello->greetings,'Bonjour cher John Doe');

}

public function testGetNamePomme()
{
  $hello = new Hello();
  $hello->setGreetings('Pomme');

  $name = $hello->getName();

  $this->assertEquals($hello->name,'Pomme');

}

public function testGetNameFrommage()
{
  $hello = new Hello();
  $hello->setGreetings('Fromage');

  echo $hello->mangerDesPates("bolognaise");

  // $name = $hello->getName();

  $this->assertEquals($hello->getName(),'Fromage');

}


}
