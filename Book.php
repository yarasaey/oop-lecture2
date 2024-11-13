<?php
class Book extends Product{
    private $publishers=[];
    public $writer;
    public $color;
    public $supplier;

    //set publishers
    public function setpublisher(){
       $this->publishers=['Ahmed shawky','AHMEd Ref3at','Nageeb Mahfouz','Taha Hussien'];
        
    }
    // choose random publishers
    public function choosepublisher() {
        if (!empty($this->publishers)) {
            $randomIndex = array_rand($this->publishers);
            return $this->publishers[$randomIndex]; 
        }else{return' hello'; }
        
    }

    
     public function showallpublisher(){
       return $this->publishers ;
        

      }
      public function printPublishersList() {
        $publishers = $this->showallpublisher();
            
        if (empty($publishers)) {
            echo "No publishers available.\n";
            return;
        }

        echo "List of Publishers:\n";
        echo "<ul>\n"; 
        foreach ($publishers as $publisher) {
            echo "    <li>" . htmlspecialchars($publisher) . "</li>\n"; 
        }
        echo "</ul>\n"; 
    }

       
        
    }



