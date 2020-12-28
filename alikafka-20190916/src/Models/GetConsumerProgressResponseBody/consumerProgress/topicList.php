<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\offsetList;
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
     * @var offsetList[]
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
            $res['OffsetList'] = [];
            if (null !== $this->offsetList && \is_array($this->offsetList)) {
                $n = 0;
                foreach ($this->offsetList as $item) {
                    $res['OffsetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['OffsetList'])) {
                $model->offsetList = [];
                $n                 = 0;
                foreach ($map['OffsetList'] as $item) {
                    $model->offsetList[$n++] = null !== $item ? offsetList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
