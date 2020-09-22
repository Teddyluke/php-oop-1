<?php

  class User {
// obbligatori
    public $username;
    public $password;
    public $email;
    public $dateofbirth;
// facoltativi
    public $profilePic;
    public $telephoneNum;

    public function __construct($username, $password, $email, $dateofbirth){

      $this -> username = $username;
      $this -> password = $password;
      $this -> email = $email;
      $this -> dateofbirth = $dateofbirth;

    }

    public function __toString() {

      $str = "User <br> Name: " . $this -> username . "<br>"
      . "Password: " . $this -> password . "<br>"
      . "Mail: " . $this -> email . "<br>"
      . "Date of birth: " . $this -> dateofbirth . "<br>";

      if ($this -> profilePic) {
        $str .= "Profile Pic: " . $this -> profilePic . "<br>";
      }
      else {
        $str .= "profile Pic: --- <br>";
      }

      if ($this -> telephoneNum) {
        $str .= "Telephone: " . $this -> telephoneNum . "<br>";
      }
      else {
        $str .= "Telephone: --- <br>";
      }
      return $str;
    }
  }

  $userone = new User("Guybrush", "MonkeyIsland", "meelee@island.com","14-02-1980");
  $userone -> telephoneNum = 3491234567;

  $usertwo = new User("Rufus", "Rascal", "deponia@junkyard.com","27-08-1990");
  $usertwo -> profilePic = "this is a cutie picture";

  echo $userone . "<br>";
  echo $usertwo;




 ?>
