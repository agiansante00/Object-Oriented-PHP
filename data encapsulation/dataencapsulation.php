?php
 class CreditCard{
 const CARDNUMBER = "1111222233334444";
 private $totalBalance = 1000;
 private $pinNumber = "1234";
 
 
 public function getCardnumber(){
 return self::CARDNUMBER;
 }
 public function getTotalBalance(){
 return $this->totalBalance;
 }
 private function setTotalBalance($balance){
 $this->totalBalance = $balance;
 }
 public function setPin($newPin){
 if( preg_match( "/^[1-9]\d{3}$/", $newPin )){
 $this->pinNumber = $newPin;
 }else{
 echo "Pin number should be a string of 4 digits and first digit should not be zero.";
 }
 
 }
 public function getPin(){
 return $this->pinNumber;
 }
 
 public function withdrawMoney($cardNumber, $pinNumber, $withdrawMoney){
 if($cardNumber===$this->getCardnumber() && $pinNumber=== $this->getPin()){
 $withdrawMoney = $withdrawMoney + $withdrawMoney *(3/100);
 if($withdrawMoney <= $this->getTotalBalance()){
 $remBalance = $this->getTotalBalance() - $withdrawMoney;
 $this->setTotalBalance($remBalance);
 echo "You have withdrawn $withdrawMoney dollars and your remaining balance is $remBalance.";
 }else{
 echo "You dont have enough balance in your account.";
 }
 }else{
 echo "Your card number or pin is invalid.";
 }
 }
 }
 
 $ccObj = new CreditCard;
 $ccObj->setPin("3344");
 $ccObj->withdrawMoney("1111222233334444", "3344", 490);
 $ccObj->getTotalBalance();
?>