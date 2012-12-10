<?php

require_once 'MyClass.php';
/*
    The client sends two messages using two different sockets
    and then exits
*/

parse_str(implode('&', array_slice($argv, 1)), $_GET);

/* Create new queue object */
$queue = new ZMQSocket(new ZMQContext(), ZMQ::SOCKET_REQ, "MySock1");
$queue->connect("tcp://127.0.0.1:5555");

/* Assign socket 1 to the queue, send and receive */

$myClass = new MyClass();
$myClass->setPrivate($_GET['m']);
$queue->send(serialize($myClass));
