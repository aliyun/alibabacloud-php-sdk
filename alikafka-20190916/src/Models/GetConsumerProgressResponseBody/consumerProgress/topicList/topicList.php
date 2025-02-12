<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList;

class topicList extends Model
{
    /**
     * @var int
     */
    public $lastTimestamp;
    /**
     * @var offsetList
     */
    public $offsetList;
    /**
     * @var string
     */
    public $topic;
    /**
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'lastTimestamp' => 'LastTimestamp',
        'offsetList'    => 'OffsetList',
        'topic'         => 'Topic',
        'totalDiff'     => 'TotalDiff',
    ];

    public function validate()
    {
        if (null !== $this->offsetList) {
            $this->offsetList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }

        if (null !== $this->offsetList) {
            $res['OffsetList'] = null !== $this->offsetList ? $this->offsetList->toArray($noStream) : $this->offsetList;
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
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }

        if (isset($map['OffsetList'])) {
            $model->offsetList = offsetList::fromMap($map['OffsetList']);
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
