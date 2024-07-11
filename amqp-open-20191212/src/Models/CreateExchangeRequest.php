<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateExchangeRequest extends Model
{
    /**
     * @description The alternate exchange. An alternate exchange is used to receive messages that fail to be routed to queues from the current exchange.
     *
     * @example DemoAE
     *
     * @var string
     */
    public $alternateExchange;

    /**
     * @description Specifies whether to automatically delete the exchange. Valid values:
     *
     *   **true**: If the last queue that is bound to the exchange is unbound, the exchange is automatically deleted.
     *   **false**: If the last queue that is bound to the exchange is unbound, the exchange is not automatically deleted.
     *
     * This parameter is required.
     * @example false
     *
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @description The name of the exchange that you want to create. The exchange name must meet the following conventions:
     *
     *   The name must be 1 to 255 characters in length, and can contain only letters, digits, hyphens (-), underscores (_), periods (.), number signs (#), forward slashes (/), and at signs (@).
     *   After the exchange is created, you cannot change its name. If you want to change its name, delete the exchange and create another exchange.
     *
     * This parameter is required.
     * @example DemoExchange
     *
     * @var string
     */
    public $exchangeName;

    /**
     * @description The exchange type. Valid values:
     *
     *   **DIRECT**: An exchange of this type routes a message to the queue whose binding key is exactly the same as the routing key of the message.
     *   **TOPIC**: This type of exchange is similar to direct exchanges. An exchange of this type routes a message to one or more queues based on the results of the fuzzy match or multi-condition match between the routing key of the message and the binding keys of the current exchange.
     *   **FANOUT**: An exchange of this type routes all received messages to all queues bound to this exchange. You can use a fanout exchange to broadcast messages.
     *   **HEADERS**: This type of exchange is similar to direct exchanges. The only difference is that a headers exchange routes messages based on the headers attributes instead of routing keys. When you bind a headers exchange to a queue, you must configure binding attributes in the key-value format for the binding. When you send a message to a headers exchange, you must configure the headers attributes in the key-value format for the message. After a headers exchange receives a message, the exchange routes the message based on the matching results between the headers attributes of the message and the binding attributes of the bound queues.
     *   **X-CONSISTENT-HASH**: An exchange of this type allows you to perform hash calculations on routing keys or header values and use consistent hashing to route a message to different queues.
     *
     * This parameter is required.
     * @example DIRECT
     *
     * @var string
     */
    public $exchangeType;

    /**
     * @description The ID of the ApsaraMQ for RabbitMQ for which you want to create an exchange.
     *
     * This parameter is required.
     * @example amqp-cn-v0h1kb9nu***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether the exchange is an internal exchange. Valid values:
     *
     *   **false**
     *   **true**
     *
     * This parameter is required.
     * @example false
     *
     * @var bool
     */
    public $internal;

    /**
     * @description The name of the vhost to which the exchange that you want to create belongs.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $virtualHost;

    /**
     * @var string
     */
    public $XDelayedType;
    protected $_name = [
        'alternateExchange' => 'AlternateExchange',
        'autoDeleteState'   => 'AutoDeleteState',
        'exchangeName'      => 'ExchangeName',
        'exchangeType'      => 'ExchangeType',
        'instanceId'        => 'InstanceId',
        'internal'          => 'Internal',
        'virtualHost'       => 'VirtualHost',
        'XDelayedType'      => 'XDelayedType',
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
        if (null !== $this->XDelayedType) {
            $res['XDelayedType'] = $this->XDelayedType;
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
        if (isset($map['XDelayedType'])) {
            $model->XDelayedType = $map['XDelayedType'];
        }

        return $model;
    }
}
