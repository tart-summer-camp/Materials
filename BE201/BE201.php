<?php

/**
 * Definig a new class
 */
class MessageQueueService {
    
}

/**
 * Definig a new class and variables
 */
class MessageQueueService {

    /**
     * @var TartInterop_WorkQueue();
     */
    protected $_workQueue;

    /**
     * @var string
     */
    protected $_queueName;

}

/**
 * Defining constructor
 */
class MessageQueueService {

    /**
     * @var string
     */
    protected $_queueName;

    function __construct($config) {
        if (isset($config["mqConnection"])) {
            $this->_queueName = $config["queue"]["name"];
        } else {
            throw new MessageQueueNotEnabledException();
        }
    }

}

/**
 * Defining constructor and methods
 */
class MessageQueueService {

    /**
     * @var string
     */
    protected $_queueName;

    function __construct($config) {
        if (!isset($config["mqConnection"])) {
            throw new MessageQueueNotEnabledException();
        }
    }

    /**
     * Following methods will demonstrate access modifiers
     * for PHP
     */

    /**
     * Public method
     * 
     * @param array $filterParam 
     * @return string | bool
     */
    public function notifyConsumingEvent($filterParam) {
        if (isset($filterParam[0])) {
            return $filterParam[0];
        } else {
            return false;
        }
    }

    /**
     * Private method
     * 
     * @param int $ids 
     */
    private function _notifyConsumingEvent($ids) {
        echo 'Hello World!';
    }

    /**
     * Protected method
     * 
     * @param int $ids 
     */
    protected function notifyConsumingEvents($ids) {
        
    }

}

/**
 * Demonstrating encapsulation
 */
class MessageQueueService {

    /**
     * @var string
     */
    private $_queueName;

    public function getQueueName() {
        return $this->_queueName;
    }

    public function setQueueName($queueName) {
        $this->_queueName = $queueName;
    }

}

/**
 * Demonstrating reaching to a method in an object 
 */
class MessageQueueModel {

    function __construct() {
        $messageQueueService = new MessageQueueService();
        $messageQueueService->getQueueName();
    }

}

/**
 * Demonstrating object matching
 */
class MessageQueueModel {

    function __construct() {
        echo (0 == "0");
        //output (true)

        echo (0 === "0");
        //output (false)

        echo (0 == NULL);
        //output (true)
    }

}

/**
 * Demonstrating fake overloading
 */
class MessageQueueModel {

    /**
     * @var TartInterop_WorkQueue();
     */
    protected $_workQueue;

    /**
     * @var string
     */
    protected $_queueName;

    public function setVariables($_workQueue, $_queueName = NULL) {
        $this->_workQueue = $_workQueue;
        if (is_null($_queueName)) {
            $this->_queueName = 'This was null';
        }
    }

}

/**
 * Demonstrating static function
 */
class MessageQueueModel {

    public static function setVariables($_name, $_surName) {
        //
    }

}

//MessageQueueModel::setVariables('name', 'surName');

class MessageQueueModel {

    public static function setVariables($_name, $_surName) {
        //exception
        $this->setName($name);
    }

    public function setName($name) {
        //
    }

}

//cannot override setVariables method
class MessageQueueModel {

    public final static function setVariables($_name, $_surName) {
        
    }

}

abstract class Metal {

    public function combine() {
        
    }

}

/**
 * Composition
 */
class Head extends Metal {

    public function activateIFF() {
        //
    }

}

class Trunk extends Metal {

    public function indicateFuelLevel() {
        //
    }

}

class Voltran {

    public $head;
    public $trunk;

    function __construct() {
        $this->head = new Head();
        $this->trunk = new Trunk();
    }

}

class BattleField {

    public $voltran;

    function __construct() {
        $this->voltran = new Voltran();
        $this->voltran->head->activateIFF();
    }

}

/**
 * Polimorfism
 */
class BattleField {

    function __construct() {
        $polimorfic = array();
        $polimorfic[] = new Head();
        $polimorfic[] = new Trunk();
        foreach ($polimorfic as $polimor) {
            $polimor->combine();
        }
    }

}

/**
 * Inheritance
 */
class MessageQueue {

    function __construct($name) {
        //
    }

    public function acknowledge() {
        //ack methods
    }

}

interface Traversable {

    public function travers();
}

class RabbitMQ extends MessageQueue implements Traversable {

    //exception
    //constructors must be compitable
    //with the parent class
    /**
      function __construct()
      {
      //
      }
     * 
     */
    function __construct($name) {
        //this parent also used in normal methods
        parent::__construct($name . '=surname');
    }

    public function travers() {
        foreach ($messages as $message) {
            
        }
    }

}

//
$seconds = $config['session']['remember_me_seconds'];
return Zend_Session::rememberMe((int) $seconds);



