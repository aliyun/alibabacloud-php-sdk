<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponseBody\measurementDatas;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponseBody\measurementDatas\measurementData\bandWidthFeeDatas;

class measurementData extends Model
{
    /**
     * @var bandWidthFeeDatas
     */
    public $bandWidthFeeDatas;

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
    public $costEndTime;

    /**
     * @var string
     */
    public $costStartTime;
    protected $_name = [
        'bandWidthFeeDatas' => 'BandWidthFeeDatas',
        'chargeModel' => 'ChargeModel',
        'costCycle' => 'CostCycle',
        'costEndTime' => 'CostEndTime',
        'costStartTime' => 'CostStartTime',
    ];

    public function validate()
    {
        if (null !== $this->bandWidthFeeDatas) {
            $this->bandWidthFeeDatas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandWidthFeeDatas) {
            $res['BandWidthFeeDatas'] = null !== $this->bandWidthFeeDatas ? $this->bandWidthFeeDatas->toArray($noStream) : $this->bandWidthFeeDatas;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
