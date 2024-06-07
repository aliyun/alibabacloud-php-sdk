<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTargetTrafficHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class trafficControlTaskTrafficHistories extends Model
{
    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $recordTime;

    /**
     * @var string
     */
    public $trafficControlTargetAimTraffic;

    /**
     * @var string
     */
    public $trafficControlTargetTraffic;

    /**
     * @var string
     */
    public $trafficControlTaskTraffic;
    protected $_name = [
        'experimentId'                   => 'ExperimentId',
        'itemId'                         => 'ItemId',
        'recordTime'                     => 'RecordTime',
        'trafficControlTargetAimTraffic' => 'TrafficControlTargetAimTraffic',
        'trafficControlTargetTraffic'    => 'TrafficControlTargetTraffic',
        'trafficControlTaskTraffic'      => 'TrafficControlTaskTraffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->recordTime) {
            $res['RecordTime'] = $this->recordTime;
        }
        if (null !== $this->trafficControlTargetAimTraffic) {
            $res['TrafficControlTargetAimTraffic'] = $this->trafficControlTargetAimTraffic;
        }
        if (null !== $this->trafficControlTargetTraffic) {
            $res['TrafficControlTargetTraffic'] = $this->trafficControlTargetTraffic;
        }
        if (null !== $this->trafficControlTaskTraffic) {
            $res['TrafficControlTaskTraffic'] = $this->trafficControlTaskTraffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficControlTaskTrafficHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['RecordTime'])) {
            $model->recordTime = $map['RecordTime'];
        }
        if (isset($map['TrafficControlTargetAimTraffic'])) {
            $model->trafficControlTargetAimTraffic = $map['TrafficControlTargetAimTraffic'];
        }
        if (isset($map['TrafficControlTargetTraffic'])) {
            $model->trafficControlTargetTraffic = $map['TrafficControlTargetTraffic'];
        }
        if (isset($map['TrafficControlTaskTraffic'])) {
            $model->trafficControlTaskTraffic = $map['TrafficControlTaskTraffic'];
        }

        return $model;
    }
}
