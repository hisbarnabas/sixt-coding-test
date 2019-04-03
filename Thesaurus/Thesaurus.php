<?php

class Thesaurus
{
    /**
     * @var array
     */
    private $thesaurus;

    /**
     * @param array $thesaurus
     */
    function __construct($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    /**
     * @param string $word
     */
    public function getSynonyms($word)
    {
        $synonyms = isset($this->thesaurus[$word]) ? $this->thesaurus[$word] : [];
        return json_encode([
            "word" => $word,
            "synonyms" => $synonyms
        ]);
    }
}