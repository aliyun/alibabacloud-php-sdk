<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\acrRegistryInfos;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\dnsConfigOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\hostAliases;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\imageRegistryCredentials;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\initContainers;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\securityContextSysCtls;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\tags;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\volumes;
use AlibabaCloud\Tea\Model;

class scalingConfigurations extends Model
{
    /**
     * @description Details of the Container Registry Enterprise Edition instances.
     *
     * @var acrRegistryInfos[]
     */
    public $acrRegistryInfos;

    /**
     * @description The validity period. Unit: seconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $activeDeadlineSeconds;

    /**
     * @description Indicates whether an elastic IP address (EIP) is automatically created, and then bound to the elastic container instance.
     *
     * @example true
     *
     * @var bool
     */
    public $autoCreateEip;

    /**
     * @description Indicates whether the image cache is automatically matched. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $autoMatchImageCache;

    /**
     * @description The name of the elastic container instance.
     *
     * @example test
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @description The containers in the elastic container instance.
     *
     * @var containers[]
     */
    public $containers;

    /**
     * @description Indicates whether the cost optimization feature is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $costOptimization;

    /**
     * @description The number of vCPUs of the elastic container instance.
     *
     * @example 2.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The number of physical CPU cores. This parameter can be specified for only some instance types. For more information, see [Specify custom CPU options](~~197781~~).
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsCore;

    /**
     * @description The number of threads per core. This parameter can be specified for only some instance types. If you set this parameter to 1, Hyper-Threading is disabled. For more information, see [Specify custom CPU options](~~197781~~).
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsThreadsPerCore;

    /**
     * @description The time when the scaling configuration was created.
     *
     * @example 2014-08-14T10:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description 数据缓存Bucket。
     *
     * @example default
     *
     * @var string
     */
    public $dataCacheBucket;

    /**
     * @description 数据缓存使用ESSD AutoPL云盘时，是否开启Burst（性能突发）。可能值：
     *
     * >关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。
     * @example false
     *
     * @var bool
     */
    public $dataCacheBurstingEnabled;

    /**
     * @description 数据缓存使用的云盘的性能等级。建议优先使用ESSD云盘，该云盘的性能等级的可能值：
     *
     * >关于ESSD云盘的更多信息，请参见[ESSD云盘](~~122389~~)。
     * @example PL1
     *
     * @var string
     */
    public $dataCachePL;

    /**
     * @description 数据缓存使用ESSD AutoPL云盘时，ESSD AutoPL云盘预配置的读写IOPS。可能值：0~min{50000, 1000*容量-基准性能}，其中，基准性能=min{1800+50*容量, 50000}。
     *
     * >关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。
     * @example 40000
     *
     * @var int
     */
    public $dataCacheProvisionedIops;

    /**
     * @description > This parameter is unavailable.
     *
     * @example This is an example.
     *
     * @var string
     */
    public $description;

    /**
     * @description The IP addresses of the DNS servers.
     *
     * @var string[]
     */
    public $dnsConfigNameServers;

    /**
     * @description The options. Each option is a name-value pair. The value in the name-value pair is optional.
     *
     * @var dnsConfigOptions[]
     */
    public $dnsConfigOptions;

    /**
     * @description The DNS lookup domains.
     *
     * @var string[]
     */
    public $dnsConfigSearches;

    /**
     * @description The Domain Name System (DNS) policy.
     *
     * @example Default
     *
     * @var string
     */
    public $dnsPolicy;

    /**
     * @description The maximum outbound bandwidth. Unit: bytes.
     *
     * @example 1024000
     *
     * @var int
     */
    public $egressBandwidth;

    /**
     * @description The bandwidth of the EIP. Default value: 5 Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description The size of the temporary storage space. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @description The hostname aliases of a container.
     *
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @description The hostname.
     *
     * @example [\"hehe.com\", \"haha.com\"]
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The information about the image repository.
     *
     * @var imageRegistryCredentials[]
     */
    public $imageRegistryCredentials;

    /**
     * @description The ID of the image cache snapshot.
     *
     * @example imc-2zebxkiifuyzzlhl****
     *
     * @var string
     */
    public $imageSnapshotId;

