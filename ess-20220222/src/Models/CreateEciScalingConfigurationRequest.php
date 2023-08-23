<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\acrRegistryInfos;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\dnsConfigOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\hostAliases;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\imageRegistryCredentials;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\securityContextSysctls;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\tags;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes;
use AlibabaCloud\Tea\Model;

class CreateEciScalingConfigurationRequest extends Model
{
    /**
     * @description Information about the Container Registry Enterprise Edition instance.
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
     * @description Specifies whether to automatically create an elastic IP address (EIP) and bind the EIP to the elastic container instance.
     *
     * @example true
     *
     * @var bool
     */
    public $autoCreateEip;

    /**
     * @description Specifies whether to automatically match the image cache. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $autoMatchImageCache;

    /**
     * @description The name of the elastic container instance.
     *
     * @example nginx-test
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
     * @description Specifies whether to enable the cost optimization feature. Valid values:
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
     * @example 1.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description Number of physical CPU cores This parameter is not available for all instance types. For more information, see [Specify custom CPU options](~~197781~~).
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsCore;

    /**
     * @description The number of threads per core. This parameter is not available for all instance types. A value of 1 indicates that Hyper-Threading is disabled. For more information, see [Specify custom CPU options](~~197781~~).
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsThreadsPerCore;

    /**
     * @description > This parameter is unavailable.
     *
     * @example desc
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
     * @description The options. Each option is in the name-value pair format. The value in the name-value pair is optional.
     *
     * @var dnsConfigOptions[]
     */
    public $dnsConfigOptions;

    /**
     * @description The DNS lookup domains.
     *
     * @var string[]
     */
    public $dnsConfigSearchs;

    /**
     * @description The Domain Name System (DNS) policy. Valid values:
     *
     *   None: uses the DNS that is set for the DnsConfig field.
     *   Default: use the DNS that is set for the runtime environment.
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
     * @description > This parameter is unavailable.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSls;

    /**
     * @description The size of the temporary storage space. By default, an ESSD of the PL1 type is used. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @description The hostnames and IP addresses of a container that you want to add to the hosts file of the elastic container instance.
     *
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @description The name of the elastic container instance.
     *
     * @example test
     *
     * @var string
     */
    public $hostName;

    /**
     * @description Information about the image repository.
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
     * @description The level of the instance type, which is used to filter the instance types that meet the specified criteria. This parameter takes effect only if you set the `CostOptimization` parameter to true. Valid values:
     *
     *   EntryLevel: shared instance type. Instances of this level are the most cost-effective but may not provide stable computing performance in a consistent manner. Instances of this level are suitable for business scenarios in which the CPU utilization is low. For more information, see [Shared instance families](~~108489~~).
     *   EnterpriseLevel: Instances of this level provide stable performance and dedicated resources, and are suitable for business scenarios that require high stability. For more information, see [Instance family](~~25378~~).
     *   CreditEntryLevel: This value is valid only for burstable instances. CPU credits are used to ensure computing performance. Instances of this level are suitable for scenarios in which the CPU utilization is low but may fluctuate in specific cases. For more information, see the [Overview](~~59977~~) topic of burstable instances.
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The number of IPv6 addresses.
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The weight of the elastic container instance as a backend server. Valid values: 1 to 100.
     *
     * Default value: 50.
     * @example 50
     *
     * @var int
     */
    public $loadBalancerWeight;

    /**
     * @description The memory size of the elastic container instance. Unit: GiB.
     *
     * @example 2.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The domain name of the Network Time Protocol (NTP) server.
     *
     * @var string[]
     */
    public $ntpServers;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the RAM role for the elastic container instance. You can use an instance RAM role to access both elastic container instances and Elastic Compute Service (ECS) instances. For more information, see [Use an instance RAM role by calling API operations](~~61178~~).
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
     * @description The restart policy of the elastic container instance. Valid values:
     *
     *   Always: always restarts the elastic container instance.
     *   Never: never restarts the elastic container instance.
     *   OnFailure: restarts the elastic container instance upon failures.
     *
     * Default value: Always.
     * @example Always
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description The name of the scaling configuration. The name must be 2 to 64 characters in length, and can contain letters, digits, underscores (\_), hyphens (-), and periods (.). The name must start with a letter or a digit.
     *
     * The name of the scaling configuration must be unique within a scaling group in a region. If you do not specify this parameter, the value of the ScalingConfigurationId parameter is used.
     * @example scalingconfig****
     *
     * @var string
     */
    public $scalingConfigurationName;

