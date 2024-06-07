<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTrafficControlTaskTrafficRequest;

use AlibabaCloud\Tea\Model;

class traffics extends Model
{
    /**
     * @var string
     */
    public $itemOrExperimentId;

    /**
     * @var string
     */
    public $recordTime;

    /**
     * @var float
     */
    public $trafficControlTargetAimTraffic;

    /**
     * @var string
     */
    public $trafficControlTargetId;

    /**
     * @var int
     */
    public $trafficControlTargetTraffic;

    /**
     * @var int
     */
    public $trafficControlTaskTraffic;
    protected $_name = [
        'itemOrExperimentId'             => 'ItemOrExperimentId',
        'recordTime'                     => 'RecordTime',
        'trafficControlTargetAimTraffic' => 'TrafficControlTargetAimTraffic',
        'trafficControlTargetId'         => 'TrafficControlTargetId',
        'trafficControlTargetTraffic'    => 'TrafficControlTargetTraffic',
        'trafficControlTaskTraffic'      => 'TrafficControlTaskTraffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemOrExperimentId) {
            $res['ItemOrExperimentId'] = $this->itemOrExperimentId;
        }
        if (null !== $this->recordTime) {
            $res['RecordTime'] = $this->recordTime;
        }
        if (null !== $this->trafficControlTargetAimTraffic) {
            $res['TrafficControlTargetAimTraffic'] = $this->trafficControlTargetAimTraffic;
        }
        if (null !== $this->trafficControlTargetId) {
            $res['TrafficControlTargetId'] = $this->trafficControlTargetId;
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
     * @return traffics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemOrExperimentId'])) {
            $model->itemOrExperimentId = $map['ItemOrExperimentId'];
        }
        if (isset($map['RecordTime'])) {
            $model->recordTime = $map['RecordTime'];
        }
        if (isset($map['TrafficControlTargetAimTraffic'])) {
            $model->trafficControlTargetAimTraffic = $map['TrafficControlTargetAimTraffic'];
        }
        if (isset($map['TrafficControlTargetId'])) {
            $model->trafficControlTargetId = $map['TrafficControlTargetId'];
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
