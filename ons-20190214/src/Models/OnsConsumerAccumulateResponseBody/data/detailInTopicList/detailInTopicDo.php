<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponseBody\data\detailInTopicList;

use AlibabaCloud\Tea\Model;

class detailInTopicDo extends Model
{
    /**
     * @description The maximum latency of message consumption in the topic.
     *
     * @example 10000
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description The point in time when the latest consumed message in the topic was produced.
     *
     * @example 1566231000000
     *
     * @var int
     */
    public $lastTimestamp;

    /**
     * @description The topic name.
     *
     * @example test-mq-topic
     *
     * @var string
     */
    public $topic;

    /**
     * @description The number of accumulated messages in the topic.
     *
     * @example 100
     *
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'delayTime'     => 'DelayTime',
        'lastTimestamp' => 'LastTimestamp',
        'topic'         => 'Topic',
        'totalDiff'     => 'TotalDiff',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
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
     * @return detailInTopicDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
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
