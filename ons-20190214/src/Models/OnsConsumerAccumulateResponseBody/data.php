<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponseBody\data\detailInTopicList;
use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $lastTimestamp;

    /**
     * @var int
     */
    public $totalDiff;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var detailInTopicList
     */
    public $detailInTopicList;
    protected $_name = [
        'consumeTps'        => 'ConsumeTps',
        'delayTime'         => 'DelayTime',
        'lastTimestamp'     => 'LastTimestamp',
        'totalDiff'         => 'TotalDiff',
        'online'            => 'Online',
        'detailInTopicList' => 'DetailInTopicList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeTps) {
            $res['ConsumeTps'] = $this->consumeTps;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->detailInTopicList) {
            $res['DetailInTopicList'] = null !== $this->detailInTopicList ? $this->detailInTopicList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumeTps'])) {
            $model->consumeTps = $map['ConsumeTps'];
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['DetailInTopicList'])) {
            $model->detailInTopicList = detailInTopicList::fromMap($map['DetailInTopicList']);
        }

        return $model;
    }
}
