<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateQueueRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @example 10000
     *
     * @var int
     */
    public $autoExpireState;

    /**
     * @example DLExchange
     *
     * @var string
     */
    public $deadLetterExchange;

    /**
     * @example test.dl
     *
     * @var string
     */
    public $deadLetterRoutingKey;

    /**
     * @example false
     *
     * @var bool
     */
    public $exclusiveState;

    /**
     * @example amqp-cn-v0h1kb9nu***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxLength;

    /**
     * @example 10
     *
     * @var int
     */
    public $maximumPriority;

    /**
     * @example 1000
     *
     * @var int
     */
    public $messageTTL;

    /**
     * @example DemoQueue
     *
     * @var string
     */
    public $queueName;

    /**
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
