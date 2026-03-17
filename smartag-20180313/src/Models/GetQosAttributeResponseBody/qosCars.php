<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\GetQosAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class qosCars extends Model
{
    /**
     * @var string
     */
    public $limitType;

    /**
     * @var int
     */
    public $maxBandwidthAbs;

    /**
     * @var int
     */
    public $maxBandwidthPercent;

    /**
     * @var int
     */
    public $minBandwidthAbs;

    /**
     * @var int
     */
    public $minBandwidthPercent;

    /**
     * @var string
     */
    public $percentSourceType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $qosCarDescription;

    /**
     * @var string
     */
    public $qosCarId;

    /**
     * @var string
     */
    public $qosCarName;
    protected $_name = [
        'limitType' => 'LimitType',
        'maxBandwidthAbs' => 'MaxBandwidthAbs',
        'maxBandwidthPercent' => 'MaxBandwidthPercent',
        'minBandwidthAbs' => 'MinBandwidthAbs',
        'minBandwidthPercent' => 'MinBandwidthPercent',
        'percentSourceType' => 'PercentSourceType',
        'priority' => 'Priority',
        'qosCarDescription' => 'QosCarDescription',
        'qosCarId' => 'QosCarId',
        'qosCarName' => 'QosCarName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }

        if (null !== $this->maxBandwidthAbs) {
            $res['MaxBandwidthAbs'] = $this->maxBandwidthAbs;
        }

        if (null !== $this->maxBandwidthPercent) {
            $res['MaxBandwidthPercent'] = $this->maxBandwidthPercent;
        }

        if (null !== $this->minBandwidthAbs) {
            $res['MinBandwidthAbs'] = $this->minBandwidthAbs;
        }

        if (null !== $this->minBandwidthPercent) {
            $res['MinBandwidthPercent'] = $this->minBandwidthPercent;
        }

        if (null !== $this->percentSourceType) {
            $res['PercentSourceType'] = $this->percentSourceType;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->qosCarDescription) {
            $res['QosCarDescription'] = $this->qosCarDescription;
        }

        if (null !== $this->qosCarId) {
            $res['QosCarId'] = $this->qosCarId;
        }

        if (null !== $this->qosCarName) {
            $res['QosCarName'] = $this->qosCarName;
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
        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }

        if (isset($map['MaxBandwidthAbs'])) {
            $model->maxBandwidthAbs = $map['MaxBandwidthAbs'];
        }

        if (isset($map['MaxBandwidthPercent'])) {
            $model->maxBandwidthPercent = $map['MaxBandwidthPercent'];
        }

        if (isset($map['MinBandwidthAbs'])) {
            $model->minBandwidthAbs = $map['MinBandwidthAbs'];
        }

        if (isset($map['MinBandwidthPercent'])) {
            $model->minBandwidthPercent = $map['MinBandwidthPercent'];
        }

        if (isset($map['PercentSourceType'])) {
            $model->percentSourceType = $map['PercentSourceType'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['QosCarDescription'])) {
            $model->qosCarDescription = $map['QosCarDescription'];
        }

        if (isset($map['QosCarId'])) {
            $model->qosCarId = $map['QosCarId'];
        }

        if (isset($map['QosCarName'])) {
            $model->qosCarName = $map['QosCarName'];
        }

        return $model;
    }
}