    /**
     * @description The ID of the scaling group in which you want to create the scaling configuration.
     *
     * @example asg-bp14wlu85wrpchm0****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The system information of the security context in which the elastic container instance runs.
     *
     * @var securityContextSysctls[]
     */
    public $securityContextSysctls;

    /**
     * @description The ID of the security group with which you want to associate the elastic container instance. Elastic container instances that are associated with the same security group can access each other.
     *
     * If you do not specify a security group, the system uses the default security group in the region that you selected. Make sure that the inbound rules of the security group contain the protocols and the port numbers of the containers that you want to expose. If you do not have a default security group in the region, the system creates a default security group, and then adds the declared container protocols and port numbers to the inbound rules of the security group.
     * @example sg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The maximum hourly price of the preemptible elastic container instance. The value can be accurate to three decimal places.
     *
     * If you set the SpotStrategy parameter to SpotWithPriceLimit, you must also specify the SpotPriceLimit parameter.
     * @example 0.025
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The bidding policy for the elastic container instance. Valid values:
     *
     *   NoSpot: The instance is a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is used as the bid price.
     *
     * Default value: NoSpot.
     * @example SpotPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The tags of the elastic container instance. The tags must be specified in the key-value pair format. You can specify up to 20 tags. When you specify tag keys and tag values, take note of the following items:
     *
     *   A tag key can be up to 64 characters in length. The key cannot start with acs: or aliyun and cannot contain `http://` or `https://`. You cannot specify an empty string as a tag key.
     *   A tag value can be up to 128 characters in length. The value cannot start with acs: or aliyun and cannot contain `http://` or `https://`. You can specify an empty string as a tag value.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The buffer time in which the program handles operations before the program is stopped. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description Information about the volumes.
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
        'description'                   => 'Description',
        'dnsConfigNameServers'          => 'DnsConfigNameServers',
        'dnsConfigOptions'              => 'DnsConfigOptions',
        'dnsConfigSearchs'              => 'DnsConfigSearchs',
        'dnsPolicy'                     => 'DnsPolicy',
        'egressBandwidth'               => 'EgressBandwidth',
        'eipBandwidth'                  => 'EipBandwidth',
        'enableSls'                     => 'EnableSls',
        'ephemeralStorage'              => 'EphemeralStorage',
        'hostAliases'                   => 'HostAliases',
        'hostName'                      => 'HostName',
        'imageRegistryCredentials'      => 'ImageRegistryCredentials',
        'imageSnapshotId'               => 'ImageSnapshotId',
        'ingressBandwidth'              => 'IngressBandwidth',
        'initContainers'                => 'InitContainers',
        'instanceFamilyLevel'           => 'InstanceFamilyLevel',
        'ipv6AddressCount'              => 'Ipv6AddressCount',
        'loadBalancerWeight'            => 'LoadBalancerWeight',
        'memory'                        => 'Memory',
        'ntpServers'                    => 'NtpServers',
        'ownerId'                       => 'OwnerId',
        'ramRoleName'                   => 'RamRoleName',
        'resourceGroupId'               => 'ResourceGroupId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'restartPolicy'                 => 'RestartPolicy',
        'scalingConfigurationName'      => 'ScalingConfigurationName',
        'scalingGroupId'                => 'ScalingGroupId',
        'securityContextSysctls'        => 'SecurityContextSysctls',
        'securityGroupId'               => 'SecurityGroupId',
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
        if (null !== $this->scalingConfigurationName) {
            $res['ScalingConfigurationName'] = $this->scalingConfigurationName;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->securityContextSysctls) {
            $res['SecurityContextSysctls'] = [];
            if (null !== $this->securityContextSysctls && \is_array($this->securityContextSysctls)) {
                $n = 0;
                foreach ($this->securityContextSysctls as $item) {
                    $res['SecurityContextSysctls'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CreateEciScalingConfigurationRequest
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
        if (isset($map['ScalingConfigurationName'])) {
            $model->scalingConfigurationName = $map['ScalingConfigurationName'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['SecurityContextSysctls'])) {
            if (!empty($map['SecurityContextSysctls'])) {
                $model->securityContextSysctls = [];
                $n                             = 0;
                foreach ($map['SecurityContextSysctls'] as $item) {
                    $model->securityContextSysctls[$n++] = null !== $item ? securityContextSysctls::fromMap($item) : $item;
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
