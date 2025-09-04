<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

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
    public $autoDeleteState;

    /**
     * @var string
     */
    public $exchangeName;

    /**
     * @var string
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
    public $virtualHost;

    /**
     * @var string
     */
    public $XDelayedType;
    protected $_name = [
        'alternateExchange' => 'AlternateExchange',
        'autoDeleteState' => 'AutoDeleteState',
        'exchangeName' => 'ExchangeName',
        'exchangeType' => 'ExchangeType',
        'instanceId' => 'InstanceId',
        'internal' => 'Internal',
        'virtualHost' => 'VirtualHost',
        'XDelayedType' => 'XDelayedType',
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

        if (null !== $this->autoDeleteState) {
            $res['AutoDeleteState'] = $this->autoDeleteState;
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

        if (null !== $this->virtualHost) {
            $res['VirtualHost'] = $this->virtualHost;
        }

        if (null !== $this->XDelayedType) {
            $res['XDelayedType'] = $this->XDelayedType;
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

        if (isset($map['AutoDeleteState'])) {
            $model->autoDeleteState = $map['AutoDeleteState'];
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

        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }

        if (isset($map['XDelayedType'])) {
            $model->XDelayedType = $map['XDelayedType'];
        }

        return $model;
    }
}
