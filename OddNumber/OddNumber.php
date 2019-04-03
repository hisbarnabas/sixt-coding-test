<?php

class OddNumber
{
    /**
     * @var int[]
     */
    private $numbers;

    /**
     * @param array $numbers
     */
    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * @return int
     * @throws Exception
     */
    public function find()
    {
        $arr_counts = array_count_values($this->numbers);
        $arr_values = array_flip($arr_counts);
        
        // handle the exceptional case, first
        if(count($arr_values) <= 1){
            throw new Exception("No OddNumber has been found.");
        }

        // initialize the values before counting
        foreach($arr_values as $cnt => $val){
            $arr_values[$cnt] = 0;
        }
        // count to evaluate which one is odd among the elements
        foreach($arr_counts as $idx => $cnt){
            $arr_values[$cnt]++;
        }
        asort($arr_values);
        $min_count = array_keys($arr_values)[0];
        $item = array_search($min_count, $arr_counts);

        return $item;
    }
}