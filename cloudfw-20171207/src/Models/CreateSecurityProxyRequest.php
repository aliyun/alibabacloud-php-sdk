<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateSecurityProxyRequest\natRouteEntryList;
use AlibabaCloud\Tea\Model;

class CreateSecurityProxyRequest extends Model
{
    /**
     * @description The status of the NAT firewall. Valid values:
     *
     *   **open**: enabled
     *   **close**: disabled
     *
     * @example close
     *
     * @var string
     */
    public $firewallSwitch;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the NAT gateway.
     *
     * This parameter is required.
     *
     * @example ngw-bp1okz6k7s4n4mnk5f1g3
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The routes to be switched to the NAT gateway.
     *
     * This parameter is required.
     *
     * @var natRouteEntryList[]
     */
    public $natRouteEntryList;

    /**
     * @description The name of the NAT firewall. The name must be 4 to 50 characters in length, and can contain letters, digits, and underscores (_). However, it cannot start with an underscore.
     *
     * This parameter is required.
     *
     * @example nat-idmp-fir
     *
     * @var string
     */
    public $proxyName;

    /**
     * @description The region ID of the virtual private cloud (VPC).
     *
     * >  For more information about Cloud Firewall supported regions, see [Supported regions](https://help.aliyun.com/document_detail/195657.html).
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description Specifies whether to enable the strict mode. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * @example 0
     *
     * @var int
     */
    public $strictMode;

    /**
     * @description The ID of the VPC.
     *
     * This parameter is required.
     *
     * @example vpc-uf6b5lyul0xfgv74i01ph
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The mode of the vSwitch that you want to use. Valid values:
     *
     *   **true**: automatic
     *   **false**: manual
     *
     * @example true
     *
     * @var string
     */
    public $vswitchAuto;

    /**
     * @description The CIDR block of the vSwitch.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $vswitchCidr;

    /**
     * @description The ID of the vSwitch. This parameter is required if you set the VswitchAuto parameter to true.
     *
     * @example vsw-bp1sqg9wms9w9y1uxcs1x
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'firewallSwitch' => 'FirewallSwitch',
        'lang' => 'Lang',
        'natGatewayId' => 'NatGatewayId',
        'natRouteEntryList' => 'NatRouteEntryList',
        'proxyName' => 'ProxyName',
        'regionNo' => 'RegionNo',
        'strictMode' => 'StrictMode',
        'vpcId' => 'VpcId',
        'vswitchAuto' => 'VswitchAuto',
        'vswitchCidr' => 'VswitchCidr',
        'vswitchId' => 'VswitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->firewallSwitch) {
            $res['FirewallSwitch'] = $this->firewallSwitch;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->natRouteEntryList) {
            $res['NatRouteEntryList'] = [];
            if (null !== $this->natRouteEntryList && \is_array($this->natRouteEntryList)) {
                $n = 0;
                foreach ($this->natRouteEntryList as $item) {
                    $res['NatRouteEntryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->proxyName) {
            $res['ProxyName'] = $this->proxyName;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->strictMode) {
            $res['StrictMode'] = $this->strictMode;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchAuto) {
            $res['VswitchAuto'] = $this->vswitchAuto;
        }
        if (null !== $this->vswitchCidr) {
            $res['VswitchCidr'] = $this->vswitchCidr;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecurityProxyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallSwitch'])) {
            $model->firewallSwitch = $map['FirewallSwitch'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NatRouteEntryList'])) {
            if (!empty($map['NatRouteEntryList'])) {
                $model->natRouteEntryList = [];
                $n = 0;
                foreach ($map['NatRouteEntryList'] as $item) {
                    $model->natRouteEntryList[$n++] = null !== $item ? natRouteEntryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProxyName'])) {
            $model->proxyName = $map['ProxyName'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['StrictMode'])) {
            $model->strictMode = $map['StrictMode'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchAuto'])) {
            $model->vswitchAuto = $map['VswitchAuto'];
        }
        if (isset($map['VswitchCidr'])) {
            $model->vswitchCidr = $map['VswitchCidr'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
