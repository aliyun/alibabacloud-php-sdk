<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters\exchange;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters\instanceId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters\messageId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters\properties;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters\queueName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters\routingKey;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters\targetType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters\virtualHostName;
use AlibabaCloud\Tea\Model;

class sinkRabbitMQParameters extends Model
{
    /**
     * @description The message content.
     *
     * @var body
     */
    public $body;

    /**
     * @description The exchange mode. This parameter is available only if TargetType is set to Exchange.
     *
     * @var exchange
     */
    public $exchange;

    /**
     * @description The target service type is Message Queue for RabbitMQ instance.
     *
     * @var instanceId
     */
    public $instanceId;

    /**
     * @description The message ID.
     *
     * @var messageId
     */
    public $messageId;

    /**
     * @description The tags that are used to filter messages.
     *
     * @var properties
     */
    public $properties;

    /**
     * @description The queue mode. This parameter is available only if TargetType is set to Queue.
     *
     * @var queueName
     */
    public $queueName;

    /**
     * @description The routing rule for the message. This parameter is available only if TargetType is set to Exchange.
     *
     * @var routingKey
     */
    public $routingKey;

    /**
     * @description The target type.
     *
     * @var targetType
     */
    public $targetType;

    /**
     * @description The name of the vhost of the Message Queue for RabbitMQ instance.
     *
     * @var virtualHostName
     */
    public $virtualHostName;
    protected $_name = [
        'body'            => 'Body',
        'exchange'        => 'Exchange',
        'instanceId'      => 'InstanceId',
        'messageId'       => 'MessageId',
        'properties'      => 'Properties',
        'queueName'       => 'QueueName',
        'routingKey'      => 'RoutingKey',
        'targetType'      => 'TargetType',
        'virtualHostName' => 'VirtualHostName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->exchange) {
            $res['Exchange'] = null !== $this->exchange ? $this->exchange->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = null !== $this->instanceId ? $this->instanceId->toMap() : null;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = null !== $this->messageId ? $this->messageId->toMap() : null;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = null !== $this->queueName ? $this->queueName->toMap() : null;
        }
        if (null !== $this->routingKey) {
            $res['RoutingKey'] = null !== $this->routingKey ? $this->routingKey->toMap() : null;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = null !== $this->targetType ? $this->targetType->toMap() : null;
        }
        if (null !== $this->virtualHostName) {
            $res['VirtualHostName'] = null !== $this->virtualHostName ? $this->virtualHostName->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkRabbitMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }
        if (isset($map['Exchange'])) {
            $model->exchange = exchange::fromMap($map['Exchange']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = instanceId::fromMap($map['InstanceId']);
        }
        if (isset($map['MessageId'])) {
            $model->messageId = messageId::fromMap($map['MessageId']);
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }
        if (isset($map['QueueName'])) {
            $model->queueName = queueName::fromMap($map['QueueName']);
        }
        if (isset($map['RoutingKey'])) {
            $model->routingKey = routingKey::fromMap($map['RoutingKey']);
        }
        if (isset($map['TargetType'])) {
            $model->targetType = targetType::fromMap($map['TargetType']);
        }
        if (isset($map['VirtualHostName'])) {
            $model->virtualHostName = virtualHostName::fromMap($map['VirtualHostName']);
        }

        return $model;
    }
}
