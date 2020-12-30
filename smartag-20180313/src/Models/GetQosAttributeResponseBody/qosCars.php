<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\GetQosAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class qosCars extends Model
{
    /**
     * @var int
     */
    public $maxBandwidthAbs;

    /**
     * @var string
     */
    public $qosCarName;

    /**
     * @var string
     */
    public $percentSourceType;

    /**
     * @var int
     */
    public $minBandwidthAbs;

    /**
     * @var int
     */
    public $maxBandwidthPercent;

    /**
     * @var string
     */
    public $qosCarDescription;

    /**
     * @var string
     */
    public $limitType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $minBandwidthPercent;

    /**
     * @var string
     */
    public $qosCarId;
    protected $_name = [
        'maxBandwidthAbs'     => 'MaxBandwidthAbs',
        'qosCarName'          => 'QosCarName',
        'percentSourceType'   => 'PercentSourceType',
        'minBandwidthAbs'     => 'MinBandwidthAbs',
        'maxBandwidthPercent' => 'MaxBandwidthPercent',
        'qosCarDescription'   => 'QosCarDescription',
        'limitType'           => 'LimitType',
        'priority'            => 'Priority',
        'minBandwidthPercent' => 'MinBandwidthPercent',
        'qosCarId'            => 'QosCarId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxBandwidthAbs) {
            $res['MaxBandwidthAbs'] = $this->maxBandwidthAbs;
        }
        if (null !== $this->qosCarName) {
            $res['QosCarName'] = $this->qosCarName;
        }
        if (null !== $this->percentSourceType) {
            $res['PercentSourceType'] = $this->percentSourceType;
        }
        if (null !== $this->minBandwidthAbs) {
            $res['MinBandwidthAbs'] = $this->minBandwidthAbs;
        }
        if (null !== $this->maxBandwidthPercent) {
            $res['MaxBandwidthPercent'] = $this->maxBandwidthPercent;
        }
        if (null !== $this->qosCarDescription) {
            $res['QosCarDescription'] = $this->qosCarDescription;
        }
        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->minBandwidthPercent) {
            $res['MinBandwidthPercent'] = $this->minBandwidthPercent;
        }
        if (null !== $this->qosCarId) {
            $res['QosCarId'] = $this->qosCarId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosCars
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxBandwidthAbs'])) {
            $model->maxBandwidthAbs = $map['MaxBandwidthAbs'];
        }
        if (isset($map['QosCarName'])) {
            $model->qosCarName = $map['QosCarName'];
        }
        if (isset($map['PercentSourceType'])) {
            $model->percentSourceType = $map['PercentSourceType'];
        }
        if (isset($map['MinBandwidthAbs'])) {
            $model->minBandwidthAbs = $map['MinBandwidthAbs'];
        }
        if (isset($map['MaxBandwidthPercent'])) {
            $model->maxBandwidthPercent = $map['MaxBandwidthPercent'];
        }
        if (isset($map['QosCarDescription'])) {
            $model->qosCarDescription = $map['QosCarDescription'];
        }
        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['MinBandwidthPercent'])) {
            $model->minBandwidthPercent = $map['MinBandwidthPercent'];
        }
        if (isset($map['QosCarId'])) {
            $model->qosCarId = $map['QosCarId'];
        }

        return $model;
    }
}
