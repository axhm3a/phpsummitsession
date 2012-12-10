<?php

require_once 'MyClass.php';
/*
    The server waits for messages from the client
    and echoes back the received message
*/
$server = new ZMQSocket(new ZMQContext(), ZMQ::SOCKET_REP);
$server->bind("tcp://127.0.0.1:5555");

/* Loop receiving and echoing back */
while ($message = $server->recv()) {
    $myClass = (unserialize($message));
    echo ">>>" . $myClass->getPrivate() . PHP_EOL;
    /* echo back the message */
    $server->send($message);
}