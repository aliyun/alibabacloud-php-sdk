<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateExchangeRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $virtualHost;

    /**
     * @var string
     */
    public $exchangeName;

    /**
     * @var string
     */
    public $exchangeType;

    /**
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @var bool
     */
    public $internal;

    /**
     * @var string
     */
    public $alternateExchange;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'virtualHost'       => 'VirtualHost',
        'exchangeName'      => 'ExchangeName',
        'exchangeType'      => 'ExchangeType',
        'autoDeleteState'   => 'AutoDeleteState',
        'internal'          => 'Internal',
        'alternateExchange' => 'AlternateExchange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->virtualHost) {
            $res['VirtualHost'] = $this->virtualHost;
        }
        if (null !== $this->exchangeName) {
            $res['ExchangeName'] = $this->exchangeName;
        }
        if (null !== $this->exchangeType) {
            $res['ExchangeType'] = $this->exchangeType;
        }
        if (null !== $this->autoDeleteState) {
            $res['AutoDeleteState'] = $this->autoDeleteState;
        }
        if (null !== $this->internal) {
            $res['Internal'] = $this->internal;
        }
        if (null !== $this->alternateExchange) {
            $res['AlternateExchange'] = $this->alternateExchange;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }
        if (isset($map['ExchangeName'])) {
            $model->exchangeName = $map['ExchangeName'];
        }
        if (isset($map['ExchangeType'])) {
            $model->exchangeType = $map['ExchangeType'];
        }
        if (isset($map['AutoDeleteState'])) {
            $model->autoDeleteState = $map['AutoDeleteState'];
        }
        if (isset($map['Internal'])) {
            $model->internal = $map['Internal'];
        }
        if (isset($map['AlternateExchange'])) {
            $model->alternateExchange = $map['AlternateExchange'];
        }

        return $model;
    }
}
