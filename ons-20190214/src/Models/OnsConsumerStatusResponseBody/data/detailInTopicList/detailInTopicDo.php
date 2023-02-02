<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\detailInTopicList;

use AlibabaCloud\Tea\Model;

class detailInTopicDo extends Model
{
    /**
     * @description The latency of message consumption in the topic. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description The most recent point in time when a message was consumed.
     *
     * The value of this parameter is a UNIX timestamp in milliseconds.
     * @example 1570701259403
     *
     * @var int
     */
    public $lastTimestamp;

    /**
     * @description The name of the topic.
     *
     * @example test-mq_topic
     *
     * @var string
     */
    public $topic;

    /**
     * @description The number of accumulated messages in the topic.
     *
     * @example 0
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
