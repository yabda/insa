<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $_count = $GLOBALS["INIT_PONEYS_NUMBER"];

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->_count;
    }

    public function setCount($number)
    {
        $this->_count = $number;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if (($this->_count-$number) < 0){
            throw new Exception("Negative poney count");
        }
        $this->_count -= $number;
    }

    public function placesLeft()
    {
        return ($this->_count<=$GLOBALs["SIZE_FIELD"]?true:false);
    }


    /**
    *
    * Ajoute u poney dans un champ
    *
    * @param int $number nombre de poney a ajouter
    *
    * @return void
    */
    public function addPoneyInField(int $number): void
    {
        $this->_count += $number;
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }
}
?>
