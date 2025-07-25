<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponseBody\ipv6IspCityNodes;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponseBody\ipv6IspCityNodes\ipv6IspCityNode\ips;
use AlibabaCloud\Tea\Model;

class ipv6IspCityNode extends Model
{
    /**
     * @description City code.
     *
     * @example 357
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description City name.
     *
     * @example Shanghai
     *
     * @var string
     */
    public $cityName;

    /**
     * @description Country code.
     *
     * @example 629
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description Country name.
     *
     * @example China
     *
     * @var string
     */
    public $countryName;

    /**
     * @description Monitor node default selection:
     * - true: Selected by default
     * - false: Not selected by default
     *
     * @example true
     *
     * @var bool
     */
    public $defaultSelected;

    /**
     * @description Monitoring probe group name.
     *
     * @example BGP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Monitoring node group type, currently supported:
     * - BGP: BGP node
     * - OVERSEAS: International node
     * - ISP: Carrier node
     *
     * @example BGP
     *
     * @var string
     */
    public $groupType;

    /**
     * @description List of node IP addresses.
     *
     * @var ips
     */
    public $ips;

    /**
     * @description Operator code.
     *
     * @example 465
     *
     * @var string
     */
    public $ispCode;

    /**
     * @description Operator name.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $ispName;

    /**
     * @description Unique identifier ID of the probe node.
     *
     * @example node-ewze1bysndy4gf**j8
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'cityCode' => 'CityCode',
        'cityName' => 'CityName',
        'countryCode' => 'CountryCode',
        'countryName' => 'CountryName',
        'defaultSelected' => 'DefaultSelected',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'ips' => 'Ips',
        'ispCode' => 'IspCode',
        'ispName' => 'IspName',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
