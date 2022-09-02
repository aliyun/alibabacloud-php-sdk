<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\instanceSpecAttributes;
use AlibabaCloud\Tea\Model;

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
    public $createdTime;

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
    public $instanceChargeType;

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
    public $vipTypeList;

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
        'aclId'                  => 'AclId',
        'aclName'                => 'AclName',
        'aclStatus'              => 'AclStatus',
        'aclType'                => 'AclType',
        'classicEgressAddress'   => 'ClassicEgressAddress',
        'createdTime'            => 'CreatedTime',
        'egressIpv6Enable'       => 'EgressIpv6Enable',
        'expiredTime'            => 'ExpiredTime',
        'httpsPolicies'          => 'HttpsPolicies',
        'instanceChargeType'     => 'InstanceChargeType',
        'instanceId'             => 'InstanceId',
        'instanceName'           => 'InstanceName',
        'instanceRpsLimit'       => 'InstanceRpsLimit',
        'instanceSpec'           => 'InstanceSpec',
        'instanceSpecAttributes' => 'InstanceSpecAttributes',
        'instanceType'           => 'InstanceType',
        'internetEgressAddress'  => 'InternetEgressAddress',
        'regionId'               => 'RegionId',
        'status'                 => 'Status',
        'supportIpv6'            => 'SupportIpv6',
        'userVpcId'              => 'UserVpcId',
        'userVswitchId'          => 'UserVswitchId',
        'vipTypeList'            => 'VipTypeList',
        'vpcEgressAddress'       => 'VpcEgressAddress',
        'vpcIntranetEnable'      => 'VpcIntranetEnable',
        'vpcOwnerId'             => 'VpcOwnerId',
        'vpcSlbIntranetEnable'   => 'VpcSlbIntranetEnable',
        'zoneId'                 => 'ZoneId',
        'zoneLocalName'          => 'ZoneLocalName',
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
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
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
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
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
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
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
