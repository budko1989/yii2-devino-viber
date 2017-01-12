<?php

namespace budko1989\devinoviber;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\Component;

/**
 * Class for send Viber messages
 * @author  Budko Vyacheslav <budko.v1989@gmail.com>
 * @package budko1989\devinoviber
 * 
 */
class DevinoViber extends Component
{
	/**
     * Devino login
     *
     * @var string
     */
    public $login;

    /**
     * Devino password
     *
     * @var string
     */
    public $password;

    /**
     * Devino sender
     *
     * @var string
     */
    public $sender;

    /**
     * Debug mode
     *
     * @var bool
     */
    public $debug = false;

    /**
     * @var SoapClient
     */
    protected $client;
    /**
     * Wsdl url
     *
     * @var string
     */
    protected $url = 'https://viber.devinotele.com:444';
    
    public function sendText($text, $phone)
    {
        return [
        	'login' => $this->login,
        	'password' => $this->password,
        	'sender' => $this->sender,
        	'debug' => $this->debug,
        	'url' => $this->url,
        ];
    }
    
    public function sendImage()
    {
        return "Hello!";
    }

    public function sendButton()
    {
        return "Hello!";
    }
}
