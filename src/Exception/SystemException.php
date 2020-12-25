<?php
declare (strict_types=1);

namespace niweisi\Poster\Exception;

class SystemException extends Exception
{

    public function __construct($message = "")
    {
        parent::__construct("ErrorSystem : " . $message, self::SYSTEM_CODE, null);
    }

}
