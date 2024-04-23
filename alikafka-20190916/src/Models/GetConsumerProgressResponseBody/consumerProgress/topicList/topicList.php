<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList;
use AlibabaCloud\Tea\Model;

class topicList extends Model
{
    /**
     * @description The time when the last consumed message in the topic was generated.
     *
     * @example 1566874931649
     *
     * @var int
     */
    public $lastTimestamp;

    /**
     * @description The consumer offsets.
     *
     * @var offsetList
     */
    public $offsetList;

    /**
     * @description The topic name.
     *
     * @example kafka-test
     *
     * @var string
     */
    public $topic;

    /**
     * @description The number of unconsumed messages in the topic to which the consumer group subscribes.
     *
     * @example 0
     *
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'lastTimestamp' => 'LastTimestamp',
        'offsetList'    => 'OffsetList',
        'topic'         => 'Topic',
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
        if (null !== $this->offsetList) {
            $res['OffsetList'] = null !== $this->offsetList ? $this->offsetList->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topicList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['OffsetList'])) {
            $model->offsetList = offsetList::fromMap($map['OffsetList']);
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }

        return $model;
    }
}
