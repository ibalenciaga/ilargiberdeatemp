<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

$nombre=$_POST['name'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

# Instantiate the client.
$mgClient = new Mailgun('key-7d3731153da186bcdbe9516ee41ffb0c');
$domain = "sandboxbcbbf59d0c3545f29435bd0c5ed1599d.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => $nombre. ' <'.$email.'>',
    'to'      => 'ilargiberdea <ilargiberdea.e@gmail.com>',
    'subject' => 'Mensaje de ' .$nombre,
    'text'    => $mensaje
));

header("location:correoOk.php");
?>
