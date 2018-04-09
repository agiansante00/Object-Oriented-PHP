<?PHP
 Class MyObject{
 public function __construct(){
 echo "I have just been created.";
 }
 public function __destruct(){
 echo "I lived only for 5 seconds in the memory.";
 }
 }
 // current time
 echo date('h:i:s');
 
 $testObj = new MyObject();
 
 sleep (5);
 
 echo date('h:i:s');
 
 unset($testObj);
?>