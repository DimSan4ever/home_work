<?php
class LuckyTicket{
    protected $leftPart;
    protected $rightPart;
    protected $luckyNumbers=array();
    private $lengs;
    private $count;
    
    public function getLengs(){return $this->lengs*2;}
    public function  getCount(){return $this->count;}
    public function  getLuckyNumbers(){return $this->luckyNumbers;}

    public function __construct($lengs=6) {
        if($lengs<2){
         echo'<p>sorry not enable variable</p>';   
         self::__construct(2);         
        }else{
        $this->create($lengs);
        $this->countTicket();        
        }
    }
    
    public function create($lengs){
        $this->lengs=(int)$lengs/2;
        $this->leftPart=str_repeat('9',$this->lengs);
        $this->rightPart=str_repeat('9',$this->lengs);        
    }
    
    public function countTicket(){
        for($i=$this->leftPart;$i!=-1;$i--){
            $iSum=$this->sum(strval($i));
            for($j=$this->rightPart;$j!=-1;$j--){
               if($iSum==$this->sum(strval($j))){
                   $format='%0'.  $this->lengs.'u';
                   array_push($this->luckyNumbers, sprintf($format,$i).sprintf($format,$j));
                   $this->count++;
               } 
            }
        }        
    }
    
    private function sum($part){
        $sum=0;
        $strlengs=strlen($part);
        for($i=0;$i<$strlengs;$i++){
            $sum+=$part[$i];            
        }
        return $sum;
    }
}
$check=new LuckyTicket();
echo $check->getCount();
echo '<pre>';
print_r($check->getLuckyNumbers());
echo '</pre>';