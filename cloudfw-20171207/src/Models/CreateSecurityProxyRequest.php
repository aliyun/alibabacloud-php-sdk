<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateSecurityProxyRequest\natRouteEntryList;
use AlibabaCloud\Tea\Model;

class CreateSecurityProxyRequest extends Model
{
    /**
     * @example close
     *
     * @var string
     */
    public $firewallSwitch;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example ngw-bp1okz6k7s4n4mnk5f1g3
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @var natRouteEntryList[]
     */
    public $natRouteEntryList;

    /**
     * @example nat-idmp-fir
     *
     * @var string
     */
    public $proxyName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example 0
     *
     * @var int
     */
    public $strictMode;

    /**
     * @example vpc-uf6b5lyul0xfgv74i01ph
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example true
     *
     * @var string
     */
    public $vswitchAuto;

    /**
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $vswitchCidr;

    /**
     * @example vsw-bp1sqg9wms9w9y1uxcs1x
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'firewallSwitch'    => 'FirewallSwitch',
        'lang'              => 'Lang',
        'natGatewayId'      => 'NatGatewayId',
        'natRouteEntryList' => 'NatRouteEntryList',
        'proxyName'         => 'ProxyName',
        'regionNo'          => 'RegionNo',
        'strictMode'        => 'StrictMode',
        'vpcId'             => 'VpcId',
        'vswitchAuto'       => 'VswitchAuto',
        'vswitchCidr'       => 'VswitchCidr',
        'vswitchId'         => 'VswitchId',
    ];

    public function validate()
    {
    }

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
                $n                        = 0;
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
