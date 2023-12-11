<?php
    $colors = array("red", "blue", "green");
    list($red, $blue, $green) = $colors; // $red="red", $blue="blue", $green="green"
?>

<?php
    function retrieve_user_profile() {
        $user[] = "Jason";
        $user[] = "Jason@example.com";
        $user[] = "English";
        return $user; // Menambahkan return untuk mengembalikan nilai $user
    }
    
    list($name, $email, $language) = retrieve_user_profile();
    echo "Name: $name, email: $email, preferred language: $language";
?>