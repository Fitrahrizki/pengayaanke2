<?php

class App{
    public function_construct()
}
    $url = $this->parseURL();
    var_dump($url);
{
    class app{
        protected$controller ='portofolio';//controller default
        protected$method     ='index';     //method default
        protected$params     =[];          //parameter jika ada

        public function_construct()
        {
            $url = $this->parseURL();

            //pemanggilan controller
            if(file_exists('../admin/controllers/'.$url[0].'.php')){
                $this->controller=$url[0];
                unset($url[0]);
            }
            
        }
    }
}