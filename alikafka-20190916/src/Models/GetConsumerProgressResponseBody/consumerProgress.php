<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\rebalanceInfoList;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList;
use AlibabaCloud\Tea\Model;

class consumerProgress extends Model
{
    /**
     * @description The time when the last message consumed by the consumer group was generated.
     *
     * @example 1566874931671
     *
     * @var int
     */
    public $lastTimestamp;

    /**
     * @description The details of rebalances in the consumer group.
     *
     * @var rebalanceInfoList
     */
    public $rebalanceInfoList;

    /**
     * @description The consumer progress of each topic to which the consumer group subscribes.
     *
     * @var topicList
     */
    public $topicList;

    /**
     * @description The total number of unconsumed messages in all topics to which the consumer group subscribes.
     *
     * @example 0
     *
     * @var int
     */
    public $totalDiff;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'lastTimestamp' => 'LastTimestamp',
        'rebalanceInfoList' => 'RebalanceInfoList',
        'topicList' => 'TopicList',
        'totalDiff' => 'TotalDiff',
        'state' => 'state',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->rebalanceInfoList) {
            $res['RebalanceInfoList'] = null !== $this->rebalanceInfoList ? $this->rebalanceInfoList->toMap() : null;
        }
        if (null !== $this->topicList) {
            $res['TopicList'] = null !== $this->topicList ? $this->topicList->toMap() : null;
        }
        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['RebalanceInfoList'])) {
            $model->rebalanceInfoList = rebalanceInfoList::fromMap($map['RebalanceInfoList']);
        }
        if (isset($map['TopicList'])) {
            $model->topicList = topicList::fromMap($map['TopicList']);
        }
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
