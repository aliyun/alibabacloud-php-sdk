<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetTopicAttributesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetTopicAttributesResponseBody\data\tags;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var bool
     */
    public $loggingEnabled;

    /**
     * @var int
     */
    public $maxMessageSize;

    /**
     * @var int
     */
    public $messageCount;

    /**
     * @var int
     */
    public $messageRetentionPeriod;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $topicType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'lastModifyTime' => 'LastModifyTime',
        'loggingEnabled' => 'LoggingEnabled',
        'maxMessageSize' => 'MaxMessageSize',
        'messageCount' => 'MessageCount',
        'messageRetentionPeriod' => 'MessageRetentionPeriod',
        'tags' => 'Tags',
        'topicName' => 'TopicName',
        'topicType' => 'TopicType',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->topicType) {
            $res['TopicType'] = $this->topicType;
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['TopicType'])) {
            $model->topicType = $map['TopicType'];
        }

        return $model;
    }
}
