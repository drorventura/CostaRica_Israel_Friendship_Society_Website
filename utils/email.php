<?php
    // email address to send errors
    $adminEmail = "costarica.israel.association@gmail.com";

    function spamCheck($field) {
        // Sanitize e-mail address
        $field=filter_var($field, FILTER_SANITIZE_EMAIL);

        // Validate e-mail address
        if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function sendErrorToAdmin($subject,$message) {
        // email address to send errors
        global $adminEmail;
        return mail($adminEmail, $subject, $message, "From: $adminEmail\n");
    }

?>
