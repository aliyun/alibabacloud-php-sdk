<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\customPriorities;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\dataDisks;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\instancePatternInfos;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\networkInterfaces;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\schedulerOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\spotPriceLimits;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\tags;
use AlibabaCloud\Tea\Model;

class scalingConfigurations extends Model
{
    /**
     * @description Indicates whether the instance on the dedicated host is associated with the dedicated host. Valid values:
     *
     *   default: The instance is not associated with the dedicated host. If you start an instance that was stopped in Economical Mode and the original dedicated host has insufficient resources, the instance is automatically deployed to another dedicated host in the automatic deployment resource pool.
     *   host: The instance is associated with the dedicated host. If you start an instance that was stopped in Economical Mode, the instance remains on the original dedicated host. If the original dedicated host has insufficient resources, the instance cannot be started.
     *
     * @example default
     *
     * @var string
     */
    public $affinity;

    /**
     * @description The number of vCPUs.
     *
     * > You can specify CPU and memory specifications to determine the range of instance types only if the Scaling Policy parameter is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the scaling configuration was created.
     *
     * @example 2014-08-14T10:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The performance mode of the burstable instance. Valid values:
     *
     *   Standard: standard mode. For more information, see the "Standard mode" section in the [Burstable instances](~~59977~~) topic.
     *   Unlimited: unlimited mode. For more information, see the "Unlimited mode" section in the [Burstable instances](~~59977~~) topic.
     *
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
     * @description Details of the data disks.
     *
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @description The ID of the dedicated host on which the ECS instance is created. Preemptible instances cannot be created on dedicated hosts. If you specify the DedicatedHostId parameter, the SpotStrategy and SpotPriceLimit parameters are ignored.
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
     * @description The ID of the deployment set to which the Elastic Compute Service (ECS) instance belongs.
     *
     * @example ds-bp1frxuzdg87zh4p****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The hostname of the ECS instance.
     *
     * @example LocalHost
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the Elastic High Performance Computing (E-HPC) cluster to which the ECS instance belongs.
     *
     * @example hpc-clus****
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description The name of the image family. If you specify this parameter, the latest custom images that are available in the specified image family are returned. You can use the images to create instances. If the ImageId parameter is specified, you cannot specify the ImageFamily parameter.
     *
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The ID of the image that is used by Auto Scaling to create instances.
     *
     * @example centos6u5_64_20G_aliaegis_2014****.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image file.
     *
     * @example centos6u5_64_20G_aliaegis_2014****.vhd
     *
     * @var string
     */
    public $imageName;

    /**
     * @description ECS实例是否使用ecs-user用户登录。可能值：
     *
     * - false：否。
     * @example false
     *
     * @var bool
     */
    public $imageOptionsLoginAsNonRoot;

    /**
     * @description The source of the image. Valid values:
     *
     *   system: public images provided by Alibaba Cloud
     *   self: custom images that you create
     *   others: shared images from other Alibaba Cloud accounts or community images published by other Alibaba Cloud accounts
     *   marketplace: images that are available in Alibaba Cloud Marketplace
     *
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The description of the ECS instance.
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The generation of the ECS instance.
     *
     * @example ecs-3
     *
     * @var string
     */
    public $instanceGeneration;

    /**
     * @description The name of the ECS instance.
     *
     * @example instance****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Details of the intelligent configuration settings, which determines the range of instance types that meet the specified criteria.
     *
     * @var instancePatternInfos[]
     */
    public $instancePatternInfos;

