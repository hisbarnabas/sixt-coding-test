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
        $map_num_freq = array_count_values($this->numbers);
        $map_freq_cnt = array_flip($map_num_freq);

        // handle the exceptional case, first
        if(count($map_freq_cnt) <= 1){
            throw new Exception("No OddNumber has been found.");
        }

        // initialize the values before counting
        foreach($map_freq_cnt as $cnt => $val){
            $map_freq_cnt[$cnt] = 0;
        }
        // count to evaluate which one is odd among the elements
        foreach($map_num_freq as $idx => $cnt){
            $map_freq_cnt[$cnt]++;
        }

        asort($map_freq_cnt);
        $min_freq = array_keys($map_freq_cnt)[0];
        $item = array_search($min_freq, $map_num_freq);

        return $item;
    }
}