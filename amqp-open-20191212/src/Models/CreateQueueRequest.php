<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Dara\Model;

class CreateQueueRequest extends Model
{
    /**
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @var int
     */
    public $autoExpireState;

    /**
     * @var string
     */
    public $deadLetterExchange;

    /**
     * @var string
     */
    public $deadLetterRoutingKey;

    /**
     * @var bool
     */
    public $exclusiveState;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var int
     */
    public $maximumPriority;

    /**
     * @var int
     */
    public $messageTTL;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'autoDeleteState' => 'AutoDeleteState',
        'autoExpireState' => 'AutoExpireState',
        'deadLetterExchange' => 'DeadLetterExchange',
        'deadLetterRoutingKey' => 'DeadLetterRoutingKey',
        'exclusiveState' => 'ExclusiveState',
        'instanceId' => 'InstanceId',
        'maxLength' => 'MaxLength',
        'maximumPriority' => 'MaximumPriority',
        'messageTTL' => 'MessageTTL',
        'queueName' => 'QueueName',
        'virtualHost' => 'VirtualHost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
