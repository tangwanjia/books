<?php
    function filterBooks($books, $haveRead) {
        return array_filter($books, function($book) use ($haveRead){
            //either yes or not,  book haveRead match argument haveRead(boolean)
            return $book ['haveRead'] === $haveRead;
        });
        
     }