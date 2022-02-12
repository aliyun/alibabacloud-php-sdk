<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class ApeProvinceStationRefRequest extends Model
{
    /**
     * @description adcode
     *
     * @var int
     */
    public $adcode;

    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description city
     *
     * @var string
     */
    public $city;

    /**
     * @description cnty
     *
     * @var string
     */
    public $cnty;

    /**
     * @description country
     *
     * @var string
     */
    public $country;

    /**
     * @description offset
     *
     * @var int
     */
    public $offset;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description provinceCode
     *
     * @var int
     */
    public $provinceCode;

    /**
     * @description provinceName
     *
     * @var string
     */
    public $provinceName;

    /**
     * @description stationName
     *
     * @var string
     */
    public $stationName;
    protected $_name = [
        'adcode'       => 'Adcode',
        'appName'      => 'AppName',
        'city'         => 'City',
        'cnty'         => 'Cnty',
        'country'      => 'Country',
        'offset'       => 'Offset',
        'pageSize'     => 'PageSize',
        'provinceCode' => 'ProvinceCode',
        'provinceName' => 'ProvinceName',
        'stationName'  => 'StationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adcode) {
            $res['Adcode'] = $this->adcode;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->cnty) {
            $res['Cnty'] = $this->cnty;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->provinceCode) {
            $res['ProvinceCode'] = $this->provinceCode;
        }
        if (null !== $this->provinceName) {
            $res['ProvinceName'] = $this->provinceName;
        }
        if (null !== $this->stationName) {
            $res['StationName'] = $this->stationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApeProvinceStationRefRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Adcode'])) {
            $model->adcode = $map['Adcode'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Cnty'])) {
            $model->cnty = $map['Cnty'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProvinceCode'])) {
            $model->provinceCode = $map['ProvinceCode'];
        }
        if (isset($map['ProvinceName'])) {
            $model->provinceName = $map['ProvinceName'];
        }
        if (isset($map['StationName'])) {
            $model->stationName = $map['StationName'];
        }

        return $model;
    }
}
