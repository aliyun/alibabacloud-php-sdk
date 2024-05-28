<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmMonitorTemplateResponseBody\ispCityNodes;

use AlibabaCloud\Tea\Model;

class ispCityNode extends Model
{
    /**
     * @example 503
     *
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @example 001
     *
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example BGP
     *
     * @var string
     */
    public $groupType;

    /**
     * @example 465
     *
     * @var string
     */
    public $ispCode;

    /**
     * @var string
     */
    public $ispName;
    protected $_name = [
        'cityCode'    => 'CityCode',
        'cityName'    => 'CityName',
        'countryCode' => 'CountryCode',
        'countryName' => 'CountryName',
        'groupName'   => 'GroupName',
        'groupType'   => 'GroupType',
        'ispCode'     => 'IspCode',
        'ispName'     => 'IspName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->ispCode) {
            $res['IspCode'] = $this->ispCode;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispCityNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['IspCode'])) {
            $model->ispCode = $map['IspCode'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        return $model;
    }
}
