<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponse\measurementDatas;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponse\measurementDatas\measurementData\bandWidthFeeDatas;
use AlibabaCloud\Tea\Model;

class measurementData extends Model
{
    /**
     * @var string
     */
    public $chargeModel;

    /**
     * @var string
     */
    public $costCycle;

    /**
     * @var string
     */
    public $costStartTime;

    /**
     * @var string
     */
    public $costEndTime;

    /**
     * @var bandWidthFeeDatas
     */
    public $bandWidthFeeDatas;
    protected $_name = [
        'chargeModel'       => 'ChargeModel',
        'costCycle'         => 'CostCycle',
        'costStartTime'     => 'CostStartTime',
        'costEndTime'       => 'CostEndTime',
        'bandWidthFeeDatas' => 'BandWidthFeeDatas',
    ];

    public function validate()
    {
        Model::validateRequired('chargeModel', $this->chargeModel, true);
        Model::validateRequired('costCycle', $this->costCycle, true);
        Model::validateRequired('costStartTime', $this->costStartTime, true);
        Model::validateRequired('costEndTime', $this->costEndTime, true);
        Model::validateRequired('bandWidthFeeDatas', $this->bandWidthFeeDatas, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeModel) {
            $res['ChargeModel'] = $this->chargeModel;
        }
        if (null !== $this->costCycle) {
            $res['CostCycle'] = $this->costCycle;
        }
        if (null !== $this->costStartTime) {
            $res['CostStartTime'] = $this->costStartTime;
        }
        if (null !== $this->costEndTime) {
            $res['CostEndTime'] = $this->costEndTime;
        }
        if (null !== $this->bandWidthFeeDatas) {
            $res['BandWidthFeeDatas'] = null !== $this->bandWidthFeeDatas ? $this->bandWidthFeeDatas->toMap() : null;
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
        if (isset($map['ChargeModel'])) {
            $model->chargeModel = $map['ChargeModel'];
        }
        if (isset($map['CostCycle'])) {
            $model->costCycle = $map['CostCycle'];
        }
        if (isset($map['CostStartTime'])) {
            $model->costStartTime = $map['CostStartTime'];
        }
        if (isset($map['CostEndTime'])) {
            $model->costEndTime = $map['CostEndTime'];
        }
        if (isset($map['BandWidthFeeDatas'])) {
            $model->bandWidthFeeDatas = bandWidthFeeDatas::fromMap($map['BandWidthFeeDatas']);
        }

        return $model;
    }
}
