<?php


namespace Kong95\Exception;


class PermissionException extends \Exception
{

    public function __construct(string $name,$code=401)
    {
        parent::__construct(sprintf('Permission error: "%s".', $name),$code);
    }

}