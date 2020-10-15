<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse\measurementDatas;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse\measurementDatas\measurementData\bandWidthFeeDatas;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse\measurementDatas\measurementData\resourceFeeData;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse\measurementDatas\measurementData\resourceFeeDataDetails;
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

    /**
     * @var resourceFeeDataDetails
     */
    public $resourceFeeDataDetails;

    /**
     * @var resourceFeeData
     */
    public $resourceFeeData;
    protected $_name = [
        'chargeModel'            => 'ChargeModel',
        'costCycle'              => 'CostCycle',
        'costStartTime'          => 'CostStartTime',
        'costEndTime'            => 'CostEndTime',
        'bandWidthFeeDatas'      => 'BandWidthFeeDatas',
        'resourceFeeDataDetails' => 'ResourceFeeDataDetails',
        'resourceFeeData'        => 'ResourceFeeData',
    ];

    public function validate()
    {
        Model::validateRequired('chargeModel', $this->chargeModel, true);
        Model::validateRequired('costCycle', $this->costCycle, true);
        Model::validateRequired('costStartTime', $this->costStartTime, true);
        Model::validateRequired('costEndTime', $this->costEndTime, true);
        Model::validateRequired('bandWidthFeeDatas', $this->bandWidthFeeDatas, true);
        Model::validateRequired('resourceFeeDataDetails', $this->resourceFeeDataDetails, true);
        Model::validateRequired('resourceFeeData', $this->resourceFeeData, true);
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
        if (null !== $this->resourceFeeDataDetails) {
            $res['ResourceFeeDataDetails'] = null !== $this->resourceFeeDataDetails ? $this->resourceFeeDataDetails->toMap() : null;
        }
        if (null !== $this->resourceFeeData) {
            $res['ResourceFeeData'] = null !== $this->resourceFeeData ? $this->resourceFeeData->toMap() : null;
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
        if (isset($map['ResourceFeeDataDetails'])) {
            $model->resourceFeeDataDetails = resourceFeeDataDetails::fromMap($map['ResourceFeeDataDetails']);
        }
        if (isset($map['ResourceFeeData'])) {
            $model->resourceFeeData = resourceFeeData::fromMap($map['ResourceFeeData']);
        }

        return $model;
    }
}
