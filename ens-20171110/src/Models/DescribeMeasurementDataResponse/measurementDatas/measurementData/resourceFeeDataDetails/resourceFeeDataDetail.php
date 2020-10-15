<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse\measurementDatas\measurementData\resourceFeeDataDetails;

use AlibabaCloud\Tea\Model;

class resourceFeeDataDetail extends Model
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
    public $resourceType;
    protected $_name = [
        'costVal'      => 'CostVal',
        'costCode'     => 'CostCode',
        'costName'     => 'CostName',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        Model::validateRequired('costVal', $this->costVal, true);
        Model::validateRequired('costCode', $this->costCode, true);
        Model::validateRequired('costName', $this->costName, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceFeeDataDetail
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
