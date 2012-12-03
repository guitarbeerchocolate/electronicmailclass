<?php
require 'classes/autoload.php';
$e = new electronicmail;
$e->to = 'guitarbeerchocolate@googlemail.com';
$e->from = 'guitarbeerchocolate@googlemail.com';
$e->subject = 'text e-mail test message with attachment';
$e->textmessage = 'Hello Mick'.PHP_EOL.'Glad you could make it'.PHP_EOL.'Mick';
// $e->htmlmessage = '<html>Hello Mick<br /><strong>Very glad</strong> you could make it.<p>Mick</p></html>';
$e->attachment = 'loading.gif';
echo $e->sendemail();
?>