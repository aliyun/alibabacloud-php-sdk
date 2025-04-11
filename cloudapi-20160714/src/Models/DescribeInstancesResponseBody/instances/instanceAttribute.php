<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\instanceSpecAttributes;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\networkInterfaceAttributes;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\privateDnsList;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\tags;

class instanceAttribute extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $aclName;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $classicEgressAddress;

    /**
     * @var string
     */
    public $connectCidrBlocks;

    /**
     * @var string
     */
    public $connectVpcId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $dedicatedInstanceType;

    /**
     * @var bool
     */
    public $egressIpv6Enable;

    /**
     * @var string
     */
    public $expiredTime;

    /**
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
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceCidrBlock;

    /**
     * @var string
     */
    public $instanceClusterId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $instanceRpsLimit;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var instanceSpecAttributes
     */
    public $instanceSpecAttributes;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetEgressAddress;

    /**
     * @var string
     */
    public $intranetSegments;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var networkInterfaceAttributes
     */
    public $networkInterfaceAttributes;

    /**
     * @var string
     */
    public $newVpcEgressAddress;

    /**
     * @var privateDnsList
     */
    public $privateDnsList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportIpv6;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $userVpcId;

    /**
     * @var string
     */
    public $userVswitchId;

    /**
     * @var string
     */
    public $vpcEgressAddress;

    /**
     * @var bool
     */
    public $vpcIntranetEnable;

    /**
     * @var int
     */
    public $vpcOwnerId;

    /**
     * @var bool
     */
    public $vpcSlbIntranetEnable;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneLocalName;
    protected $_name = [
        'aclId' => 'AclId',
        'aclName' => 'AclName',
        'aclStatus' => 'AclStatus',
        'aclType' => 'AclType',
        'classicEgressAddress' => 'ClassicEgressAddress',
        'connectCidrBlocks' => 'ConnectCidrBlocks',
        'connectVpcId' => 'ConnectVpcId',
        'createdTime' => 'CreatedTime',
        'dedicatedInstanceType' => 'DedicatedInstanceType',
        'egressIpv6Enable' => 'EgressIpv6Enable',
        'expiredTime' => 'ExpiredTime',
        'httpsPolicies' => 'HttpsPolicies',
        'IPV6AclId' => 'IPV6AclId',
        'IPV6AclName' => 'IPV6AclName',
        'IPV6AclStatus' => 'IPV6AclStatus',
        'IPV6AclType' => 'IPV6AclType',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceCidrBlock' => 'InstanceCidrBlock',
        'instanceClusterId' => 'InstanceClusterId',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceRpsLimit' => 'InstanceRpsLimit',
        'instanceSpec' => 'InstanceSpec',
        'instanceSpecAttributes' => 'InstanceSpecAttributes',
        'instanceType' => 'InstanceType',
        'internetEgressAddress' => 'InternetEgressAddress',
        'intranetSegments' => 'IntranetSegments',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'networkInterfaceAttributes' => 'NetworkInterfaceAttributes',
        'newVpcEgressAddress' => 'NewVpcEgressAddress',
        'privateDnsList' => 'PrivateDnsList',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'supportIpv6' => 'SupportIpv6',
        'tags' => 'Tags',
        'userVpcId' => 'UserVpcId',
        'userVswitchId' => 'UserVswitchId',
        'vpcEgressAddress' => 'VpcEgressAddress',
        'vpcIntranetEnable' => 'VpcIntranetEnable',
        'vpcOwnerId' => 'VpcOwnerId',
        'vpcSlbIntranetEnable' => 'VpcSlbIntranetEnable',
        'zoneId' => 'ZoneId',
        'zoneLocalName' => 'ZoneLocalName',
    ];

    public function validate()
    {
        if (null !== $this->instanceSpecAttributes) {
            $this->instanceSpecAttributes->validate();
        }
        if (null !== $this->networkInterfaceAttributes) {
            $this->networkInterfaceAttributes->validate();
        }
        if (null !== $this->privateDnsList) {
            $this->privateDnsList->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->connectCidrBlocks) {
            $res['ConnectCidrBlocks'] = $this->connectCidrBlocks;
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

        if (null !== $this->instanceClusterId) {
            $res['InstanceClusterId'] = $this->instanceClusterId;
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
            $res['InstanceSpecAttributes'] = null !== $this->instanceSpecAttributes ? $this->instanceSpecAttributes->toArray($noStream) : $this->instanceSpecAttributes;
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

        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }

        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }

        if (null !== $this->networkInterfaceAttributes) {
            $res['NetworkInterfaceAttributes'] = null !== $this->networkInterfaceAttributes ? $this->networkInterfaceAttributes->toArray($noStream) : $this->networkInterfaceAttributes;
        }

        if (null !== $this->newVpcEgressAddress) {
            $res['NewVpcEgressAddress'] = $this->newVpcEgressAddress;
        }

        if (null !== $this->privateDnsList) {
            $res['PrivateDnsList'] = null !== $this->privateDnsList ? $this->privateDnsList->toArray($noStream) : $this->privateDnsList;
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

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->userVpcId) {
            $res['UserVpcId'] = $this->userVpcId;
        }

        if (null !== $this->userVswitchId) {
            $res['UserVswitchId'] = $this->userVswitchId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ConnectCidrBlocks'])) {
            $model->connectCidrBlocks = $map['ConnectCidrBlocks'];
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

        if (isset($map['InstanceClusterId'])) {
            $model->instanceClusterId = $map['InstanceClusterId'];
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

        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }

        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }

        if (isset($map['NetworkInterfaceAttributes'])) {
            $model->networkInterfaceAttributes = networkInterfaceAttributes::fromMap($map['NetworkInterfaceAttributes']);
        }

        if (isset($map['NewVpcEgressAddress'])) {
            $model->newVpcEgressAddress = $map['NewVpcEgressAddress'];
        }

        if (isset($map['PrivateDnsList'])) {
            $model->privateDnsList = privateDnsList::fromMap($map['PrivateDnsList']);
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

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['UserVpcId'])) {
            $model->userVpcId = $map['UserVpcId'];
        }

        if (isset($map['UserVswitchId'])) {
            $model->userVswitchId = $map['UserVswitchId'];
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
