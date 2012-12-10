<?php
/**
 * Created by JetBrains PhpStorm.
 * User: axhm3a
 * Date: 10.12.12
 * Time: 16:42
 * To change this template use File | Settings | File Templates.
 */
class MyClass
{
    /**
     * @var string
     */
    private $myPrivate;

    /**
     * @return string
     */
    public function getPrivate()
    {
        return $this->myPrivate;
    }

    /**
     * @param $string
     */
    public function setPrivate($string)
    {
        $this->myPrivate = $string;
    }
}
