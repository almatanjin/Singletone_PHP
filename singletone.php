<?php declare(static_types=1);

namespace Alma\Demo\classes;



class Singleton
{
   private static $instance = null;
    private function __construct()
    {
       
    
    }
    private function __clone()
    {
        
    }
    private function __wakeup()
    {
        
    }

    public static function getInstance()
    {
        if(static::$instance === null){
            static::$instance = new static();
        }

        return static::$instance;
    }


}

$singleton = Singleton::getInstance();
