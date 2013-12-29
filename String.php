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
//    public static function initSingleton($string = '') {
//
//        return new self($string, TRUE);
//    }
    
    public function __toString() {
        
        return $this->string;
    }
    
    public function toString() {
        
        return $this->string;
    }
    
    public function printing() {
        
        print $this->string;
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
    
    public function toLowerCase() {
        $string = strtolower($this->string);
        
        return new self($string);
    }
    
    /**
     * Alias of toLowerCase() method
     * 
     * @return \BW\String\String
     */
    public function toLower() {
        
        return $this->toLowerCase();
    }
    
    public function toUpperCase() {
        $string = strtoupper($this->string);
        
        return new self($string);
    }
    
    /**
     * Alias of toUpperCase() method
     * 
     * @return \BW\String\String
     */
    public function toUpper() {
        
        return $this->toUpperCase();
    }
    
    public function toCapitalizeFirst() {
        $string = ucfirst($this->string);
        
        return new self($string);
    }
    
    /**
     * Alias of toCapitalizeFirst() method
     * 
     * @return \BW\String\String
     */
    public function toCapitalize() {
        
        return $this->toCapitalizeFirst();
    }
    
    public function toCapitalizeWords() {
        $string = ucwords($this->string);
        
        return new self($string);
    }
    
    /**
     * Alias of toCapitalizeWords() method
     * 
     * @return \BW\String\String
     */
    public function toCapitalizeFully() {
        
        return $this->toCapitalizeWords();
    }
    
    public function subString($start, $length) {
        
        return new self( substr($this->string, $start, $length) );
    }
    
    public function subStringTo($length) {
        
        return new self( substr($this->string, 0, $length) );
    }
    
    public function subStringFrom($start) {
        
        return new self( substr($this->string, $start) );
    }
    
    public function append($string) {
        
        return new self( $this->string . $string );
    }
    
    public function prepend($string) {
        
        return new self( $string . $this->string );
    }
    
    /**
     * Alias of prepend() method
     * 
     * @return \BW\String\String
     */
    public function appendTo($string) {
        
        return $this->prepend($string);
    }
    
    /**
     * Alias of append() method
     * 
     * @return \BW\String\String
     */
    public function prependTo($string) {
        
        return $this->append($string);
    }
    
    /**
     * Alias of append() method
     * 
     * @return \BW\String\String
     */
    public function concat($string) {
        
        return $this->append($string);
    }
    
    public function md5() {
        
        return new self( md5($this->string) );
    }
    
    public function sha1() {
        
        return new self( sha1($this->string) );
    }
    
    public function crypt($salt = '') {
        
        return new self( crypt($this->string, $salt) );
    }
    
    public function hash($algorithm) {
        try {
            if ( in_array($algorithm, hash_algos()) ) {

                return new self( hash($algorithm, $this->string) );
            }
            throw new \Exception("Algorithm \"$algorithm\" not found!");
        } catch (\Exception $e) {
            print 'Exception detected! '. $e->getMessage();
        }
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