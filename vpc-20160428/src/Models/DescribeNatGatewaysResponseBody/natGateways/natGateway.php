<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\forwardTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\fullNatTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipLists;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\natGatewayPrivateInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\snatTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\tags;
use AlibabaCloud\Tea\Model;

class natGateway extends Model
{
    /**
     * @description Indicates whether automatic payment is enabled. Valid values:
     *
     *   **false**: no
     *   **true**: yes
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The status of the NAT gateway. Valid values:
     *
     *   **Normal**: normal
     *   **FinancialLocked**: locked due to overdue payments
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The time when the NAT gateway was created.
     *
     * @example 2021-06-08T12:20:20Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the deletion protection feature is enabled. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The description of the NAT gateway.
     *
     * @example NAT
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the traffic monitoring feature is enabled. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $ecsMetricEnabled;

    /**
     * @description The mode in which the NAT gateway is associated with an elastic IP address (EIP). Valid values:
     *
     *   **MULTI_BINDED**: multi-EIP-to-ENI mode
     *   **NAT**: NAT mode, which is compatible with IPv4 addresses.
     *
     * >  Note: If you use the NAT mode, the EIP occupies one private IP address on the vSwitch of the NAT gateway. Make sure that the vSwitch has sufficient private IP addresses. Otherwise, the NAT gateway fails to be associated with the EIP. In NAT mode, you can associate a NAT gateway with up to 50 EIPs.
     * @example MULTI_BINDED
     *
     * @var string
     */
    public $eipBindMode;

    /**
     * @var string
     */
    public $enableSessionLog;

    /**
     * @description The time when the NAT gateway expires.
     *
     * @example 2021-08-26T16:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the DNAT table.
     *
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @description The ID of the FULLNAT table.
     *
     * @var fullNatTableIds
     */
    public $fullNatTableIds;

    /**
     * @description Indicates whether the ICMP non-retrieval feature is enabled. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $icmpReplyEnabled;

    /**
     * @description The billing method of the NAT gateway. The value is set to **PostPaid**, which indicates the pay-as-you-go billing method.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the NAT gateway. Valid values:
     *
     *   **PayBySpec**: pay-by-specification
     *   **PayByLcu**: pay-by-CU
     *
     * @example PayByLcu
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The list of elastic IP addresses (EIPs) that are associated with the Internet NAT gateway.
     *
     * @var ipLists
     */
    public $ipLists;

    /**
     * @description The name of the NAT gateway.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example ngw-bp1047e2d4z7kf2ki****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The private network information about the enhanced Internet NAT gateway.
     *
     * >  If **NatType** is set to **Normal**, all parameters returned in this list are empty.
     * @var natGatewayPrivateInfo
     */
    public $natGatewayPrivateInfo;

    /**
     * @description The type of the NAT gateway. The value is set to **Enhanced** (enhanced NAT gateway).
     *
     * @example Enhanced
     *
     * @var string
     */
    public $natType;

    /**
     * @description The type of NAT gateway. Valid values:
     *
     *   **internet**: an Internet NAT gateway
     *   **intranet**: a VPC NAT gateway
     *
     * @example internet
     *
     * @var string
     */
    public $networkType;

    /**
     * @description Indicates whether the NAT gateway supports PrivateLink. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $privateLinkEnabled;

    /**
     * @description The mode that is used by PrivateLink. Valid values:
     *
     *   **FullNat**: the FULLNAT mode
     *   **Geneve**: the GENEVE mode
     *
     * @example FullNat
     *
     * @var string
     */
    public $privateLinkMode;

    /**
     * @description The ID of the region where the NAT gateway is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the contiguous EIP group belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the firewall feature is enabled. Valid values:
     *
     *   **false**: no
     *   **true**: yes
     *
     * @example false
     *
     * @var bool
     */
    public $securityProtectionEnabled;

    /**
     * @description The ID of the SNAT table of the NAT gateway.
     *
     * @var snatTableIds
     */
    public $snatTableIds;

    /**
     * @description The size of the NAT gateway. An empty value is returned for the parameter.
     *
     * If **InternetChargeType** is set to **PayByLcu**, an empty value is returned.
     * @example Small
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the NAT gateway. Valid values:
     *
     *   **Creating**: After you send a request to create a NAT gateway, the system creates the NAT gateway in the background. The NAT gateway remains in the Creating state until the operation is completed.
     *   **Available**: The NAT gateway remains in a stable state after the NAT gateway is created.
     *   **Modifying**: After you send a request to modify a NAT gateway, the system modifies the NAT gateway in the background. The NAT gateway remains in the Modifying state until the operation is completed.
     *   **Deleting**: After you send a request to delete a NAT gateway, the system deletes the NAT gateway in the background. The NAT gateway remains in the Deleting state until the operation is completed.
     *   **Converting**: After you send a request to upgrade a standard NAT gateway to an enhanced NAT gateway, the system upgrades the NAT gateway in the background. The NAT gateway remains in the Converting state until the operation is completed.
     *
     * @example Creating
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are added to the resource group.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the VPC where the NAT gateway is deployed.
     *
     * @example vpc-bp15zckdt37pq72z****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'autoPay'                   => 'AutoPay',
        'businessStatus'            => 'BusinessStatus',
        'creationTime'              => 'CreationTime',
        'deletionProtection'        => 'DeletionProtection',
        'description'               => 'Description',
        'ecsMetricEnabled'          => 'EcsMetricEnabled',
        'eipBindMode'               => 'EipBindMode',
        'enableSessionLog'          => 'EnableSessionLog',
        'expiredTime'               => 'ExpiredTime',
        'forwardTableIds'           => 'ForwardTableIds',
        'fullNatTableIds'           => 'FullNatTableIds',
        'icmpReplyEnabled'          => 'IcmpReplyEnabled',
        'instanceChargeType'        => 'InstanceChargeType',
        'internetChargeType'        => 'InternetChargeType',
        'ipLists'                   => 'IpLists',
        'name'                      => 'Name',
        'natGatewayId'              => 'NatGatewayId',
        'natGatewayPrivateInfo'     => 'NatGatewayPrivateInfo',
        'natType'                   => 'NatType',
        'networkType'               => 'NetworkType',
        'privateLinkEnabled'        => 'PrivateLinkEnabled',
        'privateLinkMode'           => 'PrivateLinkMode',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'securityProtectionEnabled' => 'SecurityProtectionEnabled',
        'snatTableIds'              => 'SnatTableIds',
        'spec'                      => 'Spec',
        'status'                    => 'Status',
        'tags'                      => 'Tags',
        'vpcId'                     => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsMetricEnabled) {
            $res['EcsMetricEnabled'] = $this->ecsMetricEnabled;
        }
        if (null !== $this->eipBindMode) {
            $res['EipBindMode'] = $this->eipBindMode;
        }
        if (null !== $this->enableSessionLog) {
            $res['EnableSessionLog'] = $this->enableSessionLog;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toMap() : null;
        }
        if (null !== $this->fullNatTableIds) {
            $res['FullNatTableIds'] = null !== $this->fullNatTableIds ? $this->fullNatTableIds->toMap() : null;
        }
        if (null !== $this->icmpReplyEnabled) {
            $res['IcmpReplyEnabled'] = $this->icmpReplyEnabled;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipLists) {
            $res['IpLists'] = null !== $this->ipLists ? $this->ipLists->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->natGatewayPrivateInfo) {
            $res['NatGatewayPrivateInfo'] = null !== $this->natGatewayPrivateInfo ? $this->natGatewayPrivateInfo->toMap() : null;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->privateLinkEnabled) {
            $res['PrivateLinkEnabled'] = $this->privateLinkEnabled;
        }
        if (null !== $this->privateLinkMode) {
            $res['PrivateLinkMode'] = $this->privateLinkMode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityProtectionEnabled) {
            $res['SecurityProtectionEnabled'] = $this->securityProtectionEnabled;
        }
        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = null !== $this->snatTableIds ? $this->snatTableIds->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsMetricEnabled'])) {
            $model->ecsMetricEnabled = $map['EcsMetricEnabled'];
        }
        if (isset($map['EipBindMode'])) {
            $model->eipBindMode = $map['EipBindMode'];
        }
        if (isset($map['EnableSessionLog'])) {
            $model->enableSessionLog = $map['EnableSessionLog'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }
        if (isset($map['FullNatTableIds'])) {
            $model->fullNatTableIds = fullNatTableIds::fromMap($map['FullNatTableIds']);
        }
        if (isset($map['IcmpReplyEnabled'])) {
            $model->icmpReplyEnabled = $map['IcmpReplyEnabled'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpLists'])) {
            $model->ipLists = ipLists::fromMap($map['IpLists']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NatGatewayPrivateInfo'])) {
            $model->natGatewayPrivateInfo = natGatewayPrivateInfo::fromMap($map['NatGatewayPrivateInfo']);
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PrivateLinkEnabled'])) {
            $model->privateLinkEnabled = $map['PrivateLinkEnabled'];
        }
        if (isset($map['PrivateLinkMode'])) {
            $model->privateLinkMode = $map['PrivateLinkMode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityProtectionEnabled'])) {
            $model->securityProtectionEnabled = $map['SecurityProtectionEnabled'];
        }
        if (isset($map['SnatTableIds'])) {
            $model->snatTableIds = snatTableIds::fromMap($map['SnatTableIds']);
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
