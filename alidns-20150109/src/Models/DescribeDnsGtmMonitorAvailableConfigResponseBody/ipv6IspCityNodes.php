<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody;

use AlibabaCloud\Tea\Model;

class ipv6IspCityNodes extends Model
{
    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $ispCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var bool
     */
    public $defaultSelected;
    protected $_name = [
        'cityCode'        => 'CityCode',
        'groupName'       => 'GroupName',
        'ispCode'         => 'IspCode',
        'cityName'        => 'CityName',
        'ispName'         => 'IspName',
        'groupType'       => 'GroupType',
        'defaultSelected' => 'DefaultSelected',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ispCode) {
            $res['IspCode'] = $this->ispCode;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->defaultSelected) {
            $res['DefaultSelected'] = $this->defaultSelected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6IspCityNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IspCode'])) {
            $model->ispCode = $map['IspCode'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['DefaultSelected'])) {
            $model->defaultSelected = $map['DefaultSelected'];
        }

        return $model;
    }
}
