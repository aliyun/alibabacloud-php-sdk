<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateSecurityProxyRequest\natRouteEntryList;

class CreateSecurityProxyRequest extends Model
{
    /**
     * @var string
     */
    public $firewallSwitch;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var natRouteEntryList[]
     */
    public $natRouteEntryList;

    /**
     * @var string
     */
    public $proxyName;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var int
     */
    public $strictMode;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchAuto;

    /**
     * @var string
     */
    public $vswitchCidr;

    /**
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

    public function validate()
    {
        if (\is_array($this->natRouteEntryList)) {
            Model::validateArray($this->natRouteEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->natRouteEntryList)) {
                $res['NatRouteEntryList'] = [];
                $n1 = 0;
                foreach ($this->natRouteEntryList as $item1) {
                    $res['NatRouteEntryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['NatRouteEntryList'] as $item1) {
                    $model->natRouteEntryList[$n1] = natRouteEntryList::fromMap($item1);
                    ++$n1;
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