    /**
     * @description The instance type of the ECS instance.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Details of the ECS instance types.
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   PayByBandwidth: You are charged for the maximum available bandwidth that is specified by the InternetMaxBandwidthOut parameter.
     *   PayByTraffic: You are charged for the actual data transfer. The InternetMaxBandwidthOut parameter specifies only the maximum available bandwidth.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s. Valid values: 1 to 200.
     *
     * @example 200
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values:
     *
     *   0 to 100 if you set the InternetChargeType parameter to PayByBandwidth. If you leave this parameter empty, this parameter is automatically set to 0.
     *   0 to 100 if you set the InternetChargeType parameter to PayByTraffic. If you leave this parameter empty, an error is reported.
     *
     * @example 0
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Indicates whether the instance is I/O optimized. Valid values:
     *
     *   none: The instance is not I/O optimized.
     *   optimized: The instance is I/O optimized.
     *
     * @example none
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The number of randomly generated IPv6 addresses that are allocated to the elastic network interface (ENI).
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The name of the key pair that is used to log on to the ECS instance.
     *
     * @example keypair****
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The status of the scaling configuration in the scaling group. Valid values:
     *
     *   Active: The scaling configuration is active in the scaling group. Auto Scaling uses the active scaling configuration to automatically create ECS instances.
     *   Inactive: The scaling configuration is inactive in the scaling group. Auto Scaling does not use inactive scaling configurations to automatically create ECS instances. Inactive scaling configurations are retained in the scaling group.
     *
     * @example Active
     *
     * @var string
     */
    public $lifecycleState;

    /**
     * @description The weight of the ECS instance as a backend server. Valid values: 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The memory size. Unit: GiB.
     *
     * > You can specify CPU and memory specifications to determine the range of instance types only if the Scaling Policy parameter is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     * @example 16
     *
     * @var int
     */
    public $memory;

    /**
     * @var networkInterfaces[]
     */
    public $networkInterfaces;

    /**
     * @description Indicates whether the password preconfigured in the image is used.
     *
     * @example true
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @var string
     */
    public $privatePoolOptions_id;

    /**
     * @var string
     */
    public $privatePoolOptions_matchCriteria;

    /**
     * @description The name of the RAM role that is associated with the ECS instance. The name is provided and maintained by Resource Access Management (RAM). You can call the ListRoles operation to query the available RAM roles.
     *
     * @example ramrole****
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the resource group to which the ECS instance belongs.
     *
     * @example rg-aekzn2ou7xo****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the scaling configuration.
     *
     * @example asc-bp1ezrfgoyn5kijl****
     *
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @description The name of the scaling configuration.
     *
     * @example scalingconfigura****
     *
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @description The ID of the scaling group to which the scaling configuration belongs.
     *
     * @example asg-bp17pelvl720x3v7****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @var schedulerOptions
     */
    public $schedulerOptions;

    /**
     * @description Indicates whether security hardening is enabled. Valid values:
     *
     *   Active: Security hardening is enabled. This value is available only to public images.
     *   Deactive: Security hardening is disabled. This value is available to all types of images.
     *
     * @example Active
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description The ID of the security group with which the ECS instance is associated. ECS instances that are associated with the same security group can access each other.
     *
     * @example sg-bp18kz60mefs****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of the security groups with which the ECS instance is associated. ECS instances that are associated with the same security group can access each other.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The protection period of the preemptible instance. Unit: hours.
     *
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The interruption mode of the preemptible instance.
     *
     * @example Terminate
     *
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @description Details of the preemptible instances.
     *
     * @var spotPriceLimits[]
     */
    public $spotPriceLimits;

    /**
     * @description The preemption policy that is applied to pay-as-you-go instances and preemptible instances. Valid values:
     *
     *   NoSpot: The instance is created as a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance that has a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is created as a preemptible instance for which the market price at the time of purchase is automatically used as the bid price.
     *
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
     * @description The ID of the automatic snapshot policy that is applied to the system disk.
     *
     * @example sp-bp12m37ccmxvbmi5****
     *
     * @var string
     */
    public $systemDiskAutoSnapshotPolicyId;

    /**
     * @description Indicates whether the burst feature is enabled for the system disk. Valid values:
     *
     *   true
     *   false
     *
     * > This parameter is available only if you set the SystemDisk.Category parameter to cloud_auto.
     * @example false
     *
     * @var bool
     */
    public $systemDiskBurstingEnabled;

