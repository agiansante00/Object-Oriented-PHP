<?PHP
class SchoolSingleton{
 private static $schoolName;
 private static $schoolAdd;
 private static $singleInstance;
 
 private function __construct($name, $add){
 self::$schoolName = $name;
 self::$schoolAdd = $add;
 }
 
 public static function getInstance($name, $add){
 if(!(self::$singleInstance instanceof self)) {
 self::$singleInstance = new self($name, $add);
 }
 
 return self::$singleInstance;
 }
 
 public static function getSchoolName(){
 return self::$schoolName;
 }
 
 public static function getSchoolAdd(){
 return self::$schoolAdd;
 } 
 
 
 private function __clone(){
 
 }
 
}
schoolSingleton::getInstance("High School","No 2 abc city");
echo schoolSingleton::getSchoolName();
echo schoolSingleton::getSchoolAdd();
schoolSingleton::getInstance("fff","fff");
echo schoolSingleton::getSchoolName();
echo schoolSingleton::getSchoolAdd();
?>