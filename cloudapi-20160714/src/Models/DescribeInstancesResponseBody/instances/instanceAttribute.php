<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\instanceSpecAttributes;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\networkInterfaceAttributes;
use AlibabaCloud\Tea\Model;

class instanceAttribute extends Model
{
    /**
     * @description The ID of the access control policy.
     *
     * @example acl-uf6f9zfxfxtp5j9ng3yv4
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The name of the access control policy.
     *
     * @example test
     *
     * @var string
     */
    public $aclName;

    /**
     * @description Indicates whether access control is enabled. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The type of the access control policy. Valid values:
     *
     *   black: blacklist
     *   white: whitelist
     *
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The outbound IP address.
     *
     * @example 10.0.0.1
     *
     * @var string
     */
    public $classicEgressAddress;

    /**
     * @var string
     */
    public $connectVpcId;

    /**
     * @description The time when the instance was created.
     *
     * @example 2021-10-22 15:36:53.0
     *
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $dedicatedInstanceType;

    /**
     * @description Indicates whether outbound IPv6 is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $egressIpv6Enable;

    /**
     * @description The time when the instance expires.
     *
     * @example 1659801600000
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The HTTPS security policy.
     *
     * @example HTTPS2_TLS1_2
     *
     * @var string
     */
    public $httpsPolicies;

    /**
     * @var string
     */
    public $IPV6AclId;

    /**
     * @var string
     */
    public $IPV6AclName;

    /**
     * @var string
     */
    public $IPV6AclStatus;

    /**
     * @var string
     */
    public $IPV6AclType;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PrePaid: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceCidrBlock;

    /**
     * @description The ID of the instance.
     *
     * @example api-shared-vpc-020
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The records per second (RPS) limit on the instance.
     *
     * @example 500
     *
     * @var int
     */
    public $instanceRpsLimit;

    /**
     * @description The specifications of the instance.
     *
     * @example api.s1.small
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The specifications of the instance.
     *
     * @var instanceSpecAttributes
     */
    public $instanceSpecAttributes;

    /**
     * @description The instance type.
     *
     *   VPC_SHARED: shared instance (VPC)
     *   VPC_DEDICATED: dedicated instance (VPC)
     *
     * @example VPC_SHARED
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The outbound public IP address.
     *
     * @example 47.241.89.244
     *
     * @var string
     */
    public $internetEgressAddress;

    /**
     * @var string
     */
    public $intranetSegments;

    /**
     * @var networkInterfaceAttributes
     */
    public $networkInterfaceAttributes;

    /**
     * @description The region where the instance is located.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The instance status.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether IPv6 is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportIpv6;

    /**
     * @description The ID of the user\"s VPC.
     *
     * @example vpc-t***hx****yu9****t0g4
     *
     * @var string
     */
    public $userVpcId;

    /**
     * @description The ID of the user interaction machine.
     *
     * @example vsw-t4***eh****d7q****i2f
     *
     * @var string
     */
    public $userVswitchId;

    /**
     * @var string
     */
    public $vipTypeList;

    /**
     * @description The outbound CIDR block of the VPC.
     *
     * @example 100.104.254.0/26
     *
     * @var string
     */
    public $vpcEgressAddress;

    /**
     * @description Indicates whether VPC is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $vpcIntranetEnable;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 1408453217640291
     *
     * @var int
     */
    public $vpcOwnerId;

