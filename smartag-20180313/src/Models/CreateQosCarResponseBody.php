<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateQosCarResponseBody extends Model
{
    /**
     * @var int
     */
    public $minBandwidthAbs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $qosCarId;

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
    public $priority;

    /**
     * @var string
     */
    public $qosId;

    /**
     * @var string
     */
    public $percentSourceType;

    /**
     * @var int
     */
    public $minBandwidthPercent;

    /**
     * @var string
     */
    public $limitType;
    protected $_name = [
        'minBandwidthAbs'     => 'MinBandwidthAbs',
        'description'         => 'Description',
        'requestId'           => 'RequestId',
        'qosCarId'            => 'QosCarId',
        'maxBandwidthAbs'     => 'MaxBandwidthAbs',
        'maxBandwidthPercent' => 'MaxBandwidthPercent',
        'priority'            => 'Priority',
        'qosId'               => 'QosId',
        'percentSourceType'   => 'PercentSourceType',
        'minBandwidthPercent' => 'MinBandwidthPercent',
        'limitType'           => 'LimitType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minBandwidthAbs) {
            $res['MinBandwidthAbs'] = $this->minBandwidthAbs;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->qosCarId) {
            $res['QosCarId'] = $this->qosCarId;
        }
        if (null !== $this->maxBandwidthAbs) {
            $res['MaxBandwidthAbs'] = $this->maxBandwidthAbs;
        }
        if (null !== $this->maxBandwidthPercent) {
            $res['MaxBandwidthPercent'] = $this->maxBandwidthPercent;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->percentSourceType) {
            $res['PercentSourceType'] = $this->percentSourceType;
        }
        if (null !== $this->minBandwidthPercent) {
            $res['MinBandwidthPercent'] = $this->minBandwidthPercent;
        }
        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQosCarResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MinBandwidthAbs'])) {
            $model->minBandwidthAbs = $map['MinBandwidthAbs'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QosCarId'])) {
            $model->qosCarId = $map['QosCarId'];
        }
        if (isset($map['MaxBandwidthAbs'])) {
            $model->maxBandwidthAbs = $map['MaxBandwidthAbs'];
        }
        if (isset($map['MaxBandwidthPercent'])) {
            $model->maxBandwidthPercent = $map['MaxBandwidthPercent'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['PercentSourceType'])) {
            $model->percentSourceType = $map['PercentSourceType'];
        }
        if (isset($map['MinBandwidthPercent'])) {
            $model->minBandwidthPercent = $map['MinBandwidthPercent'];
        }
        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }

        return $model;
    }
}
