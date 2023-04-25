<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList;
use AlibabaCloud\Tea\Model;

class consumerProgress extends Model
{
    /**
     * @description The number of messages that were not consumed in all topics. This is also known as the number of accumulated messages in all topics.
     *
     * @example 1566874931671
     *
     * @var int
     */
    public $lastTimestamp;

    /**
     * @description The number of messages that were not consumed in the topic. This is also known as the number of accumulated messages in the topic.
     *
     * @var topicList
     */
    public $topicList;

    /**
     * @description The consumption progress of each topic to which the consumer group is subscribed.
     *
     * @example 0
     *
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'lastTimestamp' => 'LastTimestamp',
        'topicList'     => 'TopicList',
        'totalDiff'     => 'TotalDiff',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->topicList) {
            $res['TopicList'] = null !== $this->topicList ? $this->topicList->toMap() : null;
        }
        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumerProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['TopicList'])) {
            $model->topicList = topicList::fromMap($map['TopicList']);
        }
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }

        return $model;
    }
}
