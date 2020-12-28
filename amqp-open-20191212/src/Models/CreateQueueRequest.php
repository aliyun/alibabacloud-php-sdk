<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateQueueRequest extends Model
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
    public $queueName;

    /**
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @var bool
     */
    public $exclusiveState;

    /**
     * @var int
     */
    public $messageTTL;

    /**
     * @var int
     */
    public $autoExpireState;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $deadLetterExchange;

    /**
     * @var string
     */
    public $deadLetterRoutingKey;

    /**
     * @var int
     */
    public $maximumPriority;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'virtualHost'          => 'VirtualHost',
        'queueName'            => 'QueueName',
        'autoDeleteState'      => 'AutoDeleteState',
        'exclusiveState'       => 'ExclusiveState',
        'messageTTL'           => 'MessageTTL',
        'autoExpireState'      => 'AutoExpireState',
        'maxLength'            => 'MaxLength',
        'deadLetterExchange'   => 'DeadLetterExchange',
        'deadLetterRoutingKey' => 'DeadLetterRoutingKey',
        'maximumPriority'      => 'MaximumPriority',
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
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->autoDeleteState) {
            $res['AutoDeleteState'] = $this->autoDeleteState;
        }
        if (null !== $this->exclusiveState) {
            $res['ExclusiveState'] = $this->exclusiveState;
        }
        if (null !== $this->messageTTL) {
            $res['MessageTTL'] = $this->messageTTL;
        }
        if (null !== $this->autoExpireState) {
            $res['AutoExpireState'] = $this->autoExpireState;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->deadLetterExchange) {
            $res['DeadLetterExchange'] = $this->deadLetterExchange;
        }
        if (null !== $this->deadLetterRoutingKey) {
            $res['DeadLetterRoutingKey'] = $this->deadLetterRoutingKey;
        }
        if (null !== $this->maximumPriority) {
            $res['MaximumPriority'] = $this->maximumPriority;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['AutoDeleteState'])) {
            $model->autoDeleteState = $map['AutoDeleteState'];
        }
        if (isset($map['ExclusiveState'])) {
            $model->exclusiveState = $map['ExclusiveState'];
        }
        if (isset($map['MessageTTL'])) {
            $model->messageTTL = $map['MessageTTL'];
        }
        if (isset($map['AutoExpireState'])) {
            $model->autoExpireState = $map['AutoExpireState'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['DeadLetterExchange'])) {
            $model->deadLetterExchange = $map['DeadLetterExchange'];
        }
        if (isset($map['DeadLetterRoutingKey'])) {
            $model->deadLetterRoutingKey = $map['DeadLetterRoutingKey'];
        }
        if (isset($map['MaximumPriority'])) {
            $model->maximumPriority = $map['MaximumPriority'];
        }

        return $model;
    }
}
