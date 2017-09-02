<?php

namespace Jikan\Lib\Parser;

use Jikan\Model\Manga as MangaModel;

class MangaParse extends TemplateParse
{

    public function parse() {

        $this->model = new MangaModel;

        /*
         * Rules
         */



        /*
         * Parsing
         */

        foreach ($this->file as $lineNo => $line) {
            $this->line = $line;
            $this->lineNo = $lineNo;

            $this->find();
        }

        return (array) $this->model;

    }


}