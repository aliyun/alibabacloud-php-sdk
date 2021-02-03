<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponse\ipv6IspCityNodes;

use AlibabaCloud\Tea\Model;

class ipv6IspCityNode extends Model
{
    /**
     * @var string
     */
    public $ispName;

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
    public $cityCode;

    /**
     * @var bool
     */
    public $defaultSelected;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'ispName'         => 'IspName',
        'ispCode'         => 'IspCode',
        'cityName'        => 'CityName',
        'cityCode'        => 'CityCode',
        'defaultSelected' => 'DefaultSelected',
        'groupType'       => 'GroupType',
        'groupName'       => 'GroupName',
    ];

    public function validate()
    {
        Model::validateRequired('ispName', $this->ispName, true);
        Model::validateRequired('ispCode', $this->ispCode, true);
        Model::validateRequired('cityName', $this->cityName, true);
        Model::validateRequired('cityCode', $this->cityCode, true);
        Model::validateRequired('defaultSelected', $this->defaultSelected, true);
        Model::validateRequired('groupType', $this->groupType, true);
        Model::validateRequired('groupName', $this->groupName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->ispCode) {
            $res['IspCode'] = $this->ispCode;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->defaultSelected) {
            $res['DefaultSelected'] = $this->defaultSelected;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6IspCityNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['IspCode'])) {
            $model->ispCode = $map['IspCode'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['DefaultSelected'])) {
            $model->defaultSelected = $map['DefaultSelected'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
