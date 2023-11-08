<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateExchangeRequest extends Model
{
    /**
     * @example DemoAE
     *
     * @var string
     */
    public $alternateExchange;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @example DemoExchange
     *
     * @var string
     */
    public $exchangeName;

    /**
     * @example DIRECT
     *
     * @var string
     */
    public $exchangeType;

    /**
     * @example amqp-cn-v0h1kb9nu***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $internal;

    /**
     * @example test
     *
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'alternateExchange' => 'AlternateExchange',
        'autoDeleteState'   => 'AutoDeleteState',
        'exchangeName'      => 'ExchangeName',
        'exchangeType'      => 'ExchangeType',
        'instanceId'        => 'InstanceId',
        'internal'          => 'Internal',
        'virtualHost'       => 'VirtualHost',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExchangeRequest
     */
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

        return $model;
    }
}
