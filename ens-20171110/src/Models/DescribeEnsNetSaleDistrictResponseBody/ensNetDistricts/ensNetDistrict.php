<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictResponseBody\ensNetDistricts;

use AlibabaCloud\Tea\Model;

class ensNetDistrict extends Model
{
    /**
     * @var string
     */
    public $ensRegionIdCount;

    /**
     * @example {                         "count":2,                         "code":"multiCarrier"                     }
     *
     * @var string
     */
    public $instanceCount;

    /**
     * @example 100101
     *
     * @var string
     */
    public $netDistrictCode;

    /**
     * @example northEast
     *
     * @var string
     */
    public $netDistrictEnName;

    /**
     * @example 100000
     *
     * @var string
     */
    public $netDistrictFatherCode;

    /**
     * @example Big
     *
     * @var string
     */
    public $netDistrictLevel;

    /**
     * @var string
     */
    public $netDistrictName;
    protected $_name = [
        'ensRegionIdCount'      => 'EnsRegionIdCount',
        'instanceCount'         => 'InstanceCount',
        'netDistrictCode'       => 'NetDistrictCode',
        'netDistrictEnName'     => 'NetDistrictEnName',
        'netDistrictFatherCode' => 'NetDistrictFatherCode',
        'netDistrictLevel'      => 'NetDistrictLevel',
        'netDistrictName'       => 'NetDistrictName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionIdCount) {
            $res['EnsRegionIdCount'] = $this->ensRegionIdCount;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->netDistrictCode) {
            $res['NetDistrictCode'] = $this->netDistrictCode;
        }
        if (null !== $this->netDistrictEnName) {
            $res['NetDistrictEnName'] = $this->netDistrictEnName;
        }
        if (null !== $this->netDistrictFatherCode) {
            $res['NetDistrictFatherCode'] = $this->netDistrictFatherCode;
        }
        if (null !== $this->netDistrictLevel) {
            $res['NetDistrictLevel'] = $this->netDistrictLevel;
        }
        if (null !== $this->netDistrictName) {
            $res['NetDistrictName'] = $this->netDistrictName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensNetDistrict
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionIdCount'])) {
            $model->ensRegionIdCount = $map['EnsRegionIdCount'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['NetDistrictCode'])) {
            $model->netDistrictCode = $map['NetDistrictCode'];
        }
        if (isset($map['NetDistrictEnName'])) {
            $model->netDistrictEnName = $map['NetDistrictEnName'];
        }
        if (isset($map['NetDistrictFatherCode'])) {
            $model->netDistrictFatherCode = $map['NetDistrictFatherCode'];
        }
        if (isset($map['NetDistrictLevel'])) {
            $model->netDistrictLevel = $map['NetDistrictLevel'];
        }
        if (isset($map['NetDistrictName'])) {
            $model->netDistrictName = $map['NetDistrictName'];
        }

        return $model;
    }
}
