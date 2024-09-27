<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv4IspCityNodes;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv4IspCityNodes\domainIpv4IspCityNode\ips;
use AlibabaCloud\Tea\Model;

class domainIpv4IspCityNode extends Model
{
    /**
     * @description The city code.
     *
     * @example 503
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description The display name of the city.
     *
     * @example Zhangjiakou
     *
     * @var string
     */
    public $cityName;

    /**
     * @description Indicates whether the health check node is selected by default.
     *
     * @example true
     *
     * @var bool
     */
    public $defaultSelected;

    /**
     * @description The name of the node group.
     *
     * @example BGP Nodes
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the node group. Valid values:
     *
     *   BGP: BGP node
     *   OVERSEAS: node outside the Chinese mainland
     *   ISP: ISP node
     *
     * @example BGP
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The IP addresses of the health check nodes.
     *
     * @var ips
     */
    public $ips;

    /**
     * @description The ISP code.
     *
     * @example 465
     *
     * @var string
     */
    public $ispCode;

    /**
     * @description The display name of the ISP.
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
     * @return domainIpv4IspCityNode
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