    /**
     * @description The categories of the system disks. The values are sorted based on their priorities. The first value has the highest priority. If Auto Scaling cannot create instances by using the disk that has the highest priority, Auto Scaling creates instances by using the disk that has the next highest priority. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: ESSD
     *
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @description The category of the system disk. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   ephemeral_ssd: local standard SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *   cloud_auto: ESSD AutoPL disk
     *
     * @example cloud
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The description of the system disk.
     *
     * @example Test system disk.
     *
     * @var string
     */
    public $systemDiskDescription;

    /**
     * @description The algorithm that is used to encrypt the system disk. Valid values:
     *
     *   AES-256
     *   SM4-128
     *
     * @example AES-256
     *
     * @var string
     */
    public $systemDiskEncryptAlgorithm;

    /**
     * @description Indicates whether the system disk is encrypted. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $systemDiskEncrypted;

    /**
     * @description The ID of the KMS key that is used to encrypt the system disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $systemDiskKMSKeyId;

    /**
     * @description The name of the system disk.
     *
     * @example cloud_ssd_Test
     *
     * @var string
     */
    public $systemDiskName;

    /**
     * @description The performance level (PL) of the system disk of the ESSD category.
     *
     * @example PL1
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @description The provisioned IOPS for the system disk.
     *
     * > IOPS measures the number of read and write operations that an EBS device can process per second.
     * @example 100
     *
     * @var int
     */
    public $systemDiskProvisionedIops;

    /**
     * @description The size of the system disk. Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description Details of the tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Indicates whether the instance is created on a dedicated host. Valid values:
     *
     *   default: The instance is created on a non-dedicated host.
     *   host: The instance is created on a dedicated host. If you do not specify the DedicatedHostId parameter, Alibaba Cloud selects a dedicated host for the instance.
     *
     * Default value: default.
     * @example default
     *
     * @var string
     */
    public $tenancy;

    /**
     * @description The user data of the ECS instance.
     *
     * @example echo hello ecs!
     *
     * @var string
     */
    public $userData;

    /**
     * @description The weight of the instance type. The weight of an instance type indicates the capacity of an instance of the specified instance type in the scaling group. A higher weight indicates that a smaller number of instances of the specified instance type are required to meet the expected capacity requirement.
     *
     * @var int[]
     */
    public $weightedCapacities;

