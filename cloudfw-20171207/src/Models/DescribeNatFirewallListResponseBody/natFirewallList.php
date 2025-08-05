<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListResponseBody\natFirewallList\natRouteEntryList;
use AlibabaCloud\Tea\Model;

class natFirewallList extends Model
{
    /**
     * @description The UID of the Alibaba Cloud account.
     *
     * >  The value of this parameter indicates the management account to which the member is added.
     *
     * @example 19106481******
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The cause of the error.
     *
     * @example Create Failed.
     *
     * @var string
     */
    public $errorDetail;

    /**
     * @description The UID of the member in Cloud Firewall.
     *
     * @example 19106481******
     *
     * @var int
     */
    public $memberUid;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example ngw-uf6tnblxip4qcxg******
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The name of the NAT gateway.
     *
     * @example nat-******
     *
     * @var string
     */
    public $natGatewayName;

    /**
     * @description The default route entries of the NAT gateway.
     *
     * @var natRouteEntryList[]
     */
    public $natRouteEntryList;

    /**
     * @description The ID of the NAT firewall.
     *
     * @example proxy-nat30******
     *
     * @var string
     */
    public $proxyId;

    /**
     * @description The name of the NAT firewall.
     *
     * @example proxy-******
     *
     * @var string
     */
    public $proxyName;

    /**
     * @description The status of the NAT firewall. Valid values:
     *
     *   configuring
     *   deleting
     *   normal
     *   abnormal
     *   opening
     *   closing
     *   closed
     *
     * @example normal
     *
     * @var string
     */
    public $proxyStatus;

    /**
     * @description The region ID of your Cloud Firewall.
     *
     * >  For more information about the supported regions of Cloud Firewall, see [Supported regions](https://help.aliyun.com/document_detail/195657.html).
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether the strict mode is enabled. Valid values: 1, which specifies yes, and 0, which specifies no.
     *
     * @example 0
     *
     * @var int
     */
    public $strictMode;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-2ze26ya******
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example vpc-******
     *
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
        'proxyStatus' => 'ProxyStatus',
        'regionId' => 'RegionId',
        'strictMode' => 'StrictMode',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate() {}

    public function toMap()
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
            $res['NatRouteEntryList'] = [];
            if (null !== $this->natRouteEntryList && \is_array($this->natRouteEntryList)) {
                $n = 0;
                foreach ($this->natRouteEntryList as $item) {
                    $res['NatRouteEntryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->proxyName) {
            $res['ProxyName'] = $this->proxyName;
        }
        if (null !== $this->proxyStatus) {
            $res['ProxyStatus'] = $this->proxyStatus;
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

    /**
     * @param array $map
     *
     * @return natFirewallList
     */
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
                $n = 0;
                foreach ($map['NatRouteEntryList'] as $item) {
                    $model->natRouteEntryList[$n++] = null !== $item ? natRouteEntryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['ProxyName'])) {
            $model->proxyName = $map['ProxyName'];
        }
        if (isset($map['ProxyStatus'])) {
            $model->proxyStatus = $map['ProxyStatus'];
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
