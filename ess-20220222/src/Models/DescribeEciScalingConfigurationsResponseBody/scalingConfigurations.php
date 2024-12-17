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
     * @description The Container Registry Enterprise Edition instances.
     *
     * @var acrRegistryInfos[]
     */
    public $acrRegistryInfos;

    /**
     * @description The validity period of the scaling configuration. Unit: seconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $activeDeadlineSeconds;

    /**
     * @description Indicates whether elastic IP addresses (EIPs) are automatically created and bound to elastic container instances.
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
     * @description The name series of elastic container instances.
     *
     * @example test
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @description The containers in an elastic container instance.
     *
     * @var containers[]
     */
    public $containers;

    /**
     * @description Indicates whether the Cost Optimization feature is enabled. Valid values:
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
     * @description The number of vCPUs per elastic container instance.
     *
     * @example 2.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The number of physical CPU cores. This parameter can be specified for only specific instance types. For more information, see [Specify CPU options](https://help.aliyun.com/document_detail/197781.html).
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsCore;

    /**
     * @description The number of threads per core. This parameter can be specified for only specific instance types. A value of 1 indicates that Hyper-Threading is disabled. For more information, see [Specify CPU options](https://help.aliyun.com/document_detail/197781.html).
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsThreadsPerCore;

    /**
     * @description The time at which the scaling configuration was created.
     *
     * @example 2014-08-14T10:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The bucket that stores the data cache.
     *
     * @example default
     *
     * @var string
     */
    public $dataCacheBucket;

    /**
     * @description Indicates whether the Performance Burst feature is enabled for the ESSD AutoPL disk that stores the data cache. Valid values:
     *
     *   true
     *   false
     *
     * >  For more information about ESSD AutoPL disks, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     * @example false
     *
     * @var bool
     */
    public $dataCacheBurstingEnabled;

    /**
     * @description The performance level (PL) of the cloud disk that stores the data cache. We recommend that you use enterprise SSDs (ESSDs). Valid values:
     *
     *   PL0: An ESSD can provide up to 10,000 random read/write IOPS.
     *   PL1: An ESSD can provide up to 50,000 random read/write IOPS.
     *   PL2: An ESSD can provide up to 100,000 random read/write IOPS.
     *   PL3: An ESSD can provide up to 1,000,000 random read/write IOPS.
     *
     * >  For more information about ESSDs, see [ESSDs](https://help.aliyun.com/document_detail/122389.html).
     * @example PL1
     *
     * @var string
     */
    public $dataCachePL;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk that stores the data cache. Valid values: 0 to min{50,000, 1000 x *Capacity - Baseline IOPS}. Baseline IOPS = min{1,800 + 50* x Capacity, 50,000}.
     *
     * >  For more information about ESSD AutoPL disks, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     * @example 40000
     *
     * @var int
     */
    public $dataCacheProvisionedIops;

    /**
     * @description >  This parameter is not available for use.
     *
     * @example This is an example.
     *
     * @var string
     */
    public $description;

    /**
     * @description The IP addresses of the Domain Name Service (DNS) server.
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
     * @description The search domains of the DNS servers.
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
     * @description The maximum outbound public bandwidth. Unit: bit/s.
     *
     * @example 1024000
     *
     * @var int
     */
    public $egressBandwidth;

    /**
     * @description The EIP bandwidth. Default value: 5. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description The capacity of the ephemeral storage. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @description The version of the GPU driver.
     *
     * @example tesla=470.82.01
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The hostnames and IP addresses for a container that are added to the hosts file of the elastic container instance.
     *
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @description The hostname series.
     *
     * @example [\\"hehe.com\\", \\"haha.com\\"]
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
     * @description The ID of the image cache.
     *
     * @example imc-2zebxkiifuyzzlhl****
     *
     * @var string
     */
    public $imageSnapshotId;

    /**
     * @description The maximum inbound public bandwidth. Unit: bit/s.
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
     * @description The level of the instance family, which is used to filter the available instance types that meet the specified requirements. This parameter takes effect only if `CostOptimization` is set to true. Valid values:
     *
     *   EntryLevel: entry level (shared instance types). Instance types of this level are the most cost-effective but may not provide stable computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low. For more information, see [Shared instance families](https://help.aliyun.com/document_detail/108489.html).
     *   EnterpriseLevel: enterprise level. Instance types of this level provide stable performance and dedicated resources, and are suitable for business scenarios that require high stability. For more information, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *   CreditEntryLevel: credit-based entry level (burstable instance types). CPU credits are used to ensure computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see [Overview of burstable instances](https://help.aliyun.com/document_detail/59977.html).
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The specified ECS instance types. You can specify up to five instance types.
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
     * @description The status of the scaling configuration in the scaling group. Valid values:
     *
     *   Active: The scaling configuration is active in the scaling group. Auto Scaling uses the scaling configuration that is in the Active state to create instances during scale-out events.
     *   Inactive: The scaling configuration is inactive in the scaling group. Scaling configurations that are in the Inactive state are still contained in the scaling group, but Auto Scaling does not use the inactive scaling configurations to create instances during scale-out events.
     *
     * @example Active
     *
     * @var string
     */
    public $lifecycleState;

    /**
     * @description The load balancing weight of each elastic container instance as a backend server. Valid values: 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The memory size.
     *
     * >  You can specify CPU and Memory to define instance types only if you set Scaling Policy to Cost Optimization and no instance type is specified in the scaling configuration.
     * @example 16
     *
     * @var float
     */
    public $memory;

    /**
     * @description The endpoints of the Network Time Protocol (NTP) server.
     *
     * @var string[]
     */
    public $ntpServers;

    /**
     * @description The Resource Access Management (RAM) role of elastic container instances. Elastic container instances and Elastic Compute Service (ECS) instances can share the same RAM role. For more information, see [Use an instance RAM role by calling API operations](https://help.aliyun.com/document_detail/61178.html).
     *
     * @example ram:PassRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID of elastic container instances.
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
     * @description The restart policy of elastic container instances. Valid values:
     *
     *   Never: Elastic container instances are never restarted.
     *   Always: Elastic container instances are always restarted.
     *   OnFailure: Elastic container instances are restarted upon failures.
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
     * @description The ID of the scaling group to which the scaling configuration belongs.
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
     * @description The ID of the security group with which elastic container instances are associated. Elastic container instances that are associated with the same security group can communicate with each other.
     *
     * @example sg-bp18kz60mefs****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description >  This parameter is not available for use.
     *
     * @example False
     *
     * @var bool
     */
    public $slsEnable;

    /**
     * @description The maximum hourly price for preemptible elastic container instances.
     *
     * This parameter is returned only if you set SpotStrategy to SpotWithPriceLimit.
     * @example 0.025
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The bidding policy for elastic container instances. Valid values:
     *
     *   NoSpot: The instances are created as regular pay-as-you-go instances.
     *   SpotWithPriceLimit: The instances are created as preemptible instances with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instances are created as preemptible instances for which the market price at the time of purchase is automatically used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The tags of elastic container instances. Tags are specified in the key-value format.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The buffer time during which a program handles operations before the program stops.
     *
     * @example 60
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description The volumes.
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
        'gpuDriverVersion'              => 'GpuDriverVersion',
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
        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
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
        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
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
