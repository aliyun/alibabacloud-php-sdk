<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetDistrictResponseBody\ensNetDistricts;

use AlibabaCloud\Tea\Model;

class ensNetDistrict extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $ensRegionIdCount;

    /**
     * @example 100106
     *
     * @var string
     */
    public $netDistrictCode;

    /**
     * @example southWest
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
