<?php

class FileOwners
{
    /**
     * @param array $files
     * @return array
     */
    public static function groupByOwners($files)
    {
        $filesByOwners = [];
        foreach($files as $file => $owner){
            if(!isset($filesByOwners[$owner])){
                $filesByOwners[$owner] = [];
            }
            $filesByOwners[$owner][] = $file;
        }
        return $filesByOwners;
    }
}