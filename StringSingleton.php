<?php

namespace BW\Strings;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StringSingleton
 *
 * @author Victor
 */
class StringSingleton {
    
    private static $instance;  // object instance
    
    private function __construct()  { /* ... @return Singleton */ }  // Защищаем от создания через new Singleton
    private function __clone()      { /* ... @return Singleton */ }  // Защищаем от создания через клонирование
    private function __wakeup()     { /* ... @return Singleton */ }  // Защищаем от создания через unserialize
    
    public static function getInstance() {    // Возвращает единственный экземпляр класса. @return Singleton
        if ( ! isset(self::$instance) ) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }
    
}
