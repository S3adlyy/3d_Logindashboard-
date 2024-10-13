<?php
class Form {
    private $email;
    private $password;

    function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    function verif() {
        // Simple validation (you can implement your actual logic)
        if (empty($this->email) || empty($this->password)) {
            return false; // Return false if validation fails
        }

        // Here you can add your logic for checking email and password
        // For now, we'll just assume any non-empty credentials are valid
        return true;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form = new Form($_POST["email"], $_POST["password"]);
    
    // Validate the form input
    if ($form->verif()) {
        // Redirect to file.php on successful validation
        header("Location: file.php");
        exit();
    } else {
        // If validation fails, redirect back to index.php
        header("Location: index.php");
        exit();
    }
} else {
    // If accessed without POST request, redirect to index.php
    header("Location: index.php");
    exit();
}
?>
