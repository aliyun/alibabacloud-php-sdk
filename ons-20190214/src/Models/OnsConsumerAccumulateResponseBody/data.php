<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponseBody\data\detailInTopicList;

class data extends Model
{
    /**
     * @var float
     */
    public $consumeTps;

    /**
     * @var int
     */
    public $delayTime;

    /**
     * @var detailInTopicList
     */
    public $detailInTopicList;

    /**
     * @var int
     */
    public $lastTimestamp;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'consumeTps' => 'ConsumeTps',
        'delayTime' => 'DelayTime',
        'detailInTopicList' => 'DetailInTopicList',
        'lastTimestamp' => 'LastTimestamp',
        'online' => 'Online',
        'totalDiff' => 'TotalDiff',
    ];

    public function validate()
    {
        if (null !== $this->detailInTopicList) {
            $this->detailInTopicList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeTps) {
            $res['ConsumeTps'] = $this->consumeTps;
        }

        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }

        if (null !== $this->detailInTopicList) {
            $res['DetailInTopicList'] = null !== $this->detailInTopicList ? $this->detailInTopicList->toArray($noStream) : $this->detailInTopicList;
        }

        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
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
        if (isset($map['ConsumeTps'])) {
            $model->consumeTps = $map['ConsumeTps'];
        }

        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }

        if (isset($map['DetailInTopicList'])) {
            $model->detailInTopicList = detailInTopicList::fromMap($map['DetailInTopicList']);
        }

        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }

        return $model;
    }
}
