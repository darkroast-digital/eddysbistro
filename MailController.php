<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

$mg = Mailgun::create('key-1715c074f053673f6e3c4c79e8595390');

# Now, compose and send your message.
# $mg->messages()->send($domain, $params);
$mg->messages()->send('eddysbistro.ca', [
  'from'    => $_POST['email'],
  'to'      => 'embistro@outlook.com',
  'subject' => 'New Reservation Request',
  'html'    => $_POST['name'] . " is requesting a reservation at Eddy's Bistro on " . 
              $_POST['date'] . " at " . $_POST['time'] . ". <br/>
              The number of guests in the party are " . $_POST['guests'] . ".<br/>" .
              $_POST['name'] . " can be reached at " . $_POST['phone'] . 
              " or by email at " . $_POST['email']
]);