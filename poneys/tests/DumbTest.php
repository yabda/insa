<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de Poneys
 */
class DumbTest extends TestCase
{
	public function testGetName()
	{   
	    $Poneys = $this->getMockBuilder(Poneys::class)->setMethods(['getNames'])->getMock();

	    $Poneys->method('getNames')->willReturn(["Banane","Cajou","Tomate","SuperMan"]);
	}
}
