<?php
class Example{
    public function __construct($something) {
        $this->SomeThing($something);
        
    }
    public function SomeThing($something)
    {
        echo $something;
    }
    
    
}
$area = new Example("somthing here");

?>
