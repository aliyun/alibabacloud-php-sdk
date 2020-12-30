<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosCarsResponseBody\qosCars;

use AlibabaCloud\Tea\Model;

class qosCar extends Model
{
    /**
     * @var int
     */
    public $maxBandwidthAbs;

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
    public $description;

    /**
     * @var string
     */
    public $qosId;

    /**
     * @var string
     */
    public $limitType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $name;

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
        'percentSourceType'   => 'PercentSourceType',
        'minBandwidthAbs'     => 'MinBandwidthAbs',
        'maxBandwidthPercent' => 'MaxBandwidthPercent',
        'description'         => 'Description',
        'qosId'               => 'QosId',
        'limitType'           => 'LimitType',
        'priority'            => 'Priority',
        'name'                => 'Name',
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
        if (null !== $this->percentSourceType) {
            $res['PercentSourceType'] = $this->percentSourceType;
        }
        if (null !== $this->minBandwidthAbs) {
            $res['MinBandwidthAbs'] = $this->minBandwidthAbs;
        }
        if (null !== $this->maxBandwidthPercent) {
            $res['MaxBandwidthPercent'] = $this->maxBandwidthPercent;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return qosCar
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxBandwidthAbs'])) {
            $model->maxBandwidthAbs = $map['MaxBandwidthAbs'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
