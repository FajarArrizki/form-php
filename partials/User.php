<?php
/**
 * User Class (PBO)
 */
class User {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = htmlspecialchars($firstname);
        $this->lastname = htmlspecialchars($lastname);
        $this->phone = htmlspecialchars($phone);
        $this->address = htmlspecialchars($address);
    }

    public function getFullName() {
        return $this->firstname . " " . $this->lastname;
    }
}
?>
