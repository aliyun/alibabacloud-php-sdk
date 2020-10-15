<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponse\measurementDatas\measurementData\bandWidthFeeDatas;

use AlibabaCloud\Tea\Model;

class bandWidthFeeData extends Model
{
    /**
     * @var int
     */
    public $costVal;

    /**
     * @var string
     */
    public $costCode;

    /**
     * @var string
     */
    public $costName;

    /**
     * @var string
     */
    public $costType;

    /**
     * @var string
     */
    public $ispLine;
    protected $_name = [
        'costVal'  => 'CostVal',
        'costCode' => 'CostCode',
        'costName' => 'CostName',
        'costType' => 'CostType',
        'ispLine'  => 'IspLine',
    ];

    public function validate()
    {
        Model::validateRequired('costVal', $this->costVal, true);
        Model::validateRequired('costCode', $this->costCode, true);
        Model::validateRequired('costName', $this->costName, true);
        Model::validateRequired('costType', $this->costType, true);
        Model::validateRequired('ispLine', $this->ispLine, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costVal) {
            $res['CostVal'] = $this->costVal;
        }
        if (null !== $this->costCode) {
            $res['CostCode'] = $this->costCode;
        }
        if (null !== $this->costName) {
            $res['CostName'] = $this->costName;
        }
        if (null !== $this->costType) {
            $res['CostType'] = $this->costType;
        }
        if (null !== $this->ispLine) {
            $res['IspLine'] = $this->ispLine;
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
        if (isset($map['CostVal'])) {
            $model->costVal = $map['CostVal'];
        }
        if (isset($map['CostCode'])) {
            $model->costCode = $map['CostCode'];
        }
        if (isset($map['CostName'])) {
            $model->costName = $map['CostName'];
        }
        if (isset($map['CostType'])) {
            $model->costType = $map['CostType'];
        }
        if (isset($map['IspLine'])) {
            $model->ispLine = $map['IspLine'];
        }

        return $model;
    }
}
