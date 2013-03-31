<?php
namespace JpGraph ;

class JpGraph {

    static private $loaded = false ;
    static private $modules = array();

    static function load(){
        if(self::$loaded !== true){
            include_once 'src/jpgraph.php';
            self::$loaded = true ;
        }
    }
    static function module($moduleName){
        self::load();
        if(!in_array($moduleName,self::$modules)){
            include_once 'src/jpgraph_'.$moduleName.'.php' ;
        }
    }
}

?>