<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList;
use AlibabaCloud\Tea\Model;

class consumerProgress extends Model
{
    /**
     * @var topicList[]
     */
    public $topicList;

    /**
     * @var int
     */
    public $lastTimestamp;

    /**
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'topicList'     => 'TopicList',
        'lastTimestamp' => 'LastTimestamp',
        'totalDiff'     => 'TotalDiff',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicList) {
            $res['TopicList'] = [];
            if (null !== $this->topicList && \is_array($this->topicList)) {
                $n = 0;
                foreach ($this->topicList as $item) {
                    $res['TopicList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
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
        if (isset($map['TopicList'])) {
            if (!empty($map['TopicList'])) {
                $model->topicList = [];
                $n                = 0;
                foreach ($map['TopicList'] as $item) {
                    $model->topicList[$n++] = null !== $item ? topicList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }

        return $model;
    }
}
