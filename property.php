<?php
class BankAccount{
    private $balance = 1550;
    
    public function DisplayBalance()
    {
        return $this->balance;
    }
    public function Withdraw($amount)
    {
       if( ($this->balance) > $amount)
       {
            $this->balance = $this->balance - $amount;
       }
       else
       {
           echo "not enough money";
       }
    }
}
$alyan = new BankAccount;

echo $alyan->DisplayBalance();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
