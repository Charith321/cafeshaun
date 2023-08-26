<?php
class DB {
    private $con;

    public function __construct() {
        $this->con = mysqli_connect("localhost", "id21012671_admin", "Cafesh@ad12", "id21012671_cafedb") or die('Could not connect: ' . mysqli_error());
    }

    public function validateLogin($username, $password) {
        $sql = mysqli_query($this->con, "SELECT * FROM user WHERE una='$username' AND pass='$password'");
        return mysqli_fetch_assoc($sql);
    }


    public function __destruct() {
        mysqli_close($this->con);
    }
}
?>
