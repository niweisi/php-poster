<?php
declare (strict_types=1);

namespace niweisi\Poster\Exception;

class PosterException extends Exception
{

    public function __construct($message = "")
    {
        parent::__construct("PosterException : " . $message, self::ERROR_POSTER_CODE, null);
    }

}
