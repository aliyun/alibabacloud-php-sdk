<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class CreateQueueRequest extends Model
{
    /**
     * @var bool
     */
    public $autoDelete;

    /**
     * @var int
     */
    public $autoExpire;

    /**
     * @var string
     */
    public $consoleSessionId;

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
    public $exclusive;

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
    public $maximunPrioty;

    /**
     * @var int
     */
    public $messageTTL;

    /**
     * @var bool
     */
    public $ordered;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var bool
     */
    public $retryInherit;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var int
     */
    public $retryTimes;

    /**
     * @var bool
     */
    public $singleActiveConsumer;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'autoDelete' => 'AutoDelete',
        'autoExpire' => 'AutoExpire',
        'consoleSessionId' => 'ConsoleSessionId',
        'deadLetterExchange' => 'DeadLetterExchange',
        'deadLetterRoutingKey' => 'DeadLetterRoutingKey',
        'exclusive' => 'Exclusive',
        'instanceId' => 'InstanceId',
        'maxLength' => 'MaxLength',
        'maximunPrioty' => 'MaximunPrioty',
        'messageTTL' => 'MessageTTL',
        'ordered' => 'Ordered',
        'queueName' => 'QueueName',
        'retryInherit' => 'RetryInherit',
        'retryInterval' => 'RetryInterval',
        'retryTimes' => 'RetryTimes',
        'singleActiveConsumer' => 'SingleActiveConsumer',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDelete) {
            $res['AutoDelete'] = $this->autoDelete;
        }

        if (null !== $this->autoExpire) {
            $res['AutoExpire'] = $this->autoExpire;
        }

        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->deadLetterExchange) {
            $res['DeadLetterExchange'] = $this->deadLetterExchange;
        }

        if (null !== $this->deadLetterRoutingKey) {
            $res['DeadLetterRoutingKey'] = $this->deadLetterRoutingKey;
        }

        if (null !== $this->exclusive) {
            $res['Exclusive'] = $this->exclusive;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }

        if (null !== $this->maximunPrioty) {
            $res['MaximunPrioty'] = $this->maximunPrioty;
        }

        if (null !== $this->messageTTL) {
            $res['MessageTTL'] = $this->messageTTL;
        }

        if (null !== $this->ordered) {
            $res['Ordered'] = $this->ordered;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->retryInherit) {
            $res['RetryInherit'] = $this->retryInherit;
        }

        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }

        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
        }

        if (null !== $this->singleActiveConsumer) {
            $res['SingleActiveConsumer'] = $this->singleActiveConsumer;
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
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
        if (isset($map['AutoDelete'])) {
            $model->autoDelete = $map['AutoDelete'];
        }

        if (isset($map['AutoExpire'])) {
            $model->autoExpire = $map['AutoExpire'];
        }

        if (isset($map['ConsoleSessionId'])) {
            $model->consoleSessionId = $map['ConsoleSessionId'];
        }

        if (isset($map['DeadLetterExchange'])) {
            $model->deadLetterExchange = $map['DeadLetterExchange'];
        }

        if (isset($map['DeadLetterRoutingKey'])) {
            $model->deadLetterRoutingKey = $map['DeadLetterRoutingKey'];
        }

        if (isset($map['Exclusive'])) {
            $model->exclusive = $map['Exclusive'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }

        if (isset($map['MaximunPrioty'])) {
            $model->maximunPrioty = $map['MaximunPrioty'];
        }

        if (isset($map['MessageTTL'])) {
            $model->messageTTL = $map['MessageTTL'];
        }

        if (isset($map['Ordered'])) {
            $model->ordered = $map['Ordered'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['RetryInherit'])) {
            $model->retryInherit = $map['RetryInherit'];
        }

        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }

        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }

        if (isset($map['SingleActiveConsumer'])) {
            $model->singleActiveConsumer = $map['SingleActiveConsumer'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
