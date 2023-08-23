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
     * @description The ID of the Container Registry Enterprise Edition instance.
     *
     * @var acrRegistryInfos[]
     */
    public $acrRegistryInfos;

    /**
     * @description Indicates whether an elastic IP address (EIP) is automatically created, and then bound to the elastic container instance.
     *
     * @example 1000
     *
     * @var int
     */
    public $activeDeadlineSeconds;

    /**
     * @description The size of the temporary storage space. Unit: GiB.
     *
     * @example true
     *
     * @var bool
     */
    public $autoCreateEip;

    /**
     * @description The name of the elastic container instance.
     *
     * @example false
     *
     * @var bool
     */
    public $autoMatchImageCache;

    /**
     * @description The number of physical CPU cores. This parameter can be specified for only some instance types. For more information, see [Specify custom CPU options](~~197781~~).
     *
     * @example test
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @description The path to which the system sends an HTTP GET request for a probe.
     *
     * @var containers[]
     */
    public $containers;

    /**
     * @description auditing
     *
     * @example false
     *
     * @var bool
     */
    public $costOptimization;

    /**
     * @description The ID of the resource group.
     *
     * @example 2.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The containers in the elastic container instance.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsCore;

    /**
     * @description The weight of the elastic container instance as a backend server. Valid values: 1 to 100.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsThreadsPerCore;

    /**
     * @description The ID of the security group with which the elastic container instance is associated. Elastic container instances that are associated with the same security group can access each other.
     *
     * @example 2014-08-14T10:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the image cache snapshot.
     *
     * @example This is an example.
     *
     * @var string
     */
    public $description;

    /**
     * @description The DNS lookup domains.
     *
     * @var string[]
     */
    public $dnsConfigNameServers;

    /**
     * @description The variable name of the option.
     *
     * @var dnsConfigOptions[]
     */
    public $dnsConfigOptions;

    /**
     * @description The domain names of the Network Time Protocol (NTP) servers.
     *
     * @var string[]
     */
    public $dnsConfigSearches;

    /**
     * @description The maximum outbound bandwidth. Unit: bytes.
     *
     * @example Default
     *
     * @var string
     */
    public $dnsPolicy;

    /**
     * @description The name of the instance RAM role. You can use an instance RAM role to access both elastic container instances and Elastic Compute Service (ECS) instances. For more information, see [Use the instance RAM role by calling APIs](~~61178~~).
     *
     * @example 1024000
     *
     * @var int
     */
    public $egressBandwidth;

    /**
     * @description The size of the memory.
     *
     * > You can specify CPU and memory specifications to determine the range of instance types only if the Scaling Policy parameter is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     * @example 5
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description > This parameter is unavailable.
     *
     * @example 20
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @description The IP address that is added.
     *
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @description The region ID of the elastic container instance.
     *
     * @example [\"hehe.com\", \"haha.com\"]
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The password that is used to access the image repository.
     *
     * @var imageRegistryCredentials[]
     */
    public $imageRegistryCredentials;

    /**
     * @description The restart policy of the elastic container instance. Valid values:
     *
     *   Never: never restarts the elastic container instance.
     *   Always: always restarts the elastic container instance.
     *   OnFailure: restarts the elastic container instance upon failures.
     *
     * @example imc-2zebxkiifuyzzlhl****
     *
     * @var string
     */
    public $imageSnapshotId;

    /**
     * @description The buffer time in which the program handles operations before the program stops.
     *
     * @example 1024000
     *
     * @var int
     */
    public $ingressBandwidth;

    /**
     * @description Indicates whether the root file system is read-only. The only valid value is true.
     *
     * @var initContainers[]
     */
    public $initContainers;

    /**
     * @description 5292
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The bandwidth of the EIP. Default value: 5 Mbit/s.
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The instance family level, which is used to filter the range of instance types that meet the requirements. This parameter takes effect when the `CostOptimization` parameter is set to true. Valid values:
     *
     *   EntryLevel: shared instance type. Instances of this level are the most cost-effective but may not provide stable computing performance in a consistent manner. Instances of this level are suitable for business scenarios in which the CPU utilization is low. For more information, see [Shared instance families](~~108489~~).
     *   EnterpriseLevel: Instances of this level provide stable performance and dedicated resources, and are suitable for business scenarios that require high stability. For more information, see [Instance family](~~25378~~).
     *   CreditEntryLevel: This value is valid only for burstable instances. CPU credits are used to ensure computing performance. Instances of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see [Overview](~~59977~~) of burstable instances.
     *
     * @example Active
     *
     * @var string
     */
    public $lifecycleState;

    /**
     * @description The hostname.
     *
     * @example 1
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The maximum hourly price for the preemptible instance.
     *
     * This parameter is returned only if you set the SpotStrategy parameter to SpotWithPriceLimit.
     * @example 16
     *
     * @var float
     */
    public $memory;

    /**
     * @description The state of the scaling configuration in the scaling group. Valid values:
     *
     *   Active: The scaling configuration is active in the scaling group. Auto Scaling uses active scaling configurations to automatically create ECS instances.
     *   Inactive: The scaling configuration is inactive in the scaling group. Auto Scaling does not use inactive scaling configurations to automatically create ECS instances. Inactive scaling configurations are retained in the scaling group.
     *
     * @var string[]
     */
    public $ntpServers;

    /**
     * @description Indicates whether the image cache is automatically matched. Default value: false.
     *
     * @example ram:PassRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The number of vCPUs of the elastic container instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the scaling configuration.
     *
     * @example rg-8db03793gfrz****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The maximum inbound bandwidth. Unit: bit/s.
     *
     * @example Never
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description > This parameter is unavailable.
     *
     * @example asc-bp1ezrfgoyn5kijl****
     *
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @description The validity period. Unit: seconds.
     *
     * @example scalingconfi****
     *
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @description The number of IPv6 addresses.
     *
     * @example asg-bp17pelvl720x3v7****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The name of the security context in which the elastic container instance runs.
     *
     * @var securityContextSysCtls[]
     */
    public $securityContextSysCtls;

    /**
     * @description The preemption policy of the instance. Valid values:
     *
     *   NoSpot: The instance is created as a regular pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is created as a preemptible instance for which the market price at the time of purchase is automatically used as the bid price.
     *
     * @example sg-bp18kz60mefs****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The containers in the elastic container instance.
     *
     * @example False
     *
     * @var bool
     */
    public $slsEnable;

    /**
     * @description The number of threads per core. This parameter can be specified for only some instance types. If you set this parameter to 1, Hyper-Threading is disabled. For more information, see [Specify custom CPU options](~~197781~~).
     *
     * @example 0.025
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The scaling group ID of the scaling configuration.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The key of the tag.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The Domain Name System (DNS) policy.
     *
     * @example 60
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description The type of the volume. Valid values:
     *
     *   EmptyDirVolume
     *   NFSVolume
     *   ConfigFileVolume
     *   FlexVolume
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