    /**
     * @description The maximum inbound bandwidth. Unit: bit/s.
     *
     * @example 1024000
     *
     * @var int
     */
    public $ingressBandwidth;

    /**
     * @description The init containers.
     *
     * @var initContainers[]
     */
    public $initContainers;

    /**
     * @description The instance family level, which is used to filter the range of instance types that meet the requirements. This parameter takes effect when the `CostOptimization` parameter is set to true. Valid values:
     *
     *   EntryLevel: shared instance type. Instances of this level are the most cost-effective but may not provide stable computing performance in a consistent manner. Instances of this level are suitable for business scenarios in which the CPU utilization is low. For more information, see [Shared instance families](~~108489~~).
     *   EnterpriseLevel: Instances of this level provide stable performance and dedicated resources, and are suitable for business scenarios that require high stability. For more information, see [Instance family](~~25378~~).
     *   CreditEntryLevel: This value is valid only for burstable instances. CPU credits are used to ensure computing performance. Instances of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see [Overview](~~59977~~) of burstable instances.
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description 指定的ECS实例规格，支持多规格（最多支持5个）。
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The number of IPv6 addresses.
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The state of the scaling configuration in the scaling group. Valid values:
     *
     *   Active: The scaling configuration is active in the scaling group. Auto Scaling uses active scaling configurations to automatically create ECS instances.
     *   Inactive: The scaling configuration is inactive in the scaling group. Auto Scaling does not use inactive scaling configurations to automatically create ECS instances. Inactive scaling configurations are retained in the scaling group.
     *
     * @example Active
     *
     * @var string
     */
    public $lifecycleState;

    /**
     * @description The weight of the elastic container instance as a backend server. Valid values: 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The size of the memory.
     *
     * > You can specify CPU and memory specifications to determine the range of instance types only if the Scaling Policy parameter is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     * @example 16
     *
     * @var float
     */
    public $memory;

    /**
     * @description The domain names of the Network Time Protocol (NTP) servers.
     *
     * @var string[]
     */
    public $ntpServers;

    /**
     * @description The name of the instance RAM role. You can use an instance RAM role to access both elastic container instances and Elastic Compute Service (ECS) instances. For more information, see [Use the instance RAM role by calling APIs](~~61178~~).
     *
     * @example ram:PassRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID of the elastic container instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-8db03793gfrz****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The restart policy of the elastic container instance. Valid values:
     *
     *   Never: never restarts the elastic container instance.
     *   Always: always restarts the elastic container instance.
     *   OnFailure: restarts the elastic container instance upon failures.
     *
     * @example Never
     *
     * @var string
     */
    public $restartPolicy;

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
     * @example scalingconfi****
     *
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @description The scaling group ID of the scaling configuration.
     *
     * @example asg-bp17pelvl720x3v7****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The system information of the security context in which the elastic container instance runs.
     *
     * @var securityContextSysCtls[]
     */
    public $securityContextSysCtls;

    /**
     * @description The ID of the security group with which the elastic container instance is associated. Elastic container instances that are associated with the same security group can access each other.
     *
     * @example sg-bp18kz60mefs****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description > This parameter is unavailable.
     *
     * @example False
     *
     * @var bool
     */
    public $slsEnable;

