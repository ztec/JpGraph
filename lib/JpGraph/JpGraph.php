<?php
namespace JpGraph;

class JpGraph 
{

    static public $loaded = false ;
    static public $modules = array();

    static public function load(){
        if(self::$loaded !== true){
            include_once __DIR__.'/src/jpgraph.php';
            self::$loaded = true ;
        }
    }
    
    static public function module($moduleName){
        self::load();
        if(!in_array($moduleName,self::$modules)){
            $path = __DIR__.'/src/jpgraph_'.$moduleName.'.php' ;
            if(file_exists($path)){
                include_once $path ;
            }else{
                throw new ModuleNotFoundException('The JpGraphs\'s module "'.$moduleName.'" does not exist');
            }
        }
    }
}

