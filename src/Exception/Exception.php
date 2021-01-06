<?php


namespace Kong95\Exception;


class Exception
{

    /**
     * @param string $message
     * @param int $code
     * @throws \Exception
     */
    public static function error(string $message, int $code = 0)
    {
        throw new \Exception($message, $code);
    }


    /**
     * @param string $message
     * @param int $code
     * @throws InvalidArgumentException
     */
    public static function invalidArgument(string $message, int $code = 422)
    {
        throw new InvalidArgumentException($message, $code);
    }


    /**
     * @param string $name
     * @param int $code
     * @throws PermissionException
     */
    public static function permission(string $name, int $code = 401)
    {
        throw new PermissionException($name,$code);
    }
}