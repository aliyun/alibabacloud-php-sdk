<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetDistrictResponse\ensNetDistricts;

use AlibabaCloud\Tea\Model;

class ensNetDistrict extends Model
{
    /**
     * @var string
     */
    public $netDistrictCode;

    /**
     * @var string
     */
    public $netDistrictName;

    /**
     * @var string
     */
    public $netDistrictFatherCode;

    /**
     * @var string
     */
    public $ensRegionIdCount;

    /**
     * @var string
     */
    public $netDistrictLevel;

    /**
     * @var string
     */
    public $netDistrictEnName;
    protected $_name = [
        'netDistrictCode'       => 'NetDistrictCode',
        'netDistrictName'       => 'NetDistrictName',
        'netDistrictFatherCode' => 'NetDistrictFatherCode',
        'ensRegionIdCount'      => 'EnsRegionIdCount',
        'netDistrictLevel'      => 'NetDistrictLevel',
        'netDistrictEnName'     => 'NetDistrictEnName',
    ];

    public function validate()
    {
        Model::validateRequired('netDistrictCode', $this->netDistrictCode, true);
        Model::validateRequired('netDistrictName', $this->netDistrictName, true);
        Model::validateRequired('netDistrictFatherCode', $this->netDistrictFatherCode, true);
        Model::validateRequired('ensRegionIdCount', $this->ensRegionIdCount, true);
        Model::validateRequired('netDistrictLevel', $this->netDistrictLevel, true);
        Model::validateRequired('netDistrictEnName', $this->netDistrictEnName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netDistrictCode) {
            $res['NetDistrictCode'] = $this->netDistrictCode;
        }
        if (null !== $this->netDistrictName) {
            $res['NetDistrictName'] = $this->netDistrictName;
        }
        if (null !== $this->netDistrictFatherCode) {
            $res['NetDistrictFatherCode'] = $this->netDistrictFatherCode;
        }
        if (null !== $this->ensRegionIdCount) {
            $res['EnsRegionIdCount'] = $this->ensRegionIdCount;
        }
        if (null !== $this->netDistrictLevel) {
            $res['NetDistrictLevel'] = $this->netDistrictLevel;
        }
        if (null !== $this->netDistrictEnName) {
            $res['NetDistrictEnName'] = $this->netDistrictEnName;
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
        if (isset($map['NetDistrictCode'])) {
            $model->netDistrictCode = $map['NetDistrictCode'];
        }
        if (isset($map['NetDistrictName'])) {
            $model->netDistrictName = $map['NetDistrictName'];
        }
        if (isset($map['NetDistrictFatherCode'])) {
            $model->netDistrictFatherCode = $map['NetDistrictFatherCode'];
        }
        if (isset($map['EnsRegionIdCount'])) {
            $model->ensRegionIdCount = $map['EnsRegionIdCount'];
        }
        if (isset($map['NetDistrictLevel'])) {
            $model->netDistrictLevel = $map['NetDistrictLevel'];
        }
        if (isset($map['NetDistrictEnName'])) {
            $model->netDistrictEnName = $map['NetDistrictEnName'];
        }

        return $model;
    }
}
