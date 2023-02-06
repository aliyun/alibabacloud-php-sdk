<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\dataDisks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\networkInterfaces;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\tags;
use AlibabaCloud\Tea\Model;

class launchTemplateData extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description The automatic release time of the instance.
     *
     * @example 2018-05-14T14:18:00Z
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description Details about the data disks.
     *
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @description The ID of the deployment set.
     *
     * @example ds-bp1brhwhoqinyjd6****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The description of the instance.
     *
     * @example testInstanceDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether to enable the operating system configuration of the instance.
     *
     * @example false
     *
     * @var bool
     */
    public $enableVmOsConfig;

    /**
     * @description The hostname of the instance.
     *
     * @example testHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the image.
     *
     * @example m-bp67acfmxazb4p****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The source of the image. Valid values:
     *
     *   system: public images provided by Alibaba Cloud.
     *   self: custom images that you create.
     *   others: shared images from other Alibaba Cloud accounts.
     *   marketplace: Alibaba Cloud Marketplace images.
     *
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * @example Postpaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The name of the instance.
     *
     * @example testInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance type.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The billing method for network usage.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth.
     *
     * @example 5
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth.
     *
     * @example 100
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Specifies whether the instance is I/O optimized.
     *
     * @example none
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The number of IPv6 addresses to assign to the instance.
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The name of the key pair.
     *
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description Details about the secondary elastic network interfaces (ENIs).
     *
     * @var networkInterfaces
     */
    public $networkInterfaces;

    /**
     * @description The network type. Valid values:
     *
     *   classic: classic network
     *   vpc: VPC
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description Indicates whether the username and password pair preset in the image is used.
     *
     * @example true
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description The subscription duration.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The private IP address of the instance.
     *
     * @example 10.1.**.**
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The name of the instance RAM role.
     *
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the resource group to which the launch template belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether to enable security hardening.
     *
     * @example active
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description The ID of the security group to which to assign the instance.
     *
     * >  The `SecurityGroupId` and `SecurityGroupIds` parameters are mutually exclusive in the response.
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of the security groups to which to assign the instance.
     *
     * >  The `SecurityGroupId` and `SecurityGroupIds` parameters are mutually exclusive in the response.
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @description The protection period of the preemptible instance. Unit: hours. Valid values: 0, 1, 2, 3, 4, 5, and 6.
     *
     * Take note of the following items:
     *
     *   Protection periods of 2, 3, 4, 5, and 6 hours are in invitational preview. If you want to set this parameter to one of these values, submit a ticket.
     *   A value of 0 indicates that no protection period is configured for the preemptible instance.
     *
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The maximum hourly price of the preemptible instance.
     *
     * @example 0.98
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The bidding policy for the pay-as-you-go instance. Valid values:
     *
     *   NoSpot: The instance is a regular pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is automatically used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The tags of the instance.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The user data of the instance, which is Base64-encoded.
     *
     * @example SGVsbG9FQ1M=
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the vSwitch to which to connect the instance.
     *
     * @example vsw-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example v-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'systemDisk'                  => 'SystemDisk',
        'autoReleaseTime'             => 'AutoReleaseTime',
        'dataDisks'                   => 'DataDisks',
        'deploymentSetId'             => 'DeploymentSetId',
        'description'                 => 'Description',
        'enableVmOsConfig'            => 'EnableVmOsConfig',
        'hostName'                    => 'HostName',
        'imageId'                     => 'ImageId',
        'imageOwnerAlias'             => 'ImageOwnerAlias',
        'instanceChargeType'          => 'InstanceChargeType',
        'instanceName'                => 'InstanceName',
        'instanceType'                => 'InstanceType',
        'internetChargeType'          => 'InternetChargeType',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'ioOptimized'                 => 'IoOptimized',
        'ipv6AddressCount'            => 'Ipv6AddressCount',
        'keyPairName'                 => 'KeyPairName',
        'networkInterfaces'           => 'NetworkInterfaces',
        'networkType'                 => 'NetworkType',
        'passwordInherit'             => 'PasswordInherit',
        'period'                      => 'Period',
        'privateIpAddress'            => 'PrivateIpAddress',
        'ramRoleName'                 => 'RamRoleName',
        'resourceGroupId'             => 'ResourceGroupId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'spotDuration'                => 'SpotDuration',
        'spotPriceLimit'              => 'SpotPriceLimit',
        'spotStrategy'                => 'SpotStrategy',
        'tags'                        => 'Tags',
        'userData'                    => 'UserData',
        'vSwitchId'                   => 'VSwitchId',
        'vpcId'                       => 'VpcId',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
        Model::validateRequired('systemDisk', $this->systemDisk, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableVmOsConfig) {
            $res['EnableVmOsConfig'] = $this->enableVmOsConfig;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->networkInterfaces) {
            $res['NetworkInterfaces'] = null !== $this->networkInterfaces ? $this->networkInterfaces->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableVmOsConfig'])) {
            $model->enableVmOsConfig = $map['EnableVmOsConfig'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['NetworkInterfaces'])) {
            $model->networkInterfaces = networkInterfaces::fromMap($map['NetworkInterfaces']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
