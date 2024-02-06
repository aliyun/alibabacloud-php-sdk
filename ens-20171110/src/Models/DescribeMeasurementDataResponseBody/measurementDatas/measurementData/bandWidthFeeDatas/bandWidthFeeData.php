<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData\bandWidthFeeDatas;

use AlibabaCloud\Tea\Model;

class bandWidthFeeData extends Model
{
    /**
     * @description The code of the bandwidth plan.
     *
     * @example cn-cmcc-1
     *
     * @var string
     */
    public $costCode;

    /**
     * @description The name of the bandwidth plan.
     *
     * @var string
     */
    public $costName;

    /**
     * @description The bandwidth consumption. Unit: bit/second.
     *
     * @example 16486
     *
     * @var int
     */
    public $costVal;
    protected $_name = [
        'costCode' => 'CostCode',
        'costName' => 'CostName',
        'costVal'  => 'CostVal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCode) {
            $res['CostCode'] = $this->costCode;
        }
        if (null !== $this->costName) {
            $res['CostName'] = $this->costName;
        }
        if (null !== $this->costVal) {
            $res['CostVal'] = $this->costVal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandWidthFeeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCode'])) {
            $model->costCode = $map['CostCode'];
        }
        if (isset($map['CostName'])) {
            $model->costName = $map['CostName'];
        }
        if (isset($map['CostVal'])) {
            $model->costVal = $map['CostVal'];
        }

        return $model;
    }
}
