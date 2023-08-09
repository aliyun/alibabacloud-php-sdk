<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest\networkInterface;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateLaunchTemplateVersionRequest extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description The automatic release time of the instance. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     *   If the value of `ss` is not `00`, the time is automatically rounded to the nearest minute based on the value of `mm`.
     *   The specified time must be at least 30 minutes later than the current time.
     *   The specified time can be at most three years from the current time.
     *
     * @example 2018-01-01T12:05:00Z
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description The data disks.
     *
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The ID of the deployment set to which to deploy the instance.
     *
     * @example ds-bp1brhwhoqinyjd6****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The description of the instance. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable the operating system configuration of the instance.
     *
     * @example false
     *
     * @var bool
     */
    public $enableVmOsConfig;

    /**
     * @description The hostname of the instance.
     *
     *   The hostname cannot start or end with a period (.) or hyphen (-). It cannot contain consecutive periods (.) or hyphens (-).
     *   For Windows instances, the hostname must be 2 to 15 characters in length and cannot contain periods (.) or contain only digits. It can contain letters, digits, and hyphens (-).
     *   For instances that run other operating systems such as Linux, the hostname must be 2 to 64 characters in length. You can use periods (.) to separate the hostname into multiple segments. Each segment can contain letters, digits, and hyphens (-).
     *
     * @example testHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the image to use to create the Elastic Compute Service (ECS) instance. You can call the [DescribeImages](~~25534~~) operation to query available images.
     *
     * @example win2008r2_64_ent_sp1_en-us_40G_alibase_20170915.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The source of the image.
     *
     * > This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PrePaid: subscription. If you set this parameter to PrePaid, make sure that your account has sufficient credits. Otherwise, an `InvalidPayMethod` error is returned.
     *   PostPaid: pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance name. The name must be 2 to 128 characters in length, It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example testInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance type. For more information, see [Instance families](~~25378~~) or call the [DescribeInstanceTypes](~~25620~~) operation to query the most recent instance type list.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The billing method for network usage. Default value: PayByTraffic. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-traffic
     *
     * > When the **pay-by-traffic** billing method for network usage is used, the maximum inbound and outbound bandwidths are used as the upper limits of bandwidths instead of guaranteed performance specifications. In scenarios where demand outstrips resource supplies, these maximum bandwidth values may not be reached. If you want guaranteed bandwidths for your instance, use the **pay-by-bandwidth** billing method for network usage.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s. Valid values:
     *
     *   When the purchased outbound public bandwidth is less than or equal to 10 Mbit/s, the valid values of this parameter are 1 to 10 and the default value is 10.
     *   If the purchased outbound public bandwidth is greater than 10 Mbit/s, the valid values of this parameter range from 1 to the `InternetMaxBandwidthOut` value and the default value is the `InternetMaxBandwidthOut` value.
     *
     * @example 50
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * @example 5
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Specifies whether to create an I/O optimized instance. Valid values:
     *
     *   none: The instance is not I/O optimized.
     *   optimized: creates an I/O optimized instance.
     *
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The number of IPv6 addresses to randomly generate for the primary elastic network interface (ENI). Valid values: 1 to 10.
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The name of the key pair to bind to the instance.
     *
     *   For Windows instances, this parameter is ignored The `Password` parameter is valid even if the KeyPairName parameter is specified.
     *   For Linux instances, the password-based logon method is disabled by default.
     *
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The ID of the launch template. For more information, see [DescribeLaunchTemplates](~~73759~~). You must specify `LaunchTemplateId` or `LaunchTemplateName` to specify a launch template.
     *
     * @example lt-m5eiaupmvm2op9d****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The name of the launch template. The name must be 2 to 128 characters in length, It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example testLaunchTemplateName
     *
     * @var string
     */
    public $launchTemplateName;

    /**
     * @description The information of the ENI.
     *
     * @var networkInterface[]
     */
    public $networkInterface;

    /**
     * @description The network type of the instance. Valid values:
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
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to use the password that is preconfigured in the image. Valid values:
     *
     *   true: uses the password that is preconfigured in the mage.
     *   false: does not use the password that is preconfigured in the image.
     *
     * > If the PasswordInherit parameter is specified, you must leave the Password parameter empty. Before you use this parameter, make sure that a password is preset for the image.
     * @example false
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description The subscription period of the instance. Unit: months. This parameter is valid and required only when `InstanceChargeType` is set to `PrePaid`. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36, 48, and 60.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The private IP address to assign to the instance.
     *
     * To assign a private IP address to an instance of the VPC type, make sure that the IP address is an idle IP address within the CIDR block of the vSwitch specified by the `VSwitchId` parameter.
     * @example 10.1.**.**
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The name of the instance Resource Access Management (RAM) role. You can call the [ListRoles](~~28713~~) operation provided by RAM to query the instance RAM roles that you created.
     *
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID of the command. You can call the [DescribeRegions](~~25609~~) operation to query the most recent list of regions.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the instance.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to enable security hardening for the operating system. Valid values:
     *
     *   Active: Security hardening is enabled. This value is applicable only to public images.
     *   Deactive: Security hardening is disabled. This value is available to all types of images.
     *
     * @example Active
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description The ID of the security group to which to assign the instance. Instances within the same security group can access each other.
     *
     * > The `SecurityGroupId` parameter and the `SecurityGroupIds.N` parameter are mutually exclusive.
     * @example sg-bp15ed6xe1yxeycg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of security group N to which to assign the instance. The valid values of N depend on the maximum number of security groups to which the instance can belong. For more information, see [Quantity limits](~~25412~~).
     *
     * > The `SecurityGroupId` parameter and the `SecurityGroupIds.N` parameter are mutually exclusive.
     * @example sg-bp15ed6xe1yxeycg7****
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The retention period of the preemptible instance. Unit: hours. Valid values: 0, 1, 2, 3, 4, 5, and 6
     *
     *   The following protection periods are available in invitational preview: 2, 3, 4, 5, and 6 hours. If you want to set this parameter to one of these values, submit a ticket.
     *   A value of 0 indicates that no protection period is configured for the preemptible instance.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The maximum hourly price of the preemptible instance. A maximum of three decimal places are allowed.
     *
     * @example 0.97
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The preemption policy for the pay-as-you-go instance. This parameter is valid only when the `InstanceChargeType` parameter is set to `PostPaid`. Default value: NoSpot. Valid values:
     *
     *   NoSpot: The instance is created as a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instances of the compute node are preemptible instances. These types of instances have a specified maximum hourly price.
     *   SpotAsPriceGo: The instance is created as a preemptible instance for which the market price at the time of purchase is automatically used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The tags to add to the activation code.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The user data of the instance. The user data must be encoded in Base64. The maximum size of raw data is 16 KB.
     *
     * @example ZWNobyBoZWxsbyBl****
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the vSwitch to which to connect the instance. This parameter is required if you specify the VpcId parameter.
     *
     * @example vsw-bp1s5fnvk4gn2tws0****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The description of the launch template version. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example testVersionDescription
     *
     * @var string
     */
    public $versionDescription;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp12433upq1y5scen****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone to which the instance belongs.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'systemDisk'                  => 'SystemDisk',
        'autoReleaseTime'             => 'AutoReleaseTime',
        'dataDisk'                    => 'DataDisk',
        'deletionProtection'          => 'DeletionProtection',
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
        'launchTemplateId'            => 'LaunchTemplateId',
        'launchTemplateName'          => 'LaunchTemplateName',
        'networkInterface'            => 'NetworkInterface',
        'networkType'                 => 'NetworkType',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'passwordInherit'             => 'PasswordInherit',
        'period'                      => 'Period',
        'privateIpAddress'            => 'PrivateIpAddress',
        'ramRoleName'                 => 'RamRoleName',
        'regionId'                    => 'RegionId',
        'resourceGroupId'             => 'ResourceGroupId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'spotDuration'                => 'SpotDuration',
        'spotPriceLimit'              => 'SpotPriceLimit',
        'spotStrategy'                => 'SpotStrategy',
        'tag'                         => 'Tag',
        'userData'                    => 'UserData',
        'vSwitchId'                   => 'VSwitchId',
        'versionDescription'          => 'VersionDescription',
        'vpcId'                       => 'VpcId',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
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
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
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
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->networkInterface) {
            $res['NetworkInterface'] = [];
            if (null !== $this->networkInterface && \is_array($this->networkInterface)) {
                $n = 0;
                foreach ($this->networkInterface as $item) {
                    $res['NetworkInterface'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
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
     * @return CreateLaunchTemplateVersionRequest
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
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
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
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['NetworkInterface'])) {
            if (!empty($map['NetworkInterface'])) {
                $model->networkInterface = [];
                $n                       = 0;
                foreach ($map['NetworkInterface'] as $item) {
                    $model->networkInterface[$n++] = null !== $item ? networkInterface::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
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
