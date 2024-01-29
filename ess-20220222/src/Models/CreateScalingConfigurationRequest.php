<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest\customPriorities;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest\dataDisks;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest\imageOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest\instancePatternInfos;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest\instanceTypeOverrides;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest\privatePoolOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest\spotPriceLimits;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class CreateScalingConfigurationRequest extends Model
{
    /**
     * @var imageOptions
     */
    public $imageOptions;

    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description Specifies whether to associate an ECS instance on a dedicated host with the dedicated host. Valid values:
     *
     *   default: does not associate the ECS instance with the dedicated host. If you start an ECS instance that was stopped in economical mode and the original dedicated host has insufficient resources, the ECS instance is automatically deployed to another dedicated host in the automatic deployment resource pool.
     *   host: associates the ECS instance with the dedicated host. If you start an ECS instance that was stopped in economical mode, the instance remains on the original dedicated host. If the original dedicated host has insufficient resources, the ECS instance fails to start.
     *
     * Default value: default
     * @example default
     *
     * @var string
     */
    public $affinity;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see the "[How to ensure the idempotence of a request](~~25693~~)" topic.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The number of vCPUs.
     *
     * > You can specify Cpu and Memory to determine the range of instance types only if you set Scaling Policy to Cost Optimization Policy and you do not specify instance types in the scaling configuration.
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The performance mode of the burstable instance. Valid values:
     *
     *   Standard: standard mode
     *   Unlimited: unlimited mode
     *
     * For more information, see the "Performance modes" section in the "[Overview](~~59977~~)" topic.
     * @example Standard
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @var customPriorities[]
     */
    public $customPriorities;

    /**
     * @description The data disks.
     *
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @description The ID of the dedicated host on which you want to create an ECS instance. You cannot create preemptible instances on dedicated hosts. If you specify DedicatedHostId, SpotStrategy and SpotPriceLimit are ignored.
     *
     * You can call the DescribeDedicatedHosts operation to query dedicated host IDs.
     * @example dh-bp67acfmxazb4p****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The ID of the deployment set of the ECS instances that are created by using the scaling configuration.
     *
     * @example ds-bp1frxuzdg87zh4pz****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The hostname of the ECS instance. The hostname cannot start or end with a period (.) or a hyphen (-). The hostname cannot contain consecutive periods (.) or hyphens (-). Naming conventions for different types of instances:
     *
     *   Windows instances: The hostname must be 2 to 15 characters in length and can contain letters, digits, and hyphens (-). The hostname cannot contain periods (.) or contain only digits.
     *   Other instances, such as Linux instances: The hostname must be 2 to 64 characters in length. You can use periods (.) to separate a hostname into multiple segments. Each segment can contain letters, digits, and hyphens (-).
     *
     * @example host****
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the Elastic High Performance Computing (E-HPC) cluster to which the ECS instances that are created by using the scaling configuration belong.
     *
     * @example hpc-clusterid
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description The name of the image family. If you specify this parameter, the most recent custom images that are available in the specified image family are returned. You can use the images to create instances. If you specify ImageId, you cannot specify ImageFamily.
     *
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The ID of the image that Auto Scaling uses to automatically create ECS instances.
     *
     * @example centos6u5_64_20G_aliaegis****.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image. Each image name must be unique in a region. If you specify ImageId, ImageName is ignored.
     *
     * You cannot use ImageName to specify images that are purchased from Alibaba Cloud Marketplace.
     * @example image****
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The description of the ECS instance. The description must be 2 to 256 characters in length. The description can contain letters and cannot start with `http://` or `https://`.
     *
     * @example Test instance.
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The name of the ECS instance that Auto Scaling creates based on the scaling configuration.
     *
     * @example instance****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Details of the intelligent configuration settings that determine the range of instance types that meet the specified criteria.
     *
     * @var instancePatternInfos[]
     */
    public $instancePatternInfos;

    /**
     * @description The instance type of the ECS instance. For more information, see the "Instance families" topic.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance types.
     *
     * @var instanceTypeOverrides[]
     */
    public $instanceTypeOverrides;

    /**
     * @description The instance types. If you specify InstanceTypes, InstanceType is ignored.
     *
     * Auto Scaling creates instances based on the priorities of the instance types. If Auto Scaling cannot create instances by using the instance type that has the highest priority, Auto Scaling creates instances by using the instance type that has the next highest priority.
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The metering method for network usage. Valid values:
     *
     *   PayByBandwidth: You are charged for the maximum available bandwidth that is specified by InternetMaxBandwidthOut.
     *   PayByTraffic: You are charged based on the amount of transferred data. InternetMaxBandwidthOut specifies only the maximum available bandwidth.
     *
     * For the classic network, the default value is PayByBandwidth. For VPCs, the default value is PayByTraffic.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s. Valid values: 1 to 200.
     *
     * Default value: 200 This parameter is not used for billing because inbound traffic to instances is free of charge.
     * @example 100
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values:
     *
     *   Valid values if you set InternetChargeType to PayByBandwidth: 0 to 100. If you leave this parameter empty, this parameter is automatically set to 0.
     *   Valid values if you set InternetChargeType to PayByTraffic: 0 to 100. If you leave this parameter empty, an error is returned.
     *
     * @example 50
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Specifies whether to create an I/O optimized instance. Valid values:
     *
     * For instances of retired instance types, the default value is none. For instances of other instance types, the default value is optimized.
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The number of randomly generated IPv6 addresses that you want to allocate to the elastic network interface (ENI).
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The name of the key pair that you want to use to log on to an ECS instance.
     *
     *   Windows instances do not support this parameter.
     *   By default, the username and password authentication method is disabled for Linux instances.
     *
     * @example KeyPairTest
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The weight of an ECS instance as a backend server. Valid values: 1 to 100.
     *
     * Default value: 50
     * @example 50
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The memory size. Unit: GiB.
     *
     * > You can specify Cpu and Memory to determine the range of instance types only if you set Scaling Policy to Cost Optimization Policy and you do not specify instance types in the scaling configuration.
     * @example 16
     *
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password that you want to use to log on to an ECS instance. The password must be 8 to 30 characters in length and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. The following special characters are supported:
     *
     * `` `() ~!@#$%^&*-_+=\|{}[]:;\"<>,.?/ ``
     *
     * > For security reasons, we recommend that you use HTTPS to send requests if you specify Password.
     * @example 123abc****
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether to use the password that is preconfigured in the image. Before you use this parameter, make sure that a password is configured in the image. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description The name of the RAM role that you attach to the ECS instance. The name is provided and maintained by Resource Access Management (RAM). You can call the ListRoles operation to query the available RAM roles.
     *
     * @example ramrole****
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the resource group to which the ECS instances that are created by using the scaling configuration belong.
     *
     * @example rg-resource****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The name of the scaling configuration. The name must be 2 to 64 characters in length and can contain letters, digits, underscores (\_), hyphens (-), and periods (.). The name must start with a letter or a digit.
     *
     * The name of the scaling configuration must be unique in a region. If you do not specify this parameter, the scaling configuration ID is used.
     * @example scalingconfig****
     *
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @description The ID of the scaling group in which you want to create a scaling configuration.
     *
     * @example asg-bp14wlu85wrpchm0****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The scheduler options.
     *
     * @example ["testManagedPrivateSpaceId****"]
     *
     * @var mixed[]
     */
    public $schedulerOptions;

    /**
     * @description Specifies whether to enable security hardening. Valid values:
     *
     *   Active: enables security hardening. This value is applicable only to public images.
     *   Deactive: disables security hardening. This value is applicable to all image types.
     *
     * @example Active
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description The ID of the security group with which ECS instances are associated. ECS instances that are associated with the same security group can access each other.
     *
     * @example sg-280ih****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of the security groups with which you want to associate the ECS instances that are created by using the scaling configuration. For more information, see the "Security group limits" section of the "[Limits](~~25412~~)" topic.
     *
     * > If you specify SecurityGroupId, you cannot specify SecurityGroupIds.
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The retention period of the preemptible instance. Unit: hours. Valid values: 0, 1, 2, 3, 4, 5, and 6.
     *
     *   The following retention periods are available in invitational preview: 2, 3, 4, 5, and 6 hours. If you want to set this parameter to one of these values, submit a ticket.
     *   If you set this parameter to 0, no protection period is specified for the preemptible instance.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The interruption mode of the preemptible instance. Set the value to Terminate. The value specifies that the preemptible instance is to be released.
     *
     * @example Terminate
     *
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @description The billing information of the preemptible instances.
     *
     * @var spotPriceLimits[]
     */
    public $spotPriceLimits;

    /**
     * @description The preemption policy that you want to apply to pay-as-you-go and preemptible instances. Valid values:
     *
     *   NoSpot: The instance is created as a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance that has a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is created as a preemptible instance for which the market price at the time of purchase is automatically used as the bid price.
     *
     * Default value: NoSpot
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $storageSetId;

    /**
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description The categories of the system disks. If Auto Scaling cannot create instances by using the disk category that has the highest priority, Auto Scaling creates instances by using the disk category that has the next highest priority. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: ESSD
     *
     * > If you specify SystemDiskCategories, you cannot specify `SystemDisk.Category`.
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @description The tags of the ECS instance. Tags must be specified as key-value pairs. You can specify up to 20 tags. When you specify tag keys and tag values, take note of the following items:
     *
     *   A tag key can be up to 64 characters in length. The key cannot start with acs: or aliyun and cannot contain `http://` or `https://`. You cannot specify an empty string as a tag key.
     *   A tag value can be up to 128 characters in length. The value cannot start with acs: or aliyun and cannot contain `http://` or `https://`. You can specify an empty string as a tag value.
     *
     * @example {"key1":"value1","key2":"value2", ... "key5":"value5"}
     *
     * @var string
     */
    public $tags;

    /**
     * @description Specifies whether to create an ECS instance on a dedicated host. Valid values:
     *
     *   default: does not create an ECS instance on a dedicated host.
     *   host: creates an ECS instance on a dedicated host. If you do not specify DedicatedHostId, Alibaba Cloud selects a dedicated host for the ECS instance.
     *
     * Default value: default
     * @example default
     *
     * @var string
     */
    public $tenancy;

    /**
     * @description The user data of the ECS instance. The data must be encoded in Base64. The maximum size of the data before encoding is 16 KB.
     *
     * @example echo hello ecs!
     *
     * @var string
     */
    public $userData;

    /**
     * @description The zone ID of the ECS instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'imageOptions'                => 'ImageOptions',
        'privatePoolOptions'          => 'PrivatePoolOptions',
        'systemDisk'                  => 'SystemDisk',
        'affinity'                    => 'Affinity',
        'clientToken'                 => 'ClientToken',
        'cpu'                         => 'Cpu',
        'creditSpecification'         => 'CreditSpecification',
        'customPriorities'            => 'CustomPriorities',
        'dataDisks'                   => 'DataDisks',
        'dedicatedHostId'             => 'DedicatedHostId',
        'deletionProtection'          => 'DeletionProtection',
        'deploymentSetId'             => 'DeploymentSetId',
        'hostName'                    => 'HostName',
        'hpcClusterId'                => 'HpcClusterId',
        'imageFamily'                 => 'ImageFamily',
        'imageId'                     => 'ImageId',
        'imageName'                   => 'ImageName',
        'instanceDescription'         => 'InstanceDescription',
        'instanceName'                => 'InstanceName',
        'instancePatternInfos'        => 'InstancePatternInfos',
        'instanceType'                => 'InstanceType',
        'instanceTypeOverrides'       => 'InstanceTypeOverrides',
        'instanceTypes'               => 'InstanceTypes',
        'internetChargeType'          => 'InternetChargeType',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'ioOptimized'                 => 'IoOptimized',
        'ipv6AddressCount'            => 'Ipv6AddressCount',
        'keyPairName'                 => 'KeyPairName',
        'loadBalancerWeight'          => 'LoadBalancerWeight',
        'memory'                      => 'Memory',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'password'                    => 'Password',
        'passwordInherit'             => 'PasswordInherit',
        'ramRoleName'                 => 'RamRoleName',
        'resourceGroupId'             => 'ResourceGroupId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'scalingConfigurationName'    => 'ScalingConfigurationName',
        'scalingGroupId'              => 'ScalingGroupId',
        'schedulerOptions'            => 'SchedulerOptions',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'spotDuration'                => 'SpotDuration',
        'spotInterruptionBehavior'    => 'SpotInterruptionBehavior',
        'spotPriceLimits'             => 'SpotPriceLimits',
        'spotStrategy'                => 'SpotStrategy',
        'storageSetId'                => 'StorageSetId',
        'storageSetPartitionNumber'   => 'StorageSetPartitionNumber',
        'systemDiskCategories'        => 'SystemDiskCategories',
        'tags'                        => 'Tags',
        'tenancy'                     => 'Tenancy',
        'userData'                    => 'UserData',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageOptions) {
            $res['ImageOptions'] = null !== $this->imageOptions ? $this->imageOptions->toMap() : null;
        }
        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->customPriorities) {
            $res['CustomPriorities'] = [];
            if (null !== $this->customPriorities && \is_array($this->customPriorities)) {
                $n = 0;
                foreach ($this->customPriorities as $item) {
                    $res['CustomPriorities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instancePatternInfos) {
            $res['InstancePatternInfos'] = [];
            if (null !== $this->instancePatternInfos && \is_array($this->instancePatternInfos)) {
                $n = 0;
                foreach ($this->instancePatternInfos as $item) {
                    $res['InstancePatternInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeOverrides) {
            $res['InstanceTypeOverrides'] = [];
            if (null !== $this->instanceTypeOverrides && \is_array($this->instanceTypeOverrides)) {
                $n = 0;
                foreach ($this->instanceTypeOverrides as $item) {
                    $res['InstanceTypeOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
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
        if (null !== $this->loadBalancerWeight) {
            $res['LoadBalancerWeight'] = $this->loadBalancerWeight;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingConfigurationName) {
            $res['ScalingConfigurationName'] = $this->scalingConfigurationName;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->schedulerOptions) {
            $res['SchedulerOptions'] = $this->schedulerOptions;
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
        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }
        if (null !== $this->spotPriceLimits) {
            $res['SpotPriceLimits'] = [];
            if (null !== $this->spotPriceLimits && \is_array($this->spotPriceLimits)) {
                $n = 0;
                foreach ($this->spotPriceLimits as $item) {
                    $res['SpotPriceLimits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }
        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
        }
        if (null !== $this->systemDiskCategories) {
            $res['SystemDiskCategories'] = $this->systemDiskCategories;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScalingConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageOptions'])) {
            $model->imageOptions = imageOptions::fromMap($map['ImageOptions']);
        }
        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['CustomPriorities'])) {
            if (!empty($map['CustomPriorities'])) {
                $model->customPriorities = [];
                $n                       = 0;
                foreach ($map['CustomPriorities'] as $item) {
                    $model->customPriorities[$n++] = null !== $item ? customPriorities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? dataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstancePatternInfos'])) {
            if (!empty($map['InstancePatternInfos'])) {
                $model->instancePatternInfos = [];
                $n                           = 0;
                foreach ($map['InstancePatternInfos'] as $item) {
                    $model->instancePatternInfos[$n++] = null !== $item ? instancePatternInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeOverrides'])) {
            if (!empty($map['InstanceTypeOverrides'])) {
                $model->instanceTypeOverrides = [];
                $n                            = 0;
                foreach ($map['InstanceTypeOverrides'] as $item) {
                    $model->instanceTypeOverrides[$n++] = null !== $item ? instanceTypeOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
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
        if (isset($map['LoadBalancerWeight'])) {
            $model->loadBalancerWeight = $map['LoadBalancerWeight'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingConfigurationName'])) {
            $model->scalingConfigurationName = $map['ScalingConfigurationName'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptions = $map['SchedulerOptions'];
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
        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }
        if (isset($map['SpotPriceLimits'])) {
            if (!empty($map['SpotPriceLimits'])) {
                $model->spotPriceLimits = [];
                $n                      = 0;
                foreach ($map['SpotPriceLimits'] as $item) {
                    $model->spotPriceLimits[$n++] = null !== $item ? spotPriceLimits::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }
        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }
        if (isset($map['SystemDiskCategories'])) {
            if (!empty($map['SystemDiskCategories'])) {
                $model->systemDiskCategories = $map['SystemDiskCategories'];
            }
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
