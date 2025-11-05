<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListResponseBody\natFirewallList\natRouteEntryList;

class natFirewallList extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $errorDetail;

    /**
     * @var int
     */
    public $memberUid;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natGatewayName;

    /**
     * @var natRouteEntryList[]
     */
    public $natRouteEntryList;

    /**
     * @var string
     */
    public $proxyId;

    /**
     * @var string
     */
    public $proxyName;

    /**
     * @var string
     */
    public $proxyNetworkInterfaceId;

    /**
     * @var string
     */
    public $proxyRouteTableId;

    /**
     * @var string
     */
    public $proxyStatus;

    /**
     * @var string
     */
    public $proxyVSwitchId;

    /**
     * @var string
     */
    public $regionId;

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
    public $vpcName;
    protected $_name = [
        'aliUid' => 'AliUid',
        'errorDetail' => 'ErrorDetail',
        'memberUid' => 'MemberUid',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
        'natRouteEntryList' => 'NatRouteEntryList',
        'proxyId' => 'ProxyId',
        'proxyName' => 'ProxyName',
        'proxyNetworkInterfaceId' => 'ProxyNetworkInterfaceId',
        'proxyRouteTableId' => 'ProxyRouteTableId',
        'proxyStatus' => 'ProxyStatus',
        'proxyVSwitchId' => 'ProxyVSwitchId',
        'regionId' => 'RegionId',
        'strictMode' => 'StrictMode',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
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
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = $this->errorDetail;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayName) {
            $res['NatGatewayName'] = $this->natGatewayName;
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

        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }

        if (null !== $this->proxyName) {
            $res['ProxyName'] = $this->proxyName;
        }

        if (null !== $this->proxyNetworkInterfaceId) {
            $res['ProxyNetworkInterfaceId'] = $this->proxyNetworkInterfaceId;
        }

        if (null !== $this->proxyRouteTableId) {
            $res['ProxyRouteTableId'] = $this->proxyRouteTableId;
        }

        if (null !== $this->proxyStatus) {
            $res['ProxyStatus'] = $this->proxyStatus;
        }

        if (null !== $this->proxyVSwitchId) {
            $res['ProxyVSwitchId'] = $this->proxyVSwitchId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->strictMode) {
            $res['StrictMode'] = $this->strictMode;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = $map['ErrorDetail'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayName'])) {
            $model->natGatewayName = $map['NatGatewayName'];
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

        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }

        if (isset($map['ProxyName'])) {
            $model->proxyName = $map['ProxyName'];
        }

        if (isset($map['ProxyNetworkInterfaceId'])) {
            $model->proxyNetworkInterfaceId = $map['ProxyNetworkInterfaceId'];
        }

        if (isset($map['ProxyRouteTableId'])) {
            $model->proxyRouteTableId = $map['ProxyRouteTableId'];
        }

        if (isset($map['ProxyStatus'])) {
            $model->proxyStatus = $map['ProxyStatus'];
        }

        if (isset($map['ProxyVSwitchId'])) {
            $model->proxyVSwitchId = $map['ProxyVSwitchId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StrictMode'])) {
            $model->strictMode = $map['StrictMode'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
