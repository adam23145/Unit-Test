<?php


use PHPUnit\Framework\TestCase;

require_once "Login.php";


class loginTest extends TestCase{
    public function testlogin(){

        $log = new Login();

        $email = "ganery231@gmail.com";
        $password ="123";

        $login = $log->LoginSystem($email,$password);

        $this->assertTrue($login);
    }

}

?>
