<?php

namespace BW\Strings;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of String
 *
 * @author Victor
 */
class String {
    
    /**
     * Literal string
     * @var string
     */
    private $string;
    
    
    /**
     * String constructor
     * @param string $string
     */
    public function __construct($string = '') {
        $this->string = (string) $string;
    }
    
    /**
     * New instance initialization of String class
     * @param string $string
     * @return \BW\String\String
     */
    public static function init($string = '') {

        return new self($string, FALSE);
    }
    
    /**
     * New instance initialization of String class, passed by reference.
     * Singleton realization
     * @param string $string
     * @return \BW\String\String
     */
    public static function initSingleton($string = '') {

        return new self($string, TRUE);
    }
    
    public function __toString() {
        
        return $this->string;
    }
    
    public function toString() {
        
        return $this->string;
    }
    

    // Object return
    /**
     * Trimmed string
     * @return \BW\String\String
     */
    public function trim() {
        $string = trim($this->string);
        
        return new self($string);
    }
    
    public function trimLeft() {
        $string = ltrim($this->string);
        
        return new self($string);
    }
    
    public function trimRight() {
        $string = rtrim($this->string);
        
        return new self($string);
    }
    
    public function replace($search, $replace) {
        $string = str_replace($search, $replace, $this->string);
        
        return new self($string);
    }
    
    public function replaceAll($pattern, $replacement) {
        $string = preg_replace($pattern, $replacement, $this->string);
        
        return new self($string);
    }

    public function toLower() {
        $string = strtolower($this->string);
        
        return new self($string);
    }
    
    public function toUpper() {
        $string = strtoupper($this->string);
        
        return new self($string);
    }
    
    // Integer return
    /**
     * Length of string
     * @return integer
     */
    public function length() {
        
        return strlen($this->string);
    }
    
    // Boolean return
    /**
     * Check empty string
     * @return boolean
     */
    public function isEmpty() {
        
        return $this->string ? FALSE : TRUE;
    }
}