    /**
     * @description The maximum hourly price for the preemptible instance.
     *
     * This parameter is returned only if you set the SpotStrategy parameter to SpotWithPriceLimit.
     * @example 0.025
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The preemption policy of the instance. Valid values:
     *
     *   NoSpot: The instance is created as a regular pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is created as a preemptible instance for which the market price at the time of purchase is automatically used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The tags of the elastic container instance. The tags are specified in the key-value pair format.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The buffer time in which the program handles operations before the program stops.
     *
     * @example 60
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description Details of the volumes.
     *
     * @var volumes[]
     */
    public $volumes;
    protected $_name = [
        'acrRegistryInfos'              => 'AcrRegistryInfos',
        'activeDeadlineSeconds'         => 'ActiveDeadlineSeconds',
        'autoCreateEip'                 => 'AutoCreateEip',
        'autoMatchImageCache'           => 'AutoMatchImageCache',
        'containerGroupName'            => 'ContainerGroupName',
        'containers'                    => 'Containers',
        'costOptimization'              => 'CostOptimization',
        'cpu'                           => 'Cpu',
        'cpuOptionsCore'                => 'CpuOptionsCore',
        'cpuOptionsThreadsPerCore'      => 'CpuOptionsThreadsPerCore',
        'creationTime'                  => 'CreationTime',
        'dataCacheBucket'               => 'DataCacheBucket',
        'dataCacheBurstingEnabled'      => 'DataCacheBurstingEnabled',
        'dataCachePL'                   => 'DataCachePL',
        'dataCacheProvisionedIops'      => 'DataCacheProvisionedIops',
        'description'                   => 'Description',
        'dnsConfigNameServers'          => 'DnsConfigNameServers',
        'dnsConfigOptions'              => 'DnsConfigOptions',
        'dnsConfigSearches'             => 'DnsConfigSearches',
        'dnsPolicy'                     => 'DnsPolicy',
        'egressBandwidth'               => 'EgressBandwidth',
        'eipBandwidth'                  => 'EipBandwidth',
        'ephemeralStorage'              => 'EphemeralStorage',
        'hostAliases'                   => 'HostAliases',
        'hostName'                      => 'HostName',
        'imageRegistryCredentials'      => 'ImageRegistryCredentials',
        'imageSnapshotId'               => 'ImageSnapshotId',
        'ingressBandwidth'              => 'IngressBandwidth',
        'initContainers'                => 'InitContainers',
        'instanceFamilyLevel'           => 'InstanceFamilyLevel',
        'instanceTypes'                 => 'InstanceTypes',
        'ipv6AddressCount'              => 'Ipv6AddressCount',
        'lifecycleState'                => 'LifecycleState',
        'loadBalancerWeight'            => 'LoadBalancerWeight',
        'memory'                        => 'Memory',
        'ntpServers'                    => 'NtpServers',
        'ramRoleName'                   => 'RamRoleName',
        'regionId'                      => 'RegionId',
        'resourceGroupId'               => 'ResourceGroupId',
        'restartPolicy'                 => 'RestartPolicy',
        'scalingConfigurationId'        => 'ScalingConfigurationId',
        'scalingConfigurationName'      => 'ScalingConfigurationName',
        'scalingGroupId'                => 'ScalingGroupId',
        'securityContextSysCtls'        => 'SecurityContextSysCtls',
        'securityGroupId'               => 'SecurityGroupId',
        'slsEnable'                     => 'SlsEnable',
        'spotPriceLimit'                => 'SpotPriceLimit',
        'spotStrategy'                  => 'SpotStrategy',
        'tags'                          => 'Tags',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'volumes'                       => 'Volumes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acrRegistryInfos) {
            $res['AcrRegistryInfos'] = [];
            if (null !== $this->acrRegistryInfos && \is_array($this->acrRegistryInfos)) {
                $n = 0;
                foreach ($this->acrRegistryInfos as $item) {
                    $res['AcrRegistryInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->activeDeadlineSeconds) {
            $res['ActiveDeadlineSeconds'] = $this->activeDeadlineSeconds;
        }
        if (null !== $this->autoCreateEip) {
            $res['AutoCreateEip'] = $this->autoCreateEip;
        }
        if (null !== $this->autoMatchImageCache) {
            $res['AutoMatchImageCache'] = $this->autoMatchImageCache;
        }
        if (null !== $this->containerGroupName) {
            $res['ContainerGroupName'] = $this->containerGroupName;
        }
        if (null !== $this->containers) {
            $res['Containers'] = [];
            if (null !== $this->containers && \is_array($this->containers)) {
                $n = 0;
                foreach ($this->containers as $item) {
                    $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->costOptimization) {
            $res['CostOptimization'] = $this->costOptimization;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->cpuOptionsCore) {
            $res['CpuOptionsCore'] = $this->cpuOptionsCore;
        }
        if (null !== $this->cpuOptionsThreadsPerCore) {
            $res['CpuOptionsThreadsPerCore'] = $this->cpuOptionsThreadsPerCore;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataCacheBucket) {
            $res['DataCacheBucket'] = $this->dataCacheBucket;
        }
        if (null !== $this->dataCacheBurstingEnabled) {
            $res['DataCacheBurstingEnabled'] = $this->dataCacheBurstingEnabled;
        }
        if (null !== $this->dataCachePL) {
            $res['DataCachePL'] = $this->dataCachePL;
        }
        if (null !== $this->dataCacheProvisionedIops) {
            $res['DataCacheProvisionedIops'] = $this->dataCacheProvisionedIops;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dnsConfigNameServers) {
            $res['DnsConfigNameServers'] = $this->dnsConfigNameServers;
        }
        if (null !== $this->dnsConfigOptions) {
            $res['DnsConfigOptions'] = [];
            if (null !== $this->dnsConfigOptions && \is_array($this->dnsConfigOptions)) {
                $n = 0;
                foreach ($this->dnsConfigOptions as $item) {
                    $res['DnsConfigOptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dnsConfigSearches) {
            $res['DnsConfigSearches'] = $this->dnsConfigSearches;
        }
        if (null !== $this->dnsPolicy) {
            $res['DnsPolicy'] = $this->dnsPolicy;
        }
        if (null !== $this->egressBandwidth) {
            $res['EgressBandwidth'] = $this->egressBandwidth;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }
        if (null !== $this->hostAliases) {
            $res['HostAliases'] = [];
            if (null !== $this->hostAliases && \is_array($this->hostAliases)) {
                $n = 0;
                foreach ($this->hostAliases as $item) {
                    $res['HostAliases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageRegistryCredentials) {
            $res['ImageRegistryCredentials'] = [];
            if (null !== $this->imageRegistryCredentials && \is_array($this->imageRegistryCredentials)) {
                $n = 0;
                foreach ($this->imageRegistryCredentials as $item) {
                    $res['ImageRegistryCredentials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageSnapshotId) {
            $res['ImageSnapshotId'] = $this->imageSnapshotId;
        }
        if (null !== $this->ingressBandwidth) {
            $res['IngressBandwidth'] = $this->ingressBandwidth;
        }
        if (null !== $this->initContainers) {
            $res['InitContainers'] = [];
            if (null !== $this->initContainers && \is_array($this->initContainers)) {
                $n = 0;
                foreach ($this->initContainers as $item) {
                    $res['InitContainers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
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
        if (null !== $this->ntpServers) {
            $res['NtpServers'] = $this->ntpServers;
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
        if (null !== $this->restartPolicy) {
            $res['RestartPolicy'] = $this->restartPolicy;
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
        if (null !== $this->securityContextSysCtls) {
            $res['SecurityContextSysCtls'] = [];
            if (null !== $this->securityContextSysCtls && \is_array($this->securityContextSysCtls)) {
                $n = 0;
                foreach ($this->securityContextSysCtls as $item) {
                    $res['SecurityContextSysCtls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->slsEnable) {
            $res['SlsEnable'] = $this->slsEnable;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
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
        if (null !== $this->terminationGracePeriodSeconds) {
            $res['TerminationGracePeriodSeconds'] = $this->terminationGracePeriodSeconds;
        }
        if (null !== $this->volumes) {
            $res['Volumes'] = [];
            if (null !== $this->volumes && \is_array($this->volumes)) {
                $n = 0;
                foreach ($this->volumes as $item) {
                    $res['Volumes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AcrRegistryInfos'])) {
            if (!empty($map['AcrRegistryInfos'])) {
                $model->acrRegistryInfos = [];
                $n                       = 0;
                foreach ($map['AcrRegistryInfos'] as $item) {
                    $model->acrRegistryInfos[$n++] = null !== $item ? acrRegistryInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ActiveDeadlineSeconds'])) {
            $model->activeDeadlineSeconds = $map['ActiveDeadlineSeconds'];
        }
        if (isset($map['AutoCreateEip'])) {
            $model->autoCreateEip = $map['AutoCreateEip'];
        }
        if (isset($map['AutoMatchImageCache'])) {
            $model->autoMatchImageCache = $map['AutoMatchImageCache'];
        }
        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n                 = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? containers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CostOptimization'])) {
            $model->costOptimization = $map['CostOptimization'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CpuOptionsCore'])) {
            $model->cpuOptionsCore = $map['CpuOptionsCore'];
        }
        if (isset($map['CpuOptionsThreadsPerCore'])) {
            $model->cpuOptionsThreadsPerCore = $map['CpuOptionsThreadsPerCore'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataCacheBucket'])) {
            $model->dataCacheBucket = $map['DataCacheBucket'];
        }
        if (isset($map['DataCacheBurstingEnabled'])) {
            $model->dataCacheBurstingEnabled = $map['DataCacheBurstingEnabled'];
        }
        if (isset($map['DataCachePL'])) {
            $model->dataCachePL = $map['DataCachePL'];
        }
        if (isset($map['DataCacheProvisionedIops'])) {
            $model->dataCacheProvisionedIops = $map['DataCacheProvisionedIops'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DnsConfigNameServers'])) {
            if (!empty($map['DnsConfigNameServers'])) {
                $model->dnsConfigNameServers = $map['DnsConfigNameServers'];
            }
        }
        if (isset($map['DnsConfigOptions'])) {
            if (!empty($map['DnsConfigOptions'])) {
                $model->dnsConfigOptions = [];
                $n                       = 0;
                foreach ($map['DnsConfigOptions'] as $item) {
                    $model->dnsConfigOptions[$n++] = null !== $item ? dnsConfigOptions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DnsConfigSearches'])) {
            if (!empty($map['DnsConfigSearches'])) {
                $model->dnsConfigSearches = $map['DnsConfigSearches'];
            }
        }
        if (isset($map['DnsPolicy'])) {
            $model->dnsPolicy = $map['DnsPolicy'];
        }
        if (isset($map['EgressBandwidth'])) {
            $model->egressBandwidth = $map['EgressBandwidth'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }
        if (isset($map['HostAliases'])) {
            if (!empty($map['HostAliases'])) {
                $model->hostAliases = [];
                $n                  = 0;
                foreach ($map['HostAliases'] as $item) {
                    $model->hostAliases[$n++] = null !== $item ? hostAliases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageRegistryCredentials'])) {
            if (!empty($map['ImageRegistryCredentials'])) {
                $model->imageRegistryCredentials = [];
                $n                               = 0;
                foreach ($map['ImageRegistryCredentials'] as $item) {
                    $model->imageRegistryCredentials[$n++] = null !== $item ? imageRegistryCredentials::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageSnapshotId'])) {
            $model->imageSnapshotId = $map['ImageSnapshotId'];
        }
        if (isset($map['IngressBandwidth'])) {
            $model->ingressBandwidth = $map['IngressBandwidth'];
        }
        if (isset($map['InitContainers'])) {
            if (!empty($map['InitContainers'])) {
                $model->initContainers = [];
                $n                     = 0;
                foreach ($map['InitContainers'] as $item) {
                    $model->initContainers[$n++] = null !== $item ? initContainers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
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
        if (isset($map['NtpServers'])) {
            if (!empty($map['NtpServers'])) {
                $model->ntpServers = $map['NtpServers'];
            }
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
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
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
        if (isset($map['SecurityContextSysCtls'])) {
            if (!empty($map['SecurityContextSysCtls'])) {
                $model->securityContextSysCtls = [];
                $n                             = 0;
                foreach ($map['SecurityContextSysCtls'] as $item) {
                    $model->securityContextSysCtls[$n++] = null !== $item ? securityContextSysCtls::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SlsEnable'])) {
            $model->slsEnable = $map['SlsEnable'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
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
        if (isset($map['TerminationGracePeriodSeconds'])) {
            $model->terminationGracePeriodSeconds = $map['TerminationGracePeriodSeconds'];
        }
        if (isset($map['Volumes'])) {
            if (!empty($map['Volumes'])) {
                $model->volumes = [];
                $n              = 0;
                foreach ($map['Volumes'] as $item) {
                    $model->volumes[$n++] = null !== $item ? volumes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
