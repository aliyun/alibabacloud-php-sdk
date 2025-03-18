<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData\resourceFeeDataDetails;

use AlibabaCloud\Tea\Model;

class resourceFeeDataDetail extends Model
{
    /**
     * @description The code of the resource.
     *
     * @example vCPU
     *
     * @var string
     */
    public $costCode;

    /**
     * @description The name of the resource.
     *
     * @example vCPU
     *
     * @var string
     */
    public $costName;

    /**
     * @description The consumption of the resource.
     *
     *   Memory unit: GB.
     *   CPU unit: vCPU.
     *   Storage unit: GB.
     *
     * @example 55
     *
     * @var int
     */
    public $costVal;

    /**
     * @description The type of the resource.
     *
     * @example vCPU
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'costCode' => 'CostCode',
        'costName' => 'CostName',
        'costVal' => 'CostVal',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

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
        if (isset($map['CostCode'])) {
            $model->costCode = $map['CostCode'];
        }
        if (isset($map['CostName'])) {
            $model->costName = $map['CostName'];
        }
        if (isset($map['CostVal'])) {
            $model->costVal = $map['CostVal'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
