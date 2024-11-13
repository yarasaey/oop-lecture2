<?php
class BabyCar extends Product{
    public $age ;
    public $weigth;
    private  $specialtax=9;
    private $materials=["Nylon","Leatherette","Mesh Fabric","ReinForced Plastic"];


  public function displaymaterials(){
   return $this->materials;

 }
 public function allspecialtax(){
    return $this->specialtax;
 }

 public function PrintMaterialList() {
    $material = $this->displaymaterials();
        
    if (empty($material)) {
        echo "No materials available.\n";
        return;
    }

    echo "List of materials:\n";
    echo "<ul>\n"; 
    foreach ($material as $mater) {
        echo "    <li>" . htmlspecialchars($mater) . "</li>\n"; 
    }
    echo "</ul>\n"; 
}

 public function GetFinalprice(){
    if(isset($this->price)&& isset($this->specialtax)){
return $this->price + $this->specialtax ;
 }
 else{
    return "hello";
 }
}
}