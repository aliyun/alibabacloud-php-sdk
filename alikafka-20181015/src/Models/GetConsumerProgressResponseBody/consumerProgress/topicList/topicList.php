<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody\consumerProgress\topicList;

use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList;
use AlibabaCloud\Tea\Model;

class topicList extends Model
{
    /**
     * @var int
     */
    public $totalDiff;

    /**
     * @var int
     */
    public $lastTimestamp;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var offsetList
     */
    public $offsetList;
    protected $_name = [
        'totalDiff'     => 'TotalDiff',
        'lastTimestamp' => 'LastTimestamp',
        'topic'         => 'Topic',
        'offsetList'    => 'OffsetList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->offsetList) {
            $res['OffsetList'] = null !== $this->offsetList ? $this->offsetList->toMap() : null;
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
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['OffsetList'])) {
            $model->offsetList = offsetList::fromMap($map['OffsetList']);
        }

        return $model;
    }
}
