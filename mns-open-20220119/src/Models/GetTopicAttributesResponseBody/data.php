<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetTopicAttributesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1449554277
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1449554460
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
    public $maxMessageSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $messageCount;

    /**
     * @example 86400
     *
     * @var int
     */
    public $messageRetentionPeriod;

    /**
     * @example demo-topic
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'createTime'             => 'CreateTime',
        'lastModifyTime'         => 'LastModifyTime',
        'loggingEnabled'         => 'LoggingEnabled',
        'maxMessageSize'         => 'MaxMessageSize',
        'messageCount'           => 'MessageCount',
        'messageRetentionPeriod' => 'MessageRetentionPeriod',
        'topicName'              => 'TopicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->loggingEnabled) {
            $res['LoggingEnabled'] = $this->loggingEnabled;
        }
        if (null !== $this->maxMessageSize) {
            $res['MaxMessageSize'] = $this->maxMessageSize;
        }
        if (null !== $this->messageCount) {
            $res['MessageCount'] = $this->messageCount;
        }
        if (null !== $this->messageRetentionPeriod) {
            $res['MessageRetentionPeriod'] = $this->messageRetentionPeriod;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['LoggingEnabled'])) {
            $model->loggingEnabled = $map['LoggingEnabled'];
        }
        if (isset($map['MaxMessageSize'])) {
            $model->maxMessageSize = $map['MaxMessageSize'];
        }
        if (isset($map['MessageCount'])) {
            $model->messageCount = $map['MessageCount'];
        }
        if (isset($map['MessageRetentionPeriod'])) {
            $model->messageRetentionPeriod = $map['MessageRetentionPeriod'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
