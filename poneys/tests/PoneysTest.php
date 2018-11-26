<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de Poneys
 */
class PoneysTest extends TestCase
{

    private $Poneys;

    public function setUp()
    {
        $this->Poneys = new Poneys();
        $this->Poneys->setCount(8);
    }

    public function tearDown()
    {
        $this->Poneys = null;
    }


    /**
    * @dataProvider NumberProvider
    */
    public function testRemovePoneyFromField($Number,$expected)
    {

        //action
        $this->Poneys->removePoneyFromField($Number);

        // Assert
        $this->assertEquals($expected, $this->Poneys->getCount());

    }


    public function testRemovePoneyFromFieldNegativeExeption()
    {
        
        $this->expectExceptionMessage("Negative poney count");

        $this->Poneys->removePoneyFromField(10);
    }

    public function testAddPoneyInField()
    {
       
        // Action 
        $this->Poneys->addPoneyInField(2);

        // Assert
        $this->assertEquals(10,$this->Poneys->getCount());
    }

    public function testPlaceLeftFalse()
    {
        
        $this->Poneys->addPoneyInField(10);

        $this->assertFalse($this->Poneys->placesLeft());
    }

    public function testPlaceLeftTrue()
    {
       
        $this->Poneys->addPoneyInField(1);

        $this->assertTrue($this->Poneys->placesLeft());
    }

    public function NumberProvider()
    {
        return [
            [1,7],
            [5,3]
        ];
    }

}
?>
