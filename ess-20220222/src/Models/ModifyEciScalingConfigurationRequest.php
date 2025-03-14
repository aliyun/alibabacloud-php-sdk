<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\acrRegistryInfos;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\dnsConfigOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\hostAliases;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\imageRegistryCredentials;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\initContainers;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\securityContextSysCtls;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\tags;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\volumes;
use AlibabaCloud\Tea\Model;

class ModifyEciScalingConfigurationRequest extends Model
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
     * @description Specifies whether to automatically create elastic IP addresses (EIPs) and bind the EIPs to elastic container instances.
     *
     * @example true
     *
     * @var bool
     */
    public $autoCreateEip;

    /**
     * @description Specifies whether to automatically match image caches.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $autoMatchImageCache;

    /**
     * @description The name series of elastic container instances. Naming conventions:
     *
     *   The name must be 2 to 128 characters in length.
     *   The name can contain only lowercase letters, digits, and hyphens (-). The name cannot start or end with a hyphen (-).
     *
     * @example nginx-test
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @description The containers.
     *
     * @var containers[]
     */
    public $containers;

    /**
     * @description The update mode of containers. Valid values:
     *
     *   RenewUpdate: full update mode. This value takes effect based on the value of Containers in an update request. This value indicates that the previous setting of Containers is overwritten.
     *   IncrementalUpdate: incremental update mode. Container matching is performed based on the Container.name value. Only the parameters that are included in the request parameters are updated.
     *
     * Default value: RenewUpdate.
     *
     * @example RenewUpdate
     *
     * @var string
     */
    public $containersUpdateType;

    /**
     * @description Specifies whether to enable the Cost Optimization feature. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $costOptimization;

    /**
     * @description The number of vCPUs per elastic container instance.
     *
     * @example 1.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The number of physical CPU cores. You can specify this parameter for only specific ECS instance types. For more information, see [Specify CPU options](https://help.aliyun.com/document_detail/197781.html).
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsCore;

    /**
     * @description The number of threads per core. You can specify this parameter for only specific instance types. A value of 1 specifies that Hyper-Threading is disabled. For more information, see [Specify CPU options](https://help.aliyun.com/document_detail/197781.html).
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsThreadsPerCore;

    /**
     * @description The bucket in which data caches are stored.
     *
     * @example default
     *
     * @var string
     */
    public $dataCacheBucket;

    /**
     * @description Specifies whether to enable the Performance Burst feature for the ESSD AutoPL disk in which data caches are stored. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * >  For more information about ESSD AutoPL disks, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example false
     *
     * @var bool
     */
    public $dataCacheBurstingEnabled;

    /**
     * @description The performance level (PL) of the cloud disk in which data caches are stored. We recommend that you use Enterprise SSDs (ESSDs). Valid values:
     *
     *   PL0: An ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: An ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: An ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: An ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * Default value: PL1.
     *
     * >  For more information about ESSDs, see [ESSDs](https://help.aliyun.com/document_detail/122389.html).
     *
     * @example PL1
     *
     * @var string
     */
    public $dataCachePL;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk in which data caches are stored. Valid values: 0 to min{50,000, 1,000 × *Capacity - Baseline IOPS}. Baseline IOPS = min{1,800+50 x *Capacity, 50,000}.
     *
     * >  For more information about ESSD AutoPL disks, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example 40000
     *
     * @var int
     */
    public $dataCacheProvisionedIops;

    /**
     * @description >  This parameter is unavailable.
     *
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @description The IP addresses of DNS servers.
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
     * @description The search domains of DNS servers.
     *
     * @var string[]
     */
    public $dnsConfigSearchs;

    /**
     * @description The Domain Name System (DNS) policy. Valid values:
     *
     *   None: uses the DNS that is specified by DnsConfig.
     *   Default: uses the DNS that is specified for the runtime environment.
     *
     * @example Default
     *
     * @var string
     */
    public $dnsPolicy;

    /**
     * @description The maximum outbound bandwidth. Unit: bit/s.
     *
     * @example 1024000
     *
     * @var int
     */
    public $egressBandwidth;

    /**
     * @description The EIP bandwidth.
     *
     * Default value: 5. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description >  This parameter is not available for use.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSls;

    /**
     * @description The size of the temporary storage space. By default, an Enterprise SSD (ESSD) of the PL1 type is used. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @description The version of the GPU driver. Valid values:
     *
     *   tesla=470.82.01 (default)
     *   tesla=525.85.12
     *
     * >  You can switch the GPU driver version only for a few Elastic Compute Service (ECS) instance types. For more information, see [Specify GPU-accelerated ECS instance types to create an elastic container instance](https://help.aliyun.com/document_detail/2579486.html).
     *
     * @example tesla=525.85.12
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The hosts.
     *
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @description The hostname series of elastic container instances.
     *
     * @example test
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The image repositories.
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
     * @description The level of the instance family, which is used to filter instance types that meet the specified criteria. This parameter takes effect only if you set `CostOptimization` to true. Valid values:
     *
     *   EntryLevel: entry level (shared instance type). Instance types of this level are the most cost-effective but may not provide stable computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low. For more information, see [Shared instance families](https://help.aliyun.com/document_detail/108489.html).
     *   EnterpriseLevel: enterprise level. Instance types of this level provide stable performance and dedicated resources, and are suitable for business scenarios that require high stability. For more information, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *   CreditEntryLevel: credit-based entry level (burstable instance types). CPU credits are used to ensure computing performance. Instance types of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see [Overview](https://help.aliyun.com/document_detail/59977.html) of burstable instances.
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The ECS instance types. You can specify up to five instance types.
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
     * @description The load balancing weight of each backend server. Valid values: 1 to 100.
     *
     * @example 50
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The memory size per elastic container instance. Unit: GiB.
     *
     * @example 2.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The endpoints of Network Time Protocol (NTP) servers.
     *
     * @var string[]
     */
    public $ntpServers;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the instance Resource Access Management (RAM) role. You can use the same RAM role to access elastic container instances and Elastic Compute Service (ECS) instances. For more information, see [Use an instance RAM role by calling API operations](https://help.aliyun.com/document_detail/61178.html).
     *
     * @example RamTestRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The instance restart policy. Valid values:
     *
     *   Always: always restarts elastic container instances.
     *   Never: never restarts elastic container instances.
     *   OnFailure: restarts elastic container instances upon failures.
     *
     * Default value: Always.
     *
     * @example Always
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description The ID of the scaling configuration that you want to modify.
     *
     * This parameter is required.
     *
     * @example asc-bp16har3jpj6fjbx****
     *
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @description The name of the scaling configuration. The name must be 2 to 64 characters in length, and can contain letters, digits, underscores (_), hyphens (-), and periods (.). The name must start with a letter or a digit.
     *
     * The name of a scaling configuration must be unique in the specified region. If you do not specify this parameter, the value of ScalingConfigurationId is used.
     *
     * @example test-modify
     *
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @description The security contexts in which the elastic container instance runs.
     *
     * @var securityContextSysCtls[]
     */
    public $securityContextSysCtls;

    /**
     * @description The ID of the security group to which elastic container instances belong. Elastic container instances that belong to the same security group can communicate with each other.
     *
     * If you do not specify a security group, the system uses the default security group in the region that you selected. Make sure that the inbound rules of the security group contain the protocols and port numbers of the containers that you want to expose. If you do not have a default security group in the region, the system creates a default security group and then adds the container protocols and port numbers that you specified to the inbound rules of the security group.
     *
     * @example sg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The maximum hourly price of preemptible elastic container instances. The value can be accurate to three decimal places.
     *
     * If you set SpotStrategy to SpotWithPriceLimit, you must specify SpotPriceLimit.
     *
     * @example 0.025
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The instance bidding policy. Valid values:
     *
     *   NoSpot: The instances are created as pay-as-you-go instances.
     *   SpotWithPriceLimit: The instances are preemptible instances for which you can specify the maximum hourly price.
     *   SpotAsPriceGo: The instances are created as preemptible instances for which the market price at the time of purchase is used as the bid price.
     *
     * Default value: NoSpot.
     *
     * @example SpotPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The buffer period during which the program handles operations before the program is stopped. Unit: seconds.
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
        'acrRegistryInfos' => 'AcrRegistryInfos',
        'activeDeadlineSeconds' => 'ActiveDeadlineSeconds',
        'autoCreateEip' => 'AutoCreateEip',
        'autoMatchImageCache' => 'AutoMatchImageCache',
        'containerGroupName' => 'ContainerGroupName',
        'containers' => 'Containers',
        'containersUpdateType' => 'ContainersUpdateType',
        'costOptimization' => 'CostOptimization',
        'cpu' => 'Cpu',
        'cpuOptionsCore' => 'CpuOptionsCore',
        'cpuOptionsThreadsPerCore' => 'CpuOptionsThreadsPerCore',
        'dataCacheBucket' => 'DataCacheBucket',
        'dataCacheBurstingEnabled' => 'DataCacheBurstingEnabled',
        'dataCachePL' => 'DataCachePL',
        'dataCacheProvisionedIops' => 'DataCacheProvisionedIops',
        'description' => 'Description',
        'dnsConfigNameServers' => 'DnsConfigNameServers',
        'dnsConfigOptions' => 'DnsConfigOptions',
        'dnsConfigSearchs' => 'DnsConfigSearchs',
        'dnsPolicy' => 'DnsPolicy',
        'egressBandwidth' => 'EgressBandwidth',
        'eipBandwidth' => 'EipBandwidth',
        'enableSls' => 'EnableSls',
        'ephemeralStorage' => 'EphemeralStorage',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'hostAliases' => 'HostAliases',
        'hostName' => 'HostName',
        'imageRegistryCredentials' => 'ImageRegistryCredentials',
        'imageSnapshotId' => 'ImageSnapshotId',
        'ingressBandwidth' => 'IngressBandwidth',
        'initContainers' => 'InitContainers',
        'instanceFamilyLevel' => 'InstanceFamilyLevel',
        'instanceTypes' => 'InstanceTypes',
        'ipv6AddressCount' => 'Ipv6AddressCount',
        'loadBalancerWeight' => 'LoadBalancerWeight',
        'memory' => 'Memory',
        'ntpServers' => 'NtpServers',
        'ownerId' => 'OwnerId',
        'ramRoleName' => 'RamRoleName',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'restartPolicy' => 'RestartPolicy',
        'scalingConfigurationId' => 'ScalingConfigurationId',
        'scalingConfigurationName' => 'ScalingConfigurationName',
        'securityContextSysCtls' => 'SecurityContextSysCtls',
        'securityGroupId' => 'SecurityGroupId',
        'spotPriceLimit' => 'SpotPriceLimit',
        'spotStrategy' => 'SpotStrategy',
        'tags' => 'Tags',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'volumes' => 'Volumes',
    ];

    public function validate() {}

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
        if (null !== $this->containersUpdateType) {
            $res['ContainersUpdateType'] = $this->containersUpdateType;
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
        if (null !== $this->dnsConfigSearchs) {
            $res['DnsConfigSearchs'] = $this->dnsConfigSearchs;
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
        if (null !== $this->enableSls) {
            $res['EnableSls'] = $this->enableSls;
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
        if (null !== $this->loadBalancerWeight) {
            $res['LoadBalancerWeight'] = $this->loadBalancerWeight;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->ntpServers) {
            $res['NtpServers'] = $this->ntpServers;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->restartPolicy) {
            $res['RestartPolicy'] = $this->restartPolicy;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }
        if (null !== $this->scalingConfigurationName) {
            $res['ScalingConfigurationName'] = $this->scalingConfigurationName;
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
     * @return ModifyEciScalingConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcrRegistryInfos'])) {
            if (!empty($map['AcrRegistryInfos'])) {
                $model->acrRegistryInfos = [];
                $n = 0;
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
                $n = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? containers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContainersUpdateType'])) {
            $model->containersUpdateType = $map['ContainersUpdateType'];
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
                $n = 0;
                foreach ($map['DnsConfigOptions'] as $item) {
                    $model->dnsConfigOptions[$n++] = null !== $item ? dnsConfigOptions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DnsConfigSearchs'])) {
            if (!empty($map['DnsConfigSearchs'])) {
                $model->dnsConfigSearchs = $map['DnsConfigSearchs'];
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
        if (isset($map['EnableSls'])) {
            $model->enableSls = $map['EnableSls'];
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
                $n = 0;
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
                $n = 0;
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
                $n = 0;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }
        if (isset($map['ScalingConfigurationName'])) {
            $model->scalingConfigurationName = $map['ScalingConfigurationName'];
        }
        if (isset($map['SecurityContextSysCtls'])) {
            if (!empty($map['SecurityContextSysCtls'])) {
                $model->securityContextSysCtls = [];
                $n = 0;
                foreach ($map['SecurityContextSysCtls'] as $item) {
                    $model->securityContextSysCtls[$n++] = null !== $item ? securityContextSysCtls::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
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
                $n = 0;
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
                $n = 0;
                foreach ($map['Volumes'] as $item) {
                    $model->volumes[$n++] = null !== $item ? volumes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
