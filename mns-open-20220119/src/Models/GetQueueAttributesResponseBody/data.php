<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $activeMessages;

    /**
     * @example 1250700999
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $delayMessages;

    /**
     * @example 30
     *
     * @var int
     */
    public $delaySeconds;

    /**
     * @example 0
     *
     * @var int
     */
    public $inactiveMessages;

    /**
     * @example 1250700999
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @example True
     *
     * @var bool
     */
    public $loggingEnabled;

    /**
     * @example 65536
     *
     * @var int
     */
    public $maximumMessageSize;

    /**
     * @example 65536
     *
     * @var int
     */
    public $messageRetentionPeriod;

    /**
     * @example 0
     *
     * @var int
     */
    public $pollingWaitSeconds;

    /**
     * @example demo-queue
     *
     * @var string
     */
    public $queueName;

    /**
     * @example 60
     *
     * @var int
     */
    public $visibilityTimeout;
    protected $_name = [
        'activeMessages'         => 'ActiveMessages',
        'createTime'             => 'CreateTime',
        'delayMessages'          => 'DelayMessages',
        'delaySeconds'           => 'DelaySeconds',
        'inactiveMessages'       => 'InactiveMessages',
        'lastModifyTime'         => 'LastModifyTime',
        'loggingEnabled'         => 'LoggingEnabled',
        'maximumMessageSize'     => 'MaximumMessageSize',
        'messageRetentionPeriod' => 'MessageRetentionPeriod',
        'pollingWaitSeconds'     => 'PollingWaitSeconds',
        'queueName'              => 'QueueName',
        'visibilityTimeout'      => 'VisibilityTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeMessages) {
            $res['ActiveMessages'] = $this->activeMessages;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->delayMessages) {
            $res['DelayMessages'] = $this->delayMessages;
        }
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }
        if (null !== $this->inactiveMessages) {
            $res['InactiveMessages'] = $this->inactiveMessages;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->loggingEnabled) {
            $res['LoggingEnabled'] = $this->loggingEnabled;
        }
        if (null !== $this->maximumMessageSize) {
            $res['MaximumMessageSize'] = $this->maximumMessageSize;
        }
        if (null !== $this->messageRetentionPeriod) {
            $res['MessageRetentionPeriod'] = $this->messageRetentionPeriod;
        }
        if (null !== $this->pollingWaitSeconds) {
            $res['PollingWaitSeconds'] = $this->pollingWaitSeconds;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->visibilityTimeout) {
            $res['VisibilityTimeout'] = $this->visibilityTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveMessages'])) {
            $model->activeMessages = $map['ActiveMessages'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DelayMessages'])) {
            $model->delayMessages = $map['DelayMessages'];
        }
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }
        if (isset($map['InactiveMessages'])) {
            $model->inactiveMessages = $map['InactiveMessages'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['LoggingEnabled'])) {
            $model->loggingEnabled = $map['LoggingEnabled'];
        }
        if (isset($map['MaximumMessageSize'])) {
            $model->maximumMessageSize = $map['MaximumMessageSize'];
        }
        if (isset($map['MessageRetentionPeriod'])) {
            $model->messageRetentionPeriod = $map['MessageRetentionPeriod'];
        }
        if (isset($map['PollingWaitSeconds'])) {
            $model->pollingWaitSeconds = $map['PollingWaitSeconds'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['VisibilityTimeout'])) {
            $model->visibilityTimeout = $map['VisibilityTimeout'];
        }

        return $model;
    }
}
