<?php
class User {
    public string $name;
    public string $surname;
    public string $username;
    protected bool $is_admin = false;

    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public function getFullName() {
        $full_name = $this->name . ' ' . $this->surname;
        if ($this->is_admin) {
            $full_name .= ' admin';
        }
        return $full_name;
    }
}


$user1 = new User("Jan", "Kowalski", "jankowal123");
$user2 = new User("Tomasz", "Baks", "tomaszbaks324235");
#$user2->is_admin = true; 

echo $user1->getFullName() . "\n"; 
echo $user2->getFullName() . "\n"; 

?>