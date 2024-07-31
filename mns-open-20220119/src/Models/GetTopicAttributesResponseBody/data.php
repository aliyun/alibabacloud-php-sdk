<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetTopicAttributesResponseBody;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetTopicAttributesResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the topic was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1449554277
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the topic was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1449554460
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description Indicates whether the logging feature is enabled. Valid values:
     *
     *   True
     *   False
     *
     * @example True
     *
     * @var bool
     */
    public $loggingEnabled;

    /**
     * @description The maximum length of the message that is sent to the topic. Unit: bytes.
     *
     * @example 65536
     *
     * @var int
     */
    public $maxMessageSize;

    /**
     * @description The number of messages in the topic.
     *
     * @example 0
     *
     * @var int
     */
    public $messageCount;

    /**
     * @description The maximum duration for which a message is retained in the topic. After the specified retention period ends, the message is deleted regardless of whether the message is received. Unit: seconds.
     *
     * @example 86400
     *
     * @var int
     */
    public $messageRetentionPeriod;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description The name of the topic.
     *
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
        'tags'                   => 'Tags',
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
