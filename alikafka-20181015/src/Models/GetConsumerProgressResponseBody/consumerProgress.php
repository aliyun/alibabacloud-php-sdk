<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody;

use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody\consumerProgress\topicList;
use AlibabaCloud\Tea\Model;

class consumerProgress extends Model
{
    /**
     * @var int
     */
    public $lastTimestamp;

    /**
     * @var int
     */
    public $totalDiff;

    /**
     * @var topicList
     */
    public $topicList;
    protected $_name = [
        'lastTimestamp' => 'LastTimestamp',
        'totalDiff'     => 'TotalDiff',
        'topicList'     => 'TopicList',
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
        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }
        if (null !== $this->topicList) {
            $res['TopicList'] = null !== $this->topicList ? $this->topicList->toMap() : null;
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
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }
        if (isset($map['TopicList'])) {
            $model->topicList = topicList::fromMap($map['TopicList']);
        }

        return $model;
    }
}
