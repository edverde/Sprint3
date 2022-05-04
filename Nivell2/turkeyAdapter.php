<?php



class TurkeyAdapter extends Duck{
    private $turkey;
    public function __construct(Turkey $turkey){
       $this->turkey=$turkey;
    }
    public function fly(){
      
      for($i=0;$i<5;$i++){
        $this->turkey->fly();
      }
      
        
    }
    public function quack(){
        return  $this->turkey->gobble();
    }


    
 

}

?>