<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\acrRegistryInfos;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\dnsConfigOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\hostAliases;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\imageRegistryCredentials;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\initContainers;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\securityContextSysCtls;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\tags;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\volumes;

class scalingConfigurations extends Model
{
    /**
     * @var acrRegistryInfos[]
     */
    public $acrRegistryInfos;
    /**
     * @var int
     */
    public $activeDeadlineSeconds;
    /**
     * @var bool
     */
    public $autoCreateEip;
    /**
     * @var bool
     */
    public $autoMatchImageCache;
    /**
     * @var string
     */
    public $containerGroupName;
    /**
     * @var containers[]
     */
    public $containers;
    /**
     * @var bool
     */
    public $costOptimization;
    /**
     * @var float
     */
    public $cpu;
    /**
     * @var int
     */
    public $cpuOptionsCore;
    /**
     * @var int
     */
    public $cpuOptionsThreadsPerCore;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $dataCacheBucket;
    /**
     * @var bool
     */
    public $dataCacheBurstingEnabled;
    /**
     * @var string
     */
    public $dataCachePL;
    /**
     * @var int
     */
    public $dataCacheProvisionedIops;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string[]
     */
    public $dnsConfigNameServers;
    /**
     * @var dnsConfigOptions[]
     */
    public $dnsConfigOptions;
    /**
     * @var string[]
     */
    public $dnsConfigSearches;
    /**
     * @var string
     */
    public $dnsPolicy;
    /**
     * @var int
     */
    public $egressBandwidth;
    /**
     * @var int
     */
    public $eipBandwidth;
    /**
     * @var int
     */
    public $ephemeralStorage;
    /**
     * @var string
     */
    public $gpuDriverVersion;
    /**
     * @var hostAliases[]
     */
    public $hostAliases;
    /**
     * @var string
     */
    public $hostName;
    /**
     * @var imageRegistryCredentials[]
     */
    public $imageRegistryCredentials;
    /**
     * @var string
     */
    public $imageSnapshotId;
    /**
     * @var int
     */
    public $ingressBandwidth;
    /**
     * @var initContainers[]
     */
    public $initContainers;
    /**
     * @var string
     */
    public $instanceFamilyLevel;
    /**
     * @var string[]
     */
    public $instanceTypes;
    /**
     * @var int
     */
    public $ipv6AddressCount;
    /**
     * @var string
     */
    public $lifecycleState;
    /**
     * @var int
     */
    public $loadBalancerWeight;
    /**
     * @var float
     */
    public $memory;
    /**
     * @var string[]
     */
    public $ntpServers;
    /**
     * @var string
     */
    public $ramRoleName;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $restartPolicy;
    /**
     * @var string
     */
    public $scalingConfigurationId;
    /**
     * @var string
     */
    public $scalingConfigurationName;
    /**
     * @var string
     */
    public $scalingGroupId;
    /**
     * @var securityContextSysCtls[]
     */
    public $securityContextSysCtls;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var bool
     */
    public $slsEnable;
    /**
     * @var float
     */
    public $spotPriceLimit;
    /**
     * @var string
     */
    public $spotStrategy;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var int
     */
    public $terminationGracePeriodSeconds;
    /**
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
        if (\is_array($this->acrRegistryInfos)) {
            Model::validateArray($this->acrRegistryInfos);
        }
        if (\is_array($this->containers)) {
            Model::validateArray($this->containers);
        }
        if (\is_array($this->dnsConfigNameServers)) {
            Model::validateArray($this->dnsConfigNameServers);
        }
        if (\is_array($this->dnsConfigOptions)) {
            Model::validateArray($this->dnsConfigOptions);
        }
        if (\is_array($this->dnsConfigSearches)) {
            Model::validateArray($this->dnsConfigSearches);
        }
        if (\is_array($this->hostAliases)) {
            Model::validateArray($this->hostAliases);
        }
        if (\is_array($this->imageRegistryCredentials)) {
            Model::validateArray($this->imageRegistryCredentials);
        }
        if (\is_array($this->initContainers)) {
            Model::validateArray($this->initContainers);
        }
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        if (\is_array($this->ntpServers)) {
            Model::validateArray($this->ntpServers);
        }
        if (\is_array($this->securityContextSysCtls)) {
            Model::validateArray($this->securityContextSysCtls);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->volumes)) {
            Model::validateArray($this->volumes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrRegistryInfos) {
            if (\is_array($this->acrRegistryInfos)) {
                $res['AcrRegistryInfos'] = [];
                $n1                      = 0;
                foreach ($this->acrRegistryInfos as $item1) {
                    $res['AcrRegistryInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->containers)) {
                $res['Containers'] = [];
                $n1                = 0;
                foreach ($this->containers as $item1) {
                    $res['Containers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->dnsConfigNameServers)) {
                $res['DnsConfigNameServers'] = [];
                $n1                          = 0;
                foreach ($this->dnsConfigNameServers as $item1) {
                    $res['DnsConfigNameServers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dnsConfigOptions) {
            if (\is_array($this->dnsConfigOptions)) {
                $res['DnsConfigOptions'] = [];
                $n1                      = 0;
                foreach ($this->dnsConfigOptions as $item1) {
                    $res['DnsConfigOptions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dnsConfigSearches) {
            if (\is_array($this->dnsConfigSearches)) {
                $res['DnsConfigSearches'] = [];
                $n1                       = 0;
                foreach ($this->dnsConfigSearches as $item1) {
                    $res['DnsConfigSearches'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->hostAliases)) {
                $res['HostAliases'] = [];
                $n1                 = 0;
                foreach ($this->hostAliases as $item1) {
                    $res['HostAliases'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->imageRegistryCredentials) {
            if (\is_array($this->imageRegistryCredentials)) {
                $res['ImageRegistryCredentials'] = [];
                $n1                              = 0;
                foreach ($this->imageRegistryCredentials as $item1) {
                    $res['ImageRegistryCredentials'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->initContainers)) {
                $res['InitContainers'] = [];
                $n1                    = 0;
                foreach ($this->initContainers as $item1) {
                    $res['InitContainers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }

        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1                   = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->ntpServers)) {
                $res['NtpServers'] = [];
                $n1                = 0;
                foreach ($this->ntpServers as $item1) {
                    $res['NtpServers'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->securityContextSysCtls)) {
                $res['SecurityContextSysCtls'] = [];
                $n1                            = 0;
                foreach ($this->securityContextSysCtls as $item1) {
                    $res['SecurityContextSysCtls'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->terminationGracePeriodSeconds) {
            $res['TerminationGracePeriodSeconds'] = $this->terminationGracePeriodSeconds;
        }

        if (null !== $this->volumes) {
            if (\is_array($this->volumes)) {
                $res['Volumes'] = [];
                $n1             = 0;
                foreach ($this->volumes as $item1) {
                    $res['Volumes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcrRegistryInfos'])) {
            if (!empty($map['AcrRegistryInfos'])) {
                $model->acrRegistryInfos = [];
                $n1                      = 0;
                foreach ($map['AcrRegistryInfos'] as $item1) {
                    $model->acrRegistryInfos[$n1++] = acrRegistryInfos::fromMap($item1);
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
                $n1                = 0;
                foreach ($map['Containers'] as $item1) {
                    $model->containers[$n1++] = containers::fromMap($item1);
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
                $model->dnsConfigNameServers = [];
                $n1                          = 0;
                foreach ($map['DnsConfigNameServers'] as $item1) {
                    $model->dnsConfigNameServers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DnsConfigOptions'])) {
            if (!empty($map['DnsConfigOptions'])) {
                $model->dnsConfigOptions = [];
                $n1                      = 0;
                foreach ($map['DnsConfigOptions'] as $item1) {
                    $model->dnsConfigOptions[$n1++] = dnsConfigOptions::fromMap($item1);
                }
            }
        }

        if (isset($map['DnsConfigSearches'])) {
            if (!empty($map['DnsConfigSearches'])) {
                $model->dnsConfigSearches = [];
                $n1                       = 0;
                foreach ($map['DnsConfigSearches'] as $item1) {
                    $model->dnsConfigSearches[$n1++] = $item1;
                }
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
                $n1                 = 0;
                foreach ($map['HostAliases'] as $item1) {
                    $model->hostAliases[$n1++] = hostAliases::fromMap($item1);
                }
            }
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['ImageRegistryCredentials'])) {
            if (!empty($map['ImageRegistryCredentials'])) {
                $model->imageRegistryCredentials = [];
                $n1                              = 0;
                foreach ($map['ImageRegistryCredentials'] as $item1) {
                    $model->imageRegistryCredentials[$n1++] = imageRegistryCredentials::fromMap($item1);
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
                $n1                    = 0;
                foreach ($map['InitContainers'] as $item1) {
                    $model->initContainers[$n1++] = initContainers::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }

        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n1                   = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1++] = $item1;
                }
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
                $model->ntpServers = [];
                $n1                = 0;
                foreach ($map['NtpServers'] as $item1) {
                    $model->ntpServers[$n1++] = $item1;
                }
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
                $n1                            = 0;
                foreach ($map['SecurityContextSysCtls'] as $item1) {
                    $model->securityContextSysCtls[$n1++] = securityContextSysCtls::fromMap($item1);
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TerminationGracePeriodSeconds'])) {
            $model->terminationGracePeriodSeconds = $map['TerminationGracePeriodSeconds'];
        }

        if (isset($map['Volumes'])) {
            if (!empty($map['Volumes'])) {
                $model->volumes = [];
                $n1             = 0;
                foreach ($map['Volumes'] as $item1) {
                    $model->volumes[$n1++] = volumes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