    /**
     * @description The zone ID of the ECS instance. You can call the DescribeZones operation to query the most recent zone list.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'affinity'                         => 'Affinity',
        'cpu'                              => 'Cpu',
        'creationTime'                     => 'CreationTime',
        'creditSpecification'              => 'CreditSpecification',
        'customPriorities'                 => 'CustomPriorities',
        'dataDisks'                        => 'DataDisks',
        'dedicatedHostId'                  => 'DedicatedHostId',
        'deletionProtection'               => 'DeletionProtection',
        'deploymentSetId'                  => 'DeploymentSetId',
        'hostName'                         => 'HostName',
        'hpcClusterId'                     => 'HpcClusterId',
        'imageFamily'                      => 'ImageFamily',
        'imageId'                          => 'ImageId',
        'imageName'                        => 'ImageName',
        'imageOptionsLoginAsNonRoot'       => 'ImageOptionsLoginAsNonRoot',
        'imageOwnerAlias'                  => 'ImageOwnerAlias',
        'instanceDescription'              => 'InstanceDescription',
        'instanceGeneration'               => 'InstanceGeneration',
        'instanceName'                     => 'InstanceName',
        'instancePatternInfos'             => 'InstancePatternInfos',
        'instanceType'                     => 'InstanceType',
        'instanceTypes'                    => 'InstanceTypes',
        'internetChargeType'               => 'InternetChargeType',
        'internetMaxBandwidthIn'           => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'          => 'InternetMaxBandwidthOut',
        'ioOptimized'                      => 'IoOptimized',
        'ipv6AddressCount'                 => 'Ipv6AddressCount',
        'keyPairName'                      => 'KeyPairName',
        'lifecycleState'                   => 'LifecycleState',
        'loadBalancerWeight'               => 'LoadBalancerWeight',
        'memory'                           => 'Memory',
        'networkInterfaces'                => 'NetworkInterfaces',
        'passwordInherit'                  => 'PasswordInherit',
        'privatePoolOptions_id'            => 'PrivatePoolOptions.Id',
        'privatePoolOptions_matchCriteria' => 'PrivatePoolOptions.MatchCriteria',
        'ramRoleName'                      => 'RamRoleName',
        'resourceGroupId'                  => 'ResourceGroupId',
        'scalingConfigurationId'           => 'ScalingConfigurationId',
        'scalingConfigurationName'         => 'ScalingConfigurationName',
        'scalingGroupId'                   => 'ScalingGroupId',
        'schedulerOptions'                 => 'SchedulerOptions',
        'securityEnhancementStrategy'      => 'SecurityEnhancementStrategy',
        'securityGroupId'                  => 'SecurityGroupId',
        'securityGroupIds'                 => 'SecurityGroupIds',
        'spotDuration'                     => 'SpotDuration',
        'spotInterruptionBehavior'         => 'SpotInterruptionBehavior',
        'spotPriceLimits'                  => 'SpotPriceLimits',
        'spotStrategy'                     => 'SpotStrategy',
        'storageSetId'                     => 'StorageSetId',
        'storageSetPartitionNumber'        => 'StorageSetPartitionNumber',
        'systemDiskAutoSnapshotPolicyId'   => 'SystemDiskAutoSnapshotPolicyId',
        'systemDiskBurstingEnabled'        => 'SystemDiskBurstingEnabled',
        'systemDiskCategories'             => 'SystemDiskCategories',
        'systemDiskCategory'               => 'SystemDiskCategory',
        'systemDiskDescription'            => 'SystemDiskDescription',
        'systemDiskEncryptAlgorithm'       => 'SystemDiskEncryptAlgorithm',
        'systemDiskEncrypted'              => 'SystemDiskEncrypted',
        'systemDiskKMSKeyId'               => 'SystemDiskKMSKeyId',
        'systemDiskName'                   => 'SystemDiskName',
        'systemDiskPerformanceLevel'       => 'SystemDiskPerformanceLevel',
        'systemDiskProvisionedIops'        => 'SystemDiskProvisionedIops',
        'systemDiskSize'                   => 'SystemDiskSize',
        'tags'                             => 'Tags',
        'tenancy'                          => 'Tenancy',
        'userData'                         => 'UserData',
        'weightedCapacities'               => 'WeightedCapacities',
        'zoneId'                           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (null !== $this->imageOptionsLoginAsNonRoot) {
            $res['ImageOptionsLoginAsNonRoot'] = $this->imageOptionsLoginAsNonRoot;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceGeneration) {
            $res['InstanceGeneration'] = $this->instanceGeneration;
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
        if (null !== $this->lifecycleState) {
            $res['LifecycleState'] = $this->lifecycleState;
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
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->privatePoolOptions_id) {
            $res['PrivatePoolOptions.Id'] = $this->privatePoolOptions_id;
        }
        if (null !== $this->privatePoolOptions_matchCriteria) {
            $res['PrivatePoolOptions.MatchCriteria'] = $this->privatePoolOptions_matchCriteria;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }
        if (null !== $this->scalingConfigurationName) {
            $res['ScalingConfigurationName'] = $this->scalingConfigurationName;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->schedulerOptions) {
            $res['SchedulerOptions'] = null !== $this->schedulerOptions ? $this->schedulerOptions->toMap() : null;
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
        if (null !== $this->systemDiskAutoSnapshotPolicyId) {
            $res['SystemDiskAutoSnapshotPolicyId'] = $this->systemDiskAutoSnapshotPolicyId;
        }
        if (null !== $this->systemDiskBurstingEnabled) {
            $res['SystemDiskBurstingEnabled'] = $this->systemDiskBurstingEnabled;
        }
        if (null !== $this->systemDiskCategories) {
            $res['SystemDiskCategories'] = $this->systemDiskCategories;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskDescription) {
            $res['SystemDiskDescription'] = $this->systemDiskDescription;
        }
        if (null !== $this->systemDiskEncryptAlgorithm) {
            $res['SystemDiskEncryptAlgorithm'] = $this->systemDiskEncryptAlgorithm;
        }
        if (null !== $this->systemDiskEncrypted) {
            $res['SystemDiskEncrypted'] = $this->systemDiskEncrypted;
        }
        if (null !== $this->systemDiskKMSKeyId) {
            $res['SystemDiskKMSKeyId'] = $this->systemDiskKMSKeyId;
        }
        if (null !== $this->systemDiskName) {
            $res['SystemDiskName'] = $this->systemDiskName;
        }
        if (null !== $this->systemDiskPerformanceLevel) {
            $res['SystemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }
        if (null !== $this->systemDiskProvisionedIops) {
            $res['SystemDiskProvisionedIops'] = $this->systemDiskProvisionedIops;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->weightedCapacities) {
            $res['WeightedCapacities'] = $this->weightedCapacities;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['ImageOptionsLoginAsNonRoot'])) {
            $model->imageOptionsLoginAsNonRoot = $map['ImageOptionsLoginAsNonRoot'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceGeneration'])) {
            $model->instanceGeneration = $map['InstanceGeneration'];
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
        if (isset($map['LifecycleState'])) {
            $model->lifecycleState = $map['LifecycleState'];
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
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['PrivatePoolOptions.Id'])) {
            $model->privatePoolOptions_id = $map['PrivatePoolOptions.Id'];
        }
        if (isset($map['PrivatePoolOptions.MatchCriteria'])) {
            $model->privatePoolOptions_matchCriteria = $map['PrivatePoolOptions.MatchCriteria'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }
        if (isset($map['ScalingConfigurationName'])) {
            $model->scalingConfigurationName = $map['ScalingConfigurationName'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptions = schedulerOptions::fromMap($map['SchedulerOptions']);
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
        if (isset($map['SystemDiskAutoSnapshotPolicyId'])) {
            $model->systemDiskAutoSnapshotPolicyId = $map['SystemDiskAutoSnapshotPolicyId'];
        }
        if (isset($map['SystemDiskBurstingEnabled'])) {
            $model->systemDiskBurstingEnabled = $map['SystemDiskBurstingEnabled'];
        }
        if (isset($map['SystemDiskCategories'])) {
            if (!empty($map['SystemDiskCategories'])) {
                $model->systemDiskCategories = $map['SystemDiskCategories'];
            }
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskDescription'])) {
            $model->systemDiskDescription = $map['SystemDiskDescription'];
        }
        if (isset($map['SystemDiskEncryptAlgorithm'])) {
            $model->systemDiskEncryptAlgorithm = $map['SystemDiskEncryptAlgorithm'];
        }
        if (isset($map['SystemDiskEncrypted'])) {
            $model->systemDiskEncrypted = $map['SystemDiskEncrypted'];
        }
        if (isset($map['SystemDiskKMSKeyId'])) {
            $model->systemDiskKMSKeyId = $map['SystemDiskKMSKeyId'];
        }
        if (isset($map['SystemDiskName'])) {
            $model->systemDiskName = $map['SystemDiskName'];
        }
        if (isset($map['SystemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['SystemDiskPerformanceLevel'];
        }
        if (isset($map['SystemDiskProvisionedIops'])) {
            $model->systemDiskProvisionedIops = $map['SystemDiskProvisionedIops'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['WeightedCapacities'])) {
            if (!empty($map['WeightedCapacities'])) {
                $model->weightedCapacities = $map['WeightedCapacities'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
