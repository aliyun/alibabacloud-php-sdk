<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponseBody\data\detailInTopicList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The transactions per second (TPS) for message consumption performed by consumers in the group.
     *
     * @example 10
     *
     * @var float
     */
    public $consumeTps;

    /**
     * @description The consumption latency.
     *
     * @example 10000
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description The information about each topic to which the consumer group subscribes. If the **Detail** parameter in the request is set to **false**, the value of this parameter is empty.
     *
     * @var detailInTopicList
     */
    public $detailInTopicList;

    /**
     * @description The point in time when the latest message that was consumed by a consumer in the consumer group was produced.
     *
     * @example 1566231000000
     *
     * @var int
     */
    public $lastTimestamp;

    /**
     * @description Indicates whether the consumer group is online. The group is online if one of the consumers in the group is online. Valid values:
     *
     *   **true**: The consumer group is online.
     *   **false**: The consumer group is offline.
     *
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description The total number of accumulated messages in all topics to which the consumer group subscribes.
     *
     * @example 100
     *
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'consumeTps'        => 'ConsumeTps',
        'delayTime'         => 'DelayTime',
        'detailInTopicList' => 'DetailInTopicList',
        'lastTimestamp'     => 'LastTimestamp',
        'online'            => 'Online',
        'totalDiff'         => 'TotalDiff',
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
        if (null !== $this->detailInTopicList) {
            $res['DetailInTopicList'] = null !== $this->detailInTopicList ? $this->detailInTopicList->toMap() : null;
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
