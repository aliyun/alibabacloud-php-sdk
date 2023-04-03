<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\ipv6IspCityNodes;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\ipv6IspCityNodes\ipv6IspCityNode\ips;
use AlibabaCloud\Tea\Model;

class ipv6IspCityNode extends Model
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
     * @example BGP Nodes
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the group to which the monitored node belongs. Valid values:
     *
     *   BGP: BGP nodes
     *   OVERSEAS: nodes outside the Chinese mainland
     *   ISP: ISP nodes
     *
     * @example BGP
     *
     * @var string
     */
    public $groupType;

    /**
     * @var ips
     */
    public $ips;

    /**
     * @description The code of the ISP to which the monitored node belongs.
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
    protected $_name = [
        'cityCode'        => 'CityCode',
        'cityName'        => 'CityName',
        'defaultSelected' => 'DefaultSelected',
        'groupName'       => 'GroupName',
        'groupType'       => 'GroupType',
        'ips'             => 'Ips',
        'ispCode'         => 'IspCode',
        'ispName'         => 'IspName',
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
        if (null !== $this->ips) {
            $res['Ips'] = null !== $this->ips ? $this->ips->toMap() : null;
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
     * @return ipv6IspCityNode
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
        if (isset($map['Ips'])) {
            $model->ips = ips::fromMap($map['Ips']);
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
