<?php

require_once('forms/RegistrationForm.php');

$msg = '';
$form = new RegistrationForm($_POST);

if ($_POST) {
    if ($form->validate()) {
        echo 'ok';
        // to be continued
    } else {
        $msg = $form->passwordsMatch() ? 'Please fill in fields' : 'Passwords don\'t match';
    }
}

?>

<html>
<head>
    <title>Register</title>
</head>
<body>
<h1>Register new user</h1>

<b><?=$msg; ?></b>

<br/>
<form method="post">
    Email: <input type="email" name="email" value="<?= $form->getEmail(); ?>"/> <br/><br/>
    Username: <input type="text" name="username" value="<?= $form->getUsername(); ?>"/> <br/><br/>
    Password: <input type="password" name="password"/> <br/><br/>
    Confirm password: <input type="password" name="passwordConfirm"/> <br/><br/>
    <input type="submit"/>
</form>

</body>
