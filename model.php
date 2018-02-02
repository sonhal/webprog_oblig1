<?php
/**
 * Created by PhpStorm.
 * User: son
 * Date: 31.01.18
 * Time: 22:51
 */

class Customer {

    private $name, $phonenr, $email;

    public function __construct($name, $phonenr, $email)
    {
        $this->email = $email;
        $this->name = $name;
        $this->phonenr = $phonenr;
    }

    public function getName(){
        return $this->name;
    }

    public function getPhonenr(){
        return $this->phonenr;
    }

    public function getEmail(){
        return $this->email;
    }

    public function __toString()
    {
        return "Customer object for: ".$this->name;
    }


}

class Order {
    private $ticket_type, $ticket_count, $customer;

    public function __construct($ticket_type, $ticket_count, Customer $customer)
    {
        $this->customer = $customer;
        $this->ticket_type = $ticket_type;
        $this->ticket_count = $ticket_count;
    }

    public function getCustomer(){
        return $this->customer;
    }

    public function getTicket_type(){
        return $this->ticket_type;
    }

    public function getTicket_count(){
        return $this->ticket_count;
    }


    public function getOrderInfo(){
        return array($this->customer,$this->ticket_type,$this->ticket_count);
    }

    public function saveToFile(){
        try{
            $file = fopen("orders.txt", "a");
            fwrite($file, "\n".$this->createFileString());
            return true;
        }catch (Exception $err){
            return false;
        }finally{
            fclose($file);
        }

    }

    private function createFileString(){
       return $this->customer->getName().";".$this->customer->getEmail().";".$this->customer->getPhonenr().";".$this->ticket_type.";".$this->ticket_count;

    }
}

class ObjectToTextTransformer{

    public function createTableRowFromArray($array){
        $string = "<tr>";
        foreach ($array as $value){
            $string .= "<td>".$value."<td>";
        }
        $string .= "</tr>";
        return $string;
    }

}
