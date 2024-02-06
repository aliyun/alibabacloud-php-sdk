<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponseBody\measurementDatas;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponseBody\measurementDatas\measurementData\bandWidthFeeDatas;
use AlibabaCloud\Tea\Model;

class measurementData extends Model
{
    /**
     * @description The bandwidth data returned.
     *
     * @var bandWidthFeeDatas
     */
    public $bandWidthFeeDatas;

    /**
     * @description The metering method. Valid values:
     *
     *   ChargeByUnified: unified metering.
     *   ChargeByGrade: differential metering.
     *
     * @example ChargeByGrade
     *
     * @var string
     */
    public $chargeModel;

    /**
     * @description The metering cycle.
     *
     * @example 2019-07-30
     *
     * @var string
     */
    public $costCycle;

    /**
     * @description The end time of the metering cycle.
     *
     * @example 2019-07-30T16:00:00Z
     *
     * @var string
     */
    public $costEndTime;

    /**
     * @description The start time of the metering cycle.
     *
     * @example 2019-07-29T16:00:00Z
     *
     * @var string
     */
    public $costStartTime;
    protected $_name = [
        'bandWidthFeeDatas' => 'BandWidthFeeDatas',
        'chargeModel'       => 'ChargeModel',
        'costCycle'         => 'CostCycle',
        'costEndTime'       => 'CostEndTime',
        'costStartTime'     => 'CostStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWidthFeeDatas) {
            $res['BandWidthFeeDatas'] = null !== $this->bandWidthFeeDatas ? $this->bandWidthFeeDatas->toMap() : null;
        }
        if (null !== $this->chargeModel) {
            $res['ChargeModel'] = $this->chargeModel;
        }
        if (null !== $this->costCycle) {
            $res['CostCycle'] = $this->costCycle;
        }
        if (null !== $this->costEndTime) {
            $res['CostEndTime'] = $this->costEndTime;
        }
        if (null !== $this->costStartTime) {
            $res['CostStartTime'] = $this->costStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return measurementData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandWidthFeeDatas'])) {
            $model->bandWidthFeeDatas = bandWidthFeeDatas::fromMap($map['BandWidthFeeDatas']);
        }
        if (isset($map['ChargeModel'])) {
            $model->chargeModel = $map['ChargeModel'];
        }
        if (isset($map['CostCycle'])) {
            $model->costCycle = $map['CostCycle'];
        }
        if (isset($map['CostEndTime'])) {
            $model->costEndTime = $map['CostEndTime'];
        }
        if (isset($map['CostStartTime'])) {
            $model->costStartTime = $map['CostStartTime'];
        }

        return $model;
    }
}
