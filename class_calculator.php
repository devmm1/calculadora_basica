<?php
    class calculator{
        public function calculate($value1, $value2, $option){
            switch ($option) {
                case 'addition':
                    return($value1 + $value2);
                    break;
                case 'subtraction':
                    return($value1 - $value2);
                    break;
                case 'multiplication':
                    return($value1 * $value2);
                    break;
                case 'division':
                    return($value1 / $value2);
                    break;                                        
                default:
                    # code...
                    break;
                    /**dsafsdf */
            }
        }
    }
?>