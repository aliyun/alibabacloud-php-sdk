<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateQueueRequest extends Model
{
    /**
     * @description Specifies whether to automatically delete the queue. Valid values:
     *
     *   true: The queue is automatically deleted. After the last consumer unsubscribes from the queue, the queue is automatically deleted.
     *   false: The queue is not automatically deleted.
     *
     * @example false
     *
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @description The validity period after which the queue is automatically deleted. If the queue is not accessed within the specified period of time, the queue is automatically deleted.
     *
     * >  You can use the feature that corresponds to this parameter only after you enable the feature. To enable the feature, [submit a ticket](https://ticket-intl.console.aliyun.com/#/ticket/createIndex).
     * @example 10000
     *
     * @var int
     */
    public $autoExpireState;

    /**
     * @description The dead-letter exchange. A dead-letter exchange is used to receive rejected messages.
     *
     * If a consumer rejects a message that cannot be redelivered, ApsaraMQ for RabbitMQ routes the message to the specified dead-letter exchange. Then, the dead-letter exchange routes the message to the queue that is bound to the dead-letter exchange for storage.
     * @example DLExchange
     *
     * @var string
     */
    public $deadLetterExchange;

    /**
     * @description The dead-letter routing key. The key must be 1 to 255 characters in length, and can contain only letters, digits, hyphens (-), underscores (\_), periods (.), number signs (#), forward slashes (/), and at signs (@).
     *
     * @example test.dl
     *
     * @var string
     */
    public $deadLetterRoutingKey;

    /**
     * @description Specifies whether the exchange is an exclusive exchange. Valid values:
     *
     *   true: The exchange is an exclusive exchange. Only the connection that declares the exclusive exchange can use the exclusive exchange. After the connection is closed, the exclusive exchange is automatically deleted.
     *   false: The exchange is not an exclusive exchange.
     *
     * @example false
     *
     * @var bool
     */
    public $exclusiveState;

    /**
     * @description The ID of the ApsaraMQ for RabbitMQ instance on which you want to create a queue.
     *
     * @example amqp-cn-v0h1kb9nu***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is unavailable in the current version of ApsaraMQ for RabbitMQ.
     *
     * The maximum number of messages that can be stored in the queue. If this threshold is exceeded, the earliest stored messages in the queue are deleted.
     * @example 1000
     *
     * @var int
     */
    public $maxLength;

    /**
     * @description Queue priorities are not supported. The value does not affect the call or return results.
     *
     * @example 10
     *
     * @var int
     */
    public $maximumPriority;

    /**
     * @description The message time to live (TTL) of the queue.
     *
     *   If the retention period of a message in the queue exceeds the message TTL of the queue, the message expires.
     *   The message TTL must be set to a non-negative integer. The maximum message TTL is one day. Unit: milliseconds. For example, if the message TTL is 1,000 milliseconds, the message can be retained for up to 1 second in the queue.
     *
     * @example 1000
     *
     * @var int
     */
    public $messageTTL;

    /**
     * @description The name of the queue that you want to create.
     *
     *   The name must be 1 to 255 characters in length, and can contain only letters, digits, hyphens (-), underscores (\_), periods (.), number signs (#), forward slashes (/), and at signs (@).
     *   After the queue is created, you cannot change the name of the queue. If you want to change the name of the queue, delete the queue and create another queue.
     *
     * @example DemoQueue
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The name of the vhost to which the queue that you want to create belongs. The name must be 1 to 255 characters in length, and can contain only letters, digits, hyphens (-), underscores (\_), periods (.), number signs (#), forward slashes (/), and at signs (@).
     *
     * @example test
     *
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'autoDeleteState'      => 'AutoDeleteState',
        'autoExpireState'      => 'AutoExpireState',
        'deadLetterExchange'   => 'DeadLetterExchange',
        'deadLetterRoutingKey' => 'DeadLetterRoutingKey',
        'exclusiveState'       => 'ExclusiveState',
        'instanceId'           => 'InstanceId',
        'maxLength'            => 'MaxLength',
        'maximumPriority'      => 'MaximumPriority',
        'messageTTL'           => 'MessageTTL',
        'queueName'            => 'QueueName',
        'virtualHost'          => 'VirtualHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeleteState) {
            $res['AutoDeleteState'] = $this->autoDeleteState;
        }
        if (null !== $this->autoExpireState) {
            $res['AutoExpireState'] = $this->autoExpireState;
        }
        if (null !== $this->deadLetterExchange) {
            $res['DeadLetterExchange'] = $this->deadLetterExchange;
        }
        if (null !== $this->deadLetterRoutingKey) {
            $res['DeadLetterRoutingKey'] = $this->deadLetterRoutingKey;
        }
        if (null !== $this->exclusiveState) {
            $res['ExclusiveState'] = $this->exclusiveState;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->maximumPriority) {
            $res['MaximumPriority'] = $this->maximumPriority;
        }
        if (null !== $this->messageTTL) {
            $res['MessageTTL'] = $this->messageTTL;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->virtualHost) {
            $res['VirtualHost'] = $this->virtualHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoDeleteState'])) {
            $model->autoDeleteState = $map['AutoDeleteState'];
        }
        if (isset($map['AutoExpireState'])) {
            $model->autoExpireState = $map['AutoExpireState'];
        }
        if (isset($map['DeadLetterExchange'])) {
            $model->deadLetterExchange = $map['DeadLetterExchange'];
        }
        if (isset($map['DeadLetterRoutingKey'])) {
            $model->deadLetterRoutingKey = $map['DeadLetterRoutingKey'];
        }
        if (isset($map['ExclusiveState'])) {
            $model->exclusiveState = $map['ExclusiveState'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['MaximumPriority'])) {
            $model->maximumPriority = $map['MaximumPriority'];
        }
        if (isset($map['MessageTTL'])) {
            $model->messageTTL = $map['MessageTTL'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }

        return $model;
    }
}
