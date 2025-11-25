<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponseBody\data\detailInTopicList;

use AlibabaCloud\Dara\Model;

class detailInTopicDo extends Model
{
    /**
     * @var int
     */
    public $delayTime;

    /**
     * @var int
     */
    public $lastTimestamp;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'delayTime' => 'DelayTime',
        'lastTimestamp' => 'LastTimestamp',
        'topic' => 'Topic',
        'totalDiff' => 'TotalDiff',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
