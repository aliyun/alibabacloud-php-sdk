<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class CreateExchangeRequest extends Model
{
    /**
     * @var string
     */
    public $alternateExchange;

    /**
     * @var bool
     */
    public $autoDelete;

    /**
     * @var string
     */
    public $consoleSessionId;

    /**
     * @var string
     */
    public $exchangeName;

    /**
     * @var int
     */
    public $exchangeType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $internal;

    /**
     * @var string
     */
    public $vhostName;

    /**
     * @var string
     */
    public $XDelayedType;

    /**
     * @var string
     */
    public $XHashHeader;
    protected $_name = [
        'alternateExchange' => 'AlternateExchange',
        'autoDelete' => 'AutoDelete',
        'consoleSessionId' => 'ConsoleSessionId',
        'exchangeName' => 'ExchangeName',
        'exchangeType' => 'ExchangeType',
        'instanceId' => 'InstanceId',
        'internal' => 'Internal',
        'vhostName' => 'VhostName',
        'XDelayedType' => 'XDelayedType',
        'XHashHeader' => 'XHashHeader',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alternateExchange) {
            $res['AlternateExchange'] = $this->alternateExchange;
        }

        if (null !== $this->autoDelete) {
            $res['AutoDelete'] = $this->autoDelete;
        }

        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->exchangeName) {
            $res['ExchangeName'] = $this->exchangeName;
        }

        if (null !== $this->exchangeType) {
            $res['ExchangeType'] = $this->exchangeType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->internal) {
            $res['Internal'] = $this->internal;
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
        }

        if (null !== $this->XDelayedType) {
            $res['XDelayedType'] = $this->XDelayedType;
        }

        if (null !== $this->XHashHeader) {
            $res['XHashHeader'] = $this->XHashHeader;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlternateExchange'])) {
            $model->alternateExchange = $map['AlternateExchange'];
        }

        if (isset($map['AutoDelete'])) {
            $model->autoDelete = $map['AutoDelete'];
        }

        if (isset($map['ConsoleSessionId'])) {
            $model->consoleSessionId = $map['ConsoleSessionId'];
        }

        if (isset($map['ExchangeName'])) {
            $model->exchangeName = $map['ExchangeName'];
        }

        if (isset($map['ExchangeType'])) {
            $model->exchangeType = $map['ExchangeType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Internal'])) {
            $model->internal = $map['Internal'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        if (isset($map['XDelayedType'])) {
            $model->XDelayedType = $map['XDelayedType'];
        }

        if (isset($map['XHashHeader'])) {
            $model->XHashHeader = $map['XHashHeader'];
        }

        return $model;
    }
}
