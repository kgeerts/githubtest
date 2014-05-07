<?php

/**
 * a short description of the Calculator object
 * 
 * een veel langere beschrijving kan hier volgen <br>
 * en je kan er zelfs tags in gebruiken <br>
 * selected <b>HTML-tags</b> kunnen gebruikt worden
 * 
 * @package Chapter5
 * @author ADMINKRIS <kjtgeerts@gmail.com>
 * @version 1.2
 * @Copyright Never
 * @link http://mathonu.wordpress.com
 * 
 */
class Calculator {
    
    /**
     * 
     * 
     * @param1 is het eerste getal dat we willen optellen
     * @param2 is het tweede getal dat we willen optellen 
     * @return Double Hier krijgen we de som terug
     * 
     * @version 1.1
     * 
    * @assert (1,1) == 2
    * @assert (0,1) == 1
    * @assert (1,0) == 0
    * @assert (1,1) == 2
    * @assert (1,2) == 3
    **/
  
    public function Calc($a, $b) {
        return $a + $b;
   
    }
    
      public function Substract($a, $b) {
        return $a - $b;
   
    }

}

?>