    /**
     * @description Indicates whether VPC SLB is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $vpcSlbIntranetEnable;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-MAZ5(g,h)
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The zone.
     *
     * @example Multi-zone 2
     *
     * @var string
     */
    public $zoneLocalName;
    protected $_name = [
        'aclId'                      => 'AclId',
        'aclName'                    => 'AclName',
        'aclStatus'                  => 'AclStatus',
        'aclType'                    => 'AclType',
        'classicEgressAddress'       => 'ClassicEgressAddress',
        'connectVpcId'               => 'ConnectVpcId',
        'createdTime'                => 'CreatedTime',
        'dedicatedInstanceType'      => 'DedicatedInstanceType',
        'egressIpv6Enable'           => 'EgressIpv6Enable',
        'expiredTime'                => 'ExpiredTime',
        'httpsPolicies'              => 'HttpsPolicies',
        'IPV6AclId'                  => 'IPV6AclId',
        'IPV6AclName'                => 'IPV6AclName',
        'IPV6AclStatus'              => 'IPV6AclStatus',
        'IPV6AclType'                => 'IPV6AclType',
        'instanceChargeType'         => 'InstanceChargeType',
        'instanceCidrBlock'          => 'InstanceCidrBlock',
        'instanceId'                 => 'InstanceId',
        'instanceName'               => 'InstanceName',
        'instanceRpsLimit'           => 'InstanceRpsLimit',
        'instanceSpec'               => 'InstanceSpec',
        'instanceSpecAttributes'     => 'InstanceSpecAttributes',
        'instanceType'               => 'InstanceType',
        'internetEgressAddress'      => 'InternetEgressAddress',
        'intranetSegments'           => 'IntranetSegments',
        'networkInterfaceAttributes' => 'NetworkInterfaceAttributes',
        'regionId'                   => 'RegionId',
        'status'                     => 'Status',
        'supportIpv6'                => 'SupportIpv6',
        'userVpcId'                  => 'UserVpcId',
        'userVswitchId'              => 'UserVswitchId',
        'vipTypeList'                => 'VipTypeList',
        'vpcEgressAddress'           => 'VpcEgressAddress',
        'vpcIntranetEnable'          => 'VpcIntranetEnable',
        'vpcOwnerId'                 => 'VpcOwnerId',
        'vpcSlbIntranetEnable'       => 'VpcSlbIntranetEnable',
        'zoneId'                     => 'ZoneId',
        'zoneLocalName'              => 'ZoneLocalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->classicEgressAddress) {
            $res['ClassicEgressAddress'] = $this->classicEgressAddress;
        }
        if (null !== $this->connectVpcId) {
            $res['ConnectVpcId'] = $this->connectVpcId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dedicatedInstanceType) {
            $res['DedicatedInstanceType'] = $this->dedicatedInstanceType;
        }
        if (null !== $this->egressIpv6Enable) {
            $res['EgressIpv6Enable'] = $this->egressIpv6Enable;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->httpsPolicies) {
            $res['HttpsPolicies'] = $this->httpsPolicies;
        }
        if (null !== $this->IPV6AclId) {
            $res['IPV6AclId'] = $this->IPV6AclId;
        }
        if (null !== $this->IPV6AclName) {
            $res['IPV6AclName'] = $this->IPV6AclName;
        }
        if (null !== $this->IPV6AclStatus) {
            $res['IPV6AclStatus'] = $this->IPV6AclStatus;
        }
        if (null !== $this->IPV6AclType) {
            $res['IPV6AclType'] = $this->IPV6AclType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceCidrBlock) {
            $res['InstanceCidrBlock'] = $this->instanceCidrBlock;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceRpsLimit) {
            $res['InstanceRpsLimit'] = $this->instanceRpsLimit;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->instanceSpecAttributes) {
            $res['InstanceSpecAttributes'] = null !== $this->instanceSpecAttributes ? $this->instanceSpecAttributes->toMap() : null;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetEgressAddress) {
            $res['InternetEgressAddress'] = $this->internetEgressAddress;
        }
        if (null !== $this->intranetSegments) {
            $res['IntranetSegments'] = $this->intranetSegments;
        }
        if (null !== $this->networkInterfaceAttributes) {
            $res['NetworkInterfaceAttributes'] = null !== $this->networkInterfaceAttributes ? $this->networkInterfaceAttributes->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportIpv6) {
            $res['SupportIpv6'] = $this->supportIpv6;
        }
        if (null !== $this->userVpcId) {
            $res['UserVpcId'] = $this->userVpcId;
        }
        if (null !== $this->userVswitchId) {
            $res['UserVswitchId'] = $this->userVswitchId;
        }
        if (null !== $this->vipTypeList) {
            $res['VipTypeList'] = $this->vipTypeList;
        }
        if (null !== $this->vpcEgressAddress) {
            $res['VpcEgressAddress'] = $this->vpcEgressAddress;
        }
        if (null !== $this->vpcIntranetEnable) {
            $res['VpcIntranetEnable'] = $this->vpcIntranetEnable;
        }
        if (null !== $this->vpcOwnerId) {
            $res['VpcOwnerId'] = $this->vpcOwnerId;
        }
        if (null !== $this->vpcSlbIntranetEnable) {
            $res['VpcSlbIntranetEnable'] = $this->vpcSlbIntranetEnable;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneLocalName) {
            $res['ZoneLocalName'] = $this->zoneLocalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['ClassicEgressAddress'])) {
            $model->classicEgressAddress = $map['ClassicEgressAddress'];
        }
        if (isset($map['ConnectVpcId'])) {
            $model->connectVpcId = $map['ConnectVpcId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DedicatedInstanceType'])) {
            $model->dedicatedInstanceType = $map['DedicatedInstanceType'];
        }
        if (isset($map['EgressIpv6Enable'])) {
            $model->egressIpv6Enable = $map['EgressIpv6Enable'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HttpsPolicies'])) {
            $model->httpsPolicies = $map['HttpsPolicies'];
        }
        if (isset($map['IPV6AclId'])) {
            $model->IPV6AclId = $map['IPV6AclId'];
        }
        if (isset($map['IPV6AclName'])) {
            $model->IPV6AclName = $map['IPV6AclName'];
        }
        if (isset($map['IPV6AclStatus'])) {
            $model->IPV6AclStatus = $map['IPV6AclStatus'];
        }
        if (isset($map['IPV6AclType'])) {
            $model->IPV6AclType = $map['IPV6AclType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceCidrBlock'])) {
            $model->instanceCidrBlock = $map['InstanceCidrBlock'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceRpsLimit'])) {
            $model->instanceRpsLimit = $map['InstanceRpsLimit'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['InstanceSpecAttributes'])) {
            $model->instanceSpecAttributes = instanceSpecAttributes::fromMap($map['InstanceSpecAttributes']);
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetEgressAddress'])) {
            $model->internetEgressAddress = $map['InternetEgressAddress'];
        }
        if (isset($map['IntranetSegments'])) {
            $model->intranetSegments = $map['IntranetSegments'];
        }
        if (isset($map['NetworkInterfaceAttributes'])) {
            $model->networkInterfaceAttributes = networkInterfaceAttributes::fromMap($map['NetworkInterfaceAttributes']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportIpv6'])) {
            $model->supportIpv6 = $map['SupportIpv6'];
        }
        if (isset($map['UserVpcId'])) {
            $model->userVpcId = $map['UserVpcId'];
        }
        if (isset($map['UserVswitchId'])) {
            $model->userVswitchId = $map['UserVswitchId'];
        }
        if (isset($map['VipTypeList'])) {
            $model->vipTypeList = $map['VipTypeList'];
        }
        if (isset($map['VpcEgressAddress'])) {
            $model->vpcEgressAddress = $map['VpcEgressAddress'];
        }
        if (isset($map['VpcIntranetEnable'])) {
            $model->vpcIntranetEnable = $map['VpcIntranetEnable'];
        }
        if (isset($map['VpcOwnerId'])) {
            $model->vpcOwnerId = $map['VpcOwnerId'];
        }
        if (isset($map['VpcSlbIntranetEnable'])) {
            $model->vpcSlbIntranetEnable = $map['VpcSlbIntranetEnable'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneLocalName'])) {
            $model->zoneLocalName = $map['ZoneLocalName'];
        }

        return $model;
    }
}
