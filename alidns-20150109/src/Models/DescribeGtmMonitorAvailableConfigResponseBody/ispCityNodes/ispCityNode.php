<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigResponseBody\ispCityNodes;

use AlibabaCloud\Tea\Model;

class ispCityNode extends Model
{
    /**
     * @description The code of the city where the monitored node is deployed.
     *
     * @example 503
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description The display name of the city where the monitored node is deployed.
     *
     * @example Zhangjiakou
     *
     * @var string
     */
    public $cityName;

    /**
     * @description Indicates whether the monitored node is selected for the health check by default.
     *
     * @example true
     *
     * @var bool
     */
    public $defaultSelected;

    /**
     * @description The name of the group to which the monitored node belongs.
     *
     * Valid values: Overseas Nodes, BGP Nodes, and ISP Nodes.
     * @example Overseas Nodes
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the group to which the monitored node belongs.
     *
     * Valid values: BGP, OVERSEAS, and ISP.
     * @example OVERSEAS
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The code of the Internet service provider (ISP) to which the monitored node belongs.
     *
     *   If the value of the GroupType parameter is BGP or OVERSEAS, the value of IspCode is 465 by default.
     *   If the value of the GroupType parameter is not BGP or OVERSEAS, valid values of IspCode are 232, 132, and 5. and is used together with CityCode.
     *
     * @example 465
     *
     * @var string
     */
    public $ispCode;

    /**
     * @description The display name of the ISP to which the monitored node belongs.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $ispName;

    /**
     * @description Indicates whether the monitored node is deployed in the Chinese mainland.
     *
     * @example true
     *
     * @var bool
     */
    public $mainland;
    protected $_name = [
        'cityCode'        => 'CityCode',
        'cityName'        => 'CityName',
        'defaultSelected' => 'DefaultSelected',
        'groupName'       => 'GroupName',
        'groupType'       => 'GroupType',
        'ispCode'         => 'IspCode',
        'ispName'         => 'IspName',
        'mainland'        => 'Mainland',
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
        if (null !== $this->defaultSelected) {
            $res['DefaultSelected'] = $this->defaultSelected;
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
        if (null !== $this->mainland) {
            $res['Mainland'] = $this->mainland;
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
        if (isset($map['DefaultSelected'])) {
            $model->defaultSelected = $map['DefaultSelected'];
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
        if (isset($map['Mainland'])) {
            $model->mainland = $map['Mainland'];
        }

        return $model;
    }
}
