<?php
class BankAccount{
    public $balance = 0;
    
    public function DisplayBalance()
    {
        return "Balance: ".$this->balance;
    }
    public function Withdraw($amount)
    {
       if( ($this->balance) > $amount)
       {
            $this->balance = $this->balance - $amount;
       }
       else
       {
           echo "not enough money ";
       }
    }
    public function Deposit($amount) {
        $this->balance = $this->balance = $amount;
        
    }
}
class SavingAccount Extends BankAccount{
    
}
$alyan = new BankAccount;
$alyan->Deposit(1000);
$alyan->Withdraw(500);
echo $alyan->DisplayBalance()."<br>";


$alyan_saving = new SavingAccount;
$alyan_saving->Deposit(1000);
$alyan_saving->Withdraw(100);
echo $alyan_saving->DisplayBalance();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
