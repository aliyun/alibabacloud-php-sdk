<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponseBody\data\detailInTopicList;

use AlibabaCloud\Tea\Model;

class detailInTopicDo extends Model
{
    /**
     * @var int
     */
    public $delayTime;

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
    protected $_name = [
        'delayTime'     => 'DelayTime',
        'totalDiff'     => 'TotalDiff',
        'lastTimestamp' => 'LastTimestamp',
        'topic'         => 'Topic',
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
        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
