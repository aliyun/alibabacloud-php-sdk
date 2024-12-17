<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\customPriorities;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\dataDisks;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\imageOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\instancePatternInfos;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\instanceTypeOverrides;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\networkInterfaces;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\privatePoolOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\securityOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\spotPriceLimits;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class ModifyScalingConfigurationShrinkRequest extends Model
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
     * @description Specifies whether to associate the instance on a dedicated host with the dedicated host. Valid values:
     *
     *   default: does not associate the instance on the dedicated host with the dedicated host. If you restart an instance that was stopped in Economical Mode and the original dedicated host of the instance has insufficient resources, the instance is automatically deployed to another dedicated host in the automatic deployment resource pool.
     *   host: associates the instance on a dedicated host with the dedicated host. If you restart an instance that was stopped in Economical Mode, the instance remains on the original dedicated host. If the original dedicated host has insufficient resources, the instance cannot be started.
     *
     * @example default
     *
     * @var string
     */
    public $affinity;

    /**
     * @description The number of vCPUs.
     *
     * > You can specify CPU and Memory to determine the range of instance types only if you set Scaling Policy to Cost Optimization Policy and you do not specify an instance type in the scaling configuration.
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The performance mode of burstable instances. Valid values:
     *
     *   Standard: the standard mode. For more information, see the "Standard mode" section in the [Overview of burstable instances](https://help.aliyun.com/document_detail/59977.html) topic.
     *   Unlimited: the unlimited mode. For more information, see the "Unlimited mode" section in the [Overview of burstable instances](https://help.aliyun.com/document_detail/59977.html) topic.
     *
     * @example Standard
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description The priority of the custom ECS instance type + vSwitch combination.
     *
     * >  If you specify the priorities of only a part of custom ECS instance type + vSwitch combinations, Auto Scaling preferentially creates ECS instances by using the custom combinations that have the specified priorities. If the custom combinations that have the specified priorities do not provide sufficient resources, Auto Scaling creates ECS instances by using the custom combinations that do not have the specified priorities based on the specified orders of vSwitches and instance types.
     *
     *   Example: The specified order of vSwitches for your scaling group is vsw1 and vsw2, and the specified order of instance types in your scaling configuration is type1 and type 2. In addition, you use CustomPriorities to specify ["vsw2+type2", "vsw1+type2"]. In this example, the vsw2+type2 combination has the highest priority and the vsw2+type1 combination has the lowest priority. The vsw1+type2 combination has a higher priority than the vsw1+type1 combination.
     *
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
     * @description The ID of the dedicated host cluster.
     *
     * @example dc-zm04u8r3lohsq****
     *
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @description The ID of the dedicated host on which you want to create ECS instances. You cannot create preemptible instances on dedicated hosts. If you specify DedicatedHostId, SpotStrategy and SpotPriceLimit are ignored.
     *
     * You can call the DescribeDedicatedHosts operation to query the most recent list of dedicated host IDs.
     * @example dh-bp67acfmxazb4p****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description Specifies whether to enable the Release Protection feature for ECS instances. If you enable this feature, you cannot directly release the ECS instances in the ECS console or by calling the DeleteInstance operation. Valid values:
     *
     *   true: enables the Release Protection feature. In this case, you cannot directly release the ECS instances in the ECS console or by calling the DeleteInstance operation.
     *   false: disables the Release Protection feature. In this case, you can directly release the ECS instances in the ECS console or by calling the DeleteInstance operation.
     *
     * >  You can enable the Release Protection feature only for pay-as-you-go instances to prevent accidental instance deletion. The Release Protection feature does not affect normal scaling activities. An instance that meets the criteria of scale-in policies can be removed from a scaling group during a scale-in event, regardless of whether you enabled the Release Protection feature for the instance.
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The ID of the deployment set of the ECS instances that are created by using the scaling configuration.
     *
     * @example ds-bp13v7bjnj9gis****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The hostname of the ECS instance. The hostname cannot start or end with a period (.) or a hyphen (-). The hostname cannot contain consecutive periods (.) or hyphens (-). Naming conventions for different types of instances:
     *
     *   Windows instances: The hostname must be 2 to 15 characters in length, and can contain letters, digits, and hyphens (-). The hostname cannot contain periods (.) or contain only digits.
     *   Other instances, such as Linux instances: The hostname must be 2 to 64 characters in length. Separate a hostname into multiple segments with periods (.). Each segment can contain letters, digits, and hyphens (-).
     *
     * @example hos****
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the Elastic High Performance Computing (E-HPC) cluster to which the ECS instances belong.
     *
     * @example hpc-clusterid
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description Specifies whether to enable the access channel for instance metadata. Valid values:
     *
     *   enabled
     *   disabled
     *
     * >  For information about instance metadata, see [Obtain instance metadata](https://help.aliyun.com/document_detail/108460.html).
     * @example enabled
     *
     * @var string
     */
    public $httpEndpoint;

    /**
     * @description Specifies whether to forcibly use the security hardening mode (IMDSv2) to access instance metadata. Valid values:
     *
     *   optional: does not forcibly use the security hardening mode (IMDSv2).
     *   required: forcibly uses the security hardening mode (IMDSv2). If you set this parameter to required, you cannot access instance metadata in normal mode.
     *
     * >  For more information about instance metadata access modes, see [Access modes of instance metadata](https://help.aliyun.com/document_detail/108460.html).
     * @example optional
     *
     * @var string
     */
    public $httpTokens;

    /**
     * @description The name of the image family. If you specify this parameter, the latest custom images that are available in the specified image family are returned. Then, you can use the images to create instances. If you specify ImageId, you cannot specify ImageFamily.
     *
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The ID of the image that is used by Auto Scaling to automatically create ECS instances.
     *
     * > If the image that is specified in the scaling configuration contains system disks and data disks, the data that is stored in the data disks is cleared after you modify the image.
     * @example centos6u5_64_20G_aliaegis_2014****.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image. Each image name must be unique in a region. If you specify ImageId, ImageName is ignored.
     *
     * You cannot use ImageName to specify images from Alibaba Cloud Marketplace.
     * @example suse11sp3_64_20G_aliaegis_2015****.vhd
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The description of the ECS instance. The description must be 2 to 256 characters in length. The description can contain letters but cannot start with `http://` or `https://`.
     *
     * @example Test instance.
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The name of the Elastic Compute Service (ECS) instance that is automatically created by using the scaling configuration.
     *
     * @example inst****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The intelligent configuration settings, which determine the available instance types.
     *
     * @var instancePatternInfos[]
     */
    public $instancePatternInfos;

    /**
     * @description The instance types.
     *
     * @var instanceTypeOverrides[]
     */
    public $instanceTypeOverrides;

    /**
     * @description The instance type. If you specify InstanceTypes, InstanceType is ignored.
     *
     * Auto Scaling creates instances based on the priorities of instance types. If Auto Scaling cannot create instances by using the instance type that has the highest priority, Auto Scaling creates instances by using the instance type that has the next highest priority.
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth. You are charged for the bandwidth specified by InternetMaxBandwidthOut.
     *   PayByTraffic: pay-by-traffic. You are charged for the actual traffic generated. InternetMaxBandwidthOut specifies only the maximum available bandwidth.
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s. Valid values:
     *
     *   If the purchased outbound public bandwidth is less than or equal to 10 Mbit/s, the valid values of this parameter are 1 to 10. The default value is 10.
     *   If the purchased outbound public bandwidth is greater than 10 Mbit/s, the valid values of this parameter are 1 to the value of `InternetMaxBandwidthOut`. The default value is the value of `InternetMaxBandwidthOut`.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * Default value: 0.
     * @example 50
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Specifies whether to create I/O optimized instances from the scaling configuration. Valid values:
     *
     *   none: creates non-I/O optimized instances from the scaling configuration.
     *   optimized: creates I/O optimized instances from the scaling configuration.
     *
     * @example none
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
     * @description The name of the key pair that you can use to log on to an ECS instance.
     *
     *   Windows instances do not support this parameter.
     *   By default, the username and password authentication method is disabled for Linux instances.
     *
     * @example KeyPair_Name
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The weight of an ECS instance as a backend server. Valid values: 1 to 100.
     *
     * @example 50
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The memory size. Unit: GiB.
     *
     * > You can specify CPU and Memory to determine the range of instance types only if you set Scaling Policy to Cost Optimization Policy and you do not specify an instance type in the scaling configuration.
     * @example 16
     *
     * @var int
     */
    public $memory;

    /**
     * @description The ENIs.
     *
     * @var networkInterfaces[]
     */
    public $networkInterfaces;

    /**
     * @description Specifies whether to overwrite existing data. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $override;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password of the ECS instance. The password must be 8 to 30 characters in length and contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. The following special characters are supported:
     *
     * \\`()~!@#$%^&\\*-_+=|{}[]:;\\"<>,.?/
     *
     * >  We recommend that you use HTTPS to send requests if you specify Password to avoid password leakage.
     * @example 123abc****
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether to use the password that is preconfigured in the image. Before you use this parameter, make sure that a password is configured in the image.
     *
     * @example false
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description The name of the RAM role that you want to attach to the ECS instance. The name is provided and maintained by Resource Access Management (RAM). You can call the ListRoles operation to query the available RAM roles. You can call the CreateRole operation to create RAM roles.
     *
     * @example RamRoleTest
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the resource group to which the ECS instances belong.
     *
     * @example abcd1234abcd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The ID of the scaling configuration that you want to modify.
     *
     * This parameter is required.
     * @example asc-bp16har3jpj6fjbx****
     *
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @description The name of the scaling configuration. The name must be 2 to 64 characters in length, and can contain letters, digits, underscores (_), hyphens (-), and periods (.). The name must start with a letter or a digit.
     *
     * The name of the scaling configuration must be unique in a region. If you do not specify this parameter, the scaling configuration ID is used.
     * @example test-modify
     *
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @description The scheduler options.
     *
     * @example ["testManagedPrivateSpaceId****"]
     *
     * @var string
     */
    public $schedulerOptionsShrink;

    /**
     * @description The ID of the security group with which ECS instances are associated. The ECS instances that are associated with the same security group can access each other.
     *
     * @example sg-F876F****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of the security groups.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var securityOptions
     */
    public $securityOptions;

    /**
     * @description The protection period of preemptible instances. Unit: hours. Valid values:
     *
     *   1: After a preemptible instance is created, Alibaba Cloud ensures that the instance is not automatically released within 1 hour. After the 1-hour protection period ends, Alibaba Cloud compares the bidding price with the market price and checks the resource inventory to determine whether to release the instance.
     *   0: After a preemptible instance is created, Alibaba Cloud does not ensure that the instance is not automatically released within 1 hour. Alibaba Cloud compares the biding price with the market price and checks the resource inventory to determine whether to release the instance.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The interruption mode of the preemptible instance. Default value: Terminate. Set the value to Terminate. This value specifies that the preemptible instance is to be released.
     *
     * @example Terminate
     *
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @description The preemptible instance types.
     *
     * @var spotPriceLimits[]
     */
    public $spotPriceLimits;

    /**
     * @description The preemption policy of pay-as-you-go instances. Valid values:
     *
     *   NoSpot: The instances are created as regular pay-as-you-go instances.
     *   SpotWithPriceLimit: The instances are preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instances are preemptible instances for which the market price at the time of purchase is automatically used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @example ss-bp67acfmxazb4p****
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @example 2
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description The categories of the system disks. If Auto Scaling cannot create disks by using the disk category of the highest priority, Auto Scaling creates disks by using the disk category of the next highest priority. Valid values:
     *
     *   cloud: basic disk.
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: standard SSD.
     *   cloud_essd: ESSD.
     *
     * >  If you specify this parameter, you cannot specify `SystemDisk.Category`.
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @description The tags of the ECS instance. Specify the tags as key-value pairs. You can specify up to 20 tags. When you specify tag keys and tag values, take note of the following items:
     *
     *   A tag key can be up to 64 characters in length. The key cannot start with `acs:` or `aliyun`, and cannot contain `http://` or `https://`. The tag key cannot be an empty string.
     *   A tag value can be up to 128 characters in length. The value cannot start with `acs:` or `aliyun`, and cannot contain `http://` or `https://`. The tag value can be an empty string.
     *
     * @example {"key1":"value1","key2":"value2", ... "key5":"value5"}
     *
     * @var string
     */
    public $tags;

    /**
     * @description Specifies whether to create ECS instances on dedicated hosts. Valid values:
     *
     *   default: creates ECS instances on non-dedicated hosts.
     *   host: creates ECS instances on dedicated hosts. If you do not specify DedicatedHostId, the system randomly selects a dedicated host for an ECS instance.
     *
     * @example default
     *
     * @var string
     */
    public $tenancy;

    /**
     * @description The user data of the Elastic Compute Service (ECS) instance. The user data must be encoded in Base64 format. The size of raw data before Base64 encoding cannot exceed 32 KB.
     *
     * @example echo hello ecs!
     *
     * @var string
     */
    public $userData;

    /**
     * @description The zone ID of the ECS instances that are created by using the scaling configuration.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'imageOptions'              => 'ImageOptions',
        'privatePoolOptions'        => 'PrivatePoolOptions',
        'systemDisk'                => 'SystemDisk',
        'affinity'                  => 'Affinity',
        'cpu'                       => 'Cpu',
        'creditSpecification'       => 'CreditSpecification',
        'customPriorities'          => 'CustomPriorities',
        'dataDisks'                 => 'DataDisks',
        'dedicatedHostClusterId'    => 'DedicatedHostClusterId',
        'dedicatedHostId'           => 'DedicatedHostId',
        'deletionProtection'        => 'DeletionProtection',
        'deploymentSetId'           => 'DeploymentSetId',
        'hostName'                  => 'HostName',
        'hpcClusterId'              => 'HpcClusterId',
        'httpEndpoint'              => 'HttpEndpoint',
        'httpTokens'                => 'HttpTokens',
        'imageFamily'               => 'ImageFamily',
        'imageId'                   => 'ImageId',
        'imageName'                 => 'ImageName',
        'instanceDescription'       => 'InstanceDescription',
        'instanceName'              => 'InstanceName',
        'instancePatternInfos'      => 'InstancePatternInfos',
        'instanceTypeOverrides'     => 'InstanceTypeOverrides',
        'instanceTypes'             => 'InstanceTypes',
        'internetChargeType'        => 'InternetChargeType',
        'internetMaxBandwidthIn'    => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'   => 'InternetMaxBandwidthOut',
        'ioOptimized'               => 'IoOptimized',
        'ipv6AddressCount'          => 'Ipv6AddressCount',
        'keyPairName'               => 'KeyPairName',
        'loadBalancerWeight'        => 'LoadBalancerWeight',
        'memory'                    => 'Memory',
        'networkInterfaces'         => 'NetworkInterfaces',
        'override'                  => 'Override',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'password'                  => 'Password',
        'passwordInherit'           => 'PasswordInherit',
        'ramRoleName'               => 'RamRoleName',
        'resourceGroupId'           => 'ResourceGroupId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'scalingConfigurationId'    => 'ScalingConfigurationId',
        'scalingConfigurationName'  => 'ScalingConfigurationName',
        'schedulerOptionsShrink'    => 'SchedulerOptions',
        'securityGroupId'           => 'SecurityGroupId',
        'securityGroupIds'          => 'SecurityGroupIds',
        'securityOptions'           => 'SecurityOptions',
        'spotDuration'              => 'SpotDuration',
        'spotInterruptionBehavior'  => 'SpotInterruptionBehavior',
        'spotPriceLimits'           => 'SpotPriceLimits',
        'spotStrategy'              => 'SpotStrategy',
        'storageSetId'              => 'StorageSetId',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'systemDiskCategories'      => 'SystemDiskCategories',
        'tags'                      => 'Tags',
        'tenancy'                   => 'Tenancy',
        'userData'                  => 'UserData',
        'zoneId'                    => 'ZoneId',
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
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
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
        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }
        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
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
        if (null !== $this->networkInterfaces) {
            $res['NetworkInterfaces'] = [];
            if (null !== $this->networkInterfaces && \is_array($this->networkInterfaces)) {
                $n = 0;
                foreach ($this->networkInterfaces as $item) {
                    $res['NetworkInterfaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->override) {
            $res['Override'] = $this->override;
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
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }
        if (null !== $this->scalingConfigurationName) {
            $res['ScalingConfigurationName'] = $this->scalingConfigurationName;
        }
        if (null !== $this->schedulerOptionsShrink) {
            $res['SchedulerOptions'] = $this->schedulerOptionsShrink;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->securityOptions) {
            $res['SecurityOptions'] = null !== $this->securityOptions ? $this->securityOptions->toMap() : null;
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
     * @return ModifyScalingConfigurationShrinkRequest
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
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
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
        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }
        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
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
        if (isset($map['NetworkInterfaces'])) {
            if (!empty($map['NetworkInterfaces'])) {
                $model->networkInterfaces = [];
                $n                        = 0;
                foreach ($map['NetworkInterfaces'] as $item) {
                    $model->networkInterfaces[$n++] = null !== $item ? networkInterfaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Override'])) {
            $model->override = $map['Override'];
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
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }
        if (isset($map['ScalingConfigurationName'])) {
            $model->scalingConfigurationName = $map['ScalingConfigurationName'];
        }
        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptionsShrink = $map['SchedulerOptions'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['SecurityOptions'])) {
            $model->securityOptions = securityOptions::fromMap($map['SecurityOptions']);
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
