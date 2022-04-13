<?php

namespace App\Tests\Core;

use App\Core\CardGame;
use PHPUnit\Framework\TestCase;
use App\Core\Card;
use function Sodium\compare;

class CardTest extends TestCase
{

  public function testName()
  {
    $card = new Card('As', 'Trèfle');
    $this->assertEquals('As', $card->getName());
    $card = new Card('2', 'Trèfle');
    $this->assertEquals('2', $card->getName());

  }

  public function testColor()
  {
    $card = new Card('As', 'Trèfle');
    $this->assertEquals('Trèfle', $card->getColor());
    $card = new Card('As', 'Pique');
    $this->assertEquals('Pique', $card->getColor());
  }

  public function testCompareSameCard()
  {
    $card1 = new Card('As', 'Trèfle');
    $card2 = new Card('As', 'Trèfle');
    $this->assertEquals(0, CardGame::compare($card1,$card2));
  }

  public function testCompareSameNameNoSameColor()
  {
    // TODO
      $card1 = new Card('As', 'Trèfle');
      $card2 = new Card('As', 'Pique');
      $this->assertEquals(0, CardGame::compare($card1,$card2));
  }

  public function testCompareNoSameNameSameColor()
  {
    // TODO
      $card1 = new Card('as', 'Trèfle');
      $card2 = new Card('2', 'Trèfle');
      $this->assertEquals(1, CardGame::compare($card1,$card2));
  }

  public function testCompareNoSameNameNoSameColor()
  {
    // TODO
      $card1 = new Card('as', 'Trèfle');
      $card2 = new Card('2', 'Pique');
      $this->assertEquals(1, CardGame::compare($card1,$card2));
  }

  public function testToString()
  {
    // TODO vérifie que la représentation textuelle
    // d'une carte est conforme à ce que vous attendez
    $this->fail("not implemented !");
  }

}
