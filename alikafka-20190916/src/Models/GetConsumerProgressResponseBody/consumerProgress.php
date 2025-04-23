<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\rebalanceInfoList;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList;

class consumerProgress extends Model
{
    /**
     * @var int
     */
    public $lastTimestamp;

    /**
     * @var rebalanceInfoList
     */
    public $rebalanceInfoList;

    /**
     * @var topicList
     */
    public $topicList;

    /**
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

    public function validate()
    {
        if (null !== $this->rebalanceInfoList) {
            $this->rebalanceInfoList->validate();
        }
        if (null !== $this->topicList) {
            $this->topicList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }

        if (null !== $this->rebalanceInfoList) {
            $res['RebalanceInfoList'] = null !== $this->rebalanceInfoList ? $this->rebalanceInfoList->toArray($noStream) : $this->rebalanceInfoList;
        }

        if (null !== $this->topicList) {
            $res['TopicList'] = null !== $this->topicList ? $this->topicList->toArray($noStream) : $this->topicList;
        }

        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
