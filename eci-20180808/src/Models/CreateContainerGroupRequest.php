<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\acrRegistryInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\dnsConfig;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\hostAliase;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\hostSecurityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\imageRegistryCredential;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\tag;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume;

class CreateContainerGroupRequest extends Model
{
    /**
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @var hostSecurityContext
     */
    public $hostSecurityContext;

    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @var acrRegistryInfo[]
     */
    public $acrRegistryInfo;

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
    public $clientToken;

    /**
     * @var string[]
     */
    public $computeCategory;

    /**
     * @var container[]
     */
    public $container;

    /**
     * @var string
     */
    public $containerGroupName;

    /**
     * @var bool
     */
    public $containerResourceView;

    /**
     * @var string
     */
    public $corePattern;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @var int
     */
    public $cpuOptionsCore;

    /**
     * @var string
     */
    public $cpuOptionsNuma;

    /**
     * @var int
     */
    public $cpuOptionsThreadsPerCore;

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
    public $dnsPolicy;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var int
     */
    public $egressBandwidth;

    /**
     * @var int
     */
    public $eipBandwidth;

    /**
     * @var string
     */
    public $eipCommonBandwidthPackage;

    /**
     * @var string
     */
    public $eipISP;

    /**
     * @var string
     */
    public $eipInstanceId;

    /**
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @var string
     */
    public $fixedIp;

    /**
     * @var int
     */
    public $fixedIpRetainHour;

    /**
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @var hostAliase[]
     */
    public $hostAliase;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $imageAccelerateMode;

    /**
     * @var imageRegistryCredential[]
     */
    public $imageRegistryCredential;

    /**
     * @var string
     */
    public $imageSnapshotId;

    /**
     * @var int
     */
    public $ingressBandwidth;

    /**
     * @var initContainer[]
     */
    public $initContainer;

    /**
     * @var string
     */
    public $insecureRegistry;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @var string
     */
    public $ipv6GatewayBandwidth;

    /**
     * @var bool
     */
    public $ipv6GatewayBandwidthEnable;

    /**
     * @var int
     */
    public $maxPendingMinute;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string[]
     */
    public $ntpServer;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $plainHttpRegistry;

    /**
     * @var string
     */
    public $privateIpAddress;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $restartPolicy;

    /**
     * @var string
     */
    public $scheduleStrategy;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var bool
     */
    public $shareProcessNamespace;

    /**
     * @var int
     */
    public $spotDuration;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var bool
     */
    public $strictSpot;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var volume[]
     */
    public $volume;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dnsConfig' => 'DnsConfig',
        'hostSecurityContext' => 'HostSecurityContext',
        'securityContext' => 'SecurityContext',
        'acrRegistryInfo' => 'AcrRegistryInfo',
        'activeDeadlineSeconds' => 'ActiveDeadlineSeconds',
        'autoCreateEip' => 'AutoCreateEip',
        'autoMatchImageCache' => 'AutoMatchImageCache',
        'clientToken' => 'ClientToken',
        'computeCategory' => 'ComputeCategory',
        'container' => 'Container',
        'containerGroupName' => 'ContainerGroupName',
        'containerResourceView' => 'ContainerResourceView',
        'corePattern' => 'CorePattern',
        'cpu' => 'Cpu',
        'cpuArchitecture' => 'CpuArchitecture',
        'cpuOptionsCore' => 'CpuOptionsCore',
        'cpuOptionsNuma' => 'CpuOptionsNuma',
        'cpuOptionsThreadsPerCore' => 'CpuOptionsThreadsPerCore',
        'dataCacheBucket' => 'DataCacheBucket',
        'dataCacheBurstingEnabled' => 'DataCacheBurstingEnabled',
        'dataCachePL' => 'DataCachePL',
        'dataCacheProvisionedIops' => 'DataCacheProvisionedIops',
        'dnsPolicy' => 'DnsPolicy',
        'dryRun' => 'DryRun',
        'egressBandwidth' => 'EgressBandwidth',
        'eipBandwidth' => 'EipBandwidth',
        'eipCommonBandwidthPackage' => 'EipCommonBandwidthPackage',
        'eipISP' => 'EipISP',
        'eipInstanceId' => 'EipInstanceId',
        'ephemeralStorage' => 'EphemeralStorage',
        'fixedIp' => 'FixedIp',
        'fixedIpRetainHour' => 'FixedIpRetainHour',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'hostAliase' => 'HostAliase',
        'hostName' => 'HostName',
        'imageAccelerateMode' => 'ImageAccelerateMode',
        'imageRegistryCredential' => 'ImageRegistryCredential',
        'imageSnapshotId' => 'ImageSnapshotId',
        'ingressBandwidth' => 'IngressBandwidth',
        'initContainer' => 'InitContainer',
        'insecureRegistry' => 'InsecureRegistry',
        'instanceType' => 'InstanceType',
        'ipv6AddressCount' => 'Ipv6AddressCount',
        'ipv6GatewayBandwidth' => 'Ipv6GatewayBandwidth',
        'ipv6GatewayBandwidthEnable' => 'Ipv6GatewayBandwidthEnable',
        'maxPendingMinute' => 'MaxPendingMinute',
        'memory' => 'Memory',
        'ntpServer' => 'NtpServer',
        'osType' => 'OsType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'plainHttpRegistry' => 'PlainHttpRegistry',
        'privateIpAddress' => 'PrivateIpAddress',
        'ramRoleName' => 'RamRoleName',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'restartPolicy' => 'RestartPolicy',
        'scheduleStrategy' => 'ScheduleStrategy',
        'securityGroupId' => 'SecurityGroupId',
        'shareProcessNamespace' => 'ShareProcessNamespace',
        'spotDuration' => 'SpotDuration',
        'spotPriceLimit' => 'SpotPriceLimit',
        'spotStrategy' => 'SpotStrategy',
        'strictSpot' => 'StrictSpot',
        'tag' => 'Tag',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'vSwitchId' => 'VSwitchId',
        'volume' => 'Volume',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->dnsConfig) {
            $this->dnsConfig->validate();
        }
        if (null !== $this->hostSecurityContext) {
            $this->hostSecurityContext->validate();
        }
        if (null !== $this->securityContext) {
            $this->securityContext->validate();
        }
        if (\is_array($this->acrRegistryInfo)) {
            Model::validateArray($this->acrRegistryInfo);
        }
        if (\is_array($this->computeCategory)) {
            Model::validateArray($this->computeCategory);
        }
        if (\is_array($this->container)) {
            Model::validateArray($this->container);
        }
        if (\is_array($this->hostAliase)) {
            Model::validateArray($this->hostAliase);
        }
        if (\is_array($this->imageRegistryCredential)) {
            Model::validateArray($this->imageRegistryCredential);
        }
        if (\is_array($this->initContainer)) {
            Model::validateArray($this->initContainer);
        }
        if (\is_array($this->ntpServer)) {
            Model::validateArray($this->ntpServer);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->volume)) {
            Model::validateArray($this->volume);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toArray($noStream) : $this->dnsConfig;
        }

        if (null !== $this->hostSecurityContext) {
            $res['HostSecurityContext'] = null !== $this->hostSecurityContext ? $this->hostSecurityContext->toArray($noStream) : $this->hostSecurityContext;
        }

        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toArray($noStream) : $this->securityContext;
        }

        if (null !== $this->acrRegistryInfo) {
            if (\is_array($this->acrRegistryInfo)) {
                $res['AcrRegistryInfo'] = [];
                $n1 = 0;
                foreach ($this->acrRegistryInfo as $item1) {
                    $res['AcrRegistryInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->computeCategory) {
            if (\is_array($this->computeCategory)) {
                $res['ComputeCategory'] = [];
                $n1 = 0;
                foreach ($this->computeCategory as $item1) {
                    $res['ComputeCategory'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->container) {
            if (\is_array($this->container)) {
                $res['Container'] = [];
                $n1 = 0;
                foreach ($this->container as $item1) {
                    $res['Container'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->containerGroupName) {
            $res['ContainerGroupName'] = $this->containerGroupName;
        }

        if (null !== $this->containerResourceView) {
            $res['ContainerResourceView'] = $this->containerResourceView;
        }

        if (null !== $this->corePattern) {
            $res['CorePattern'] = $this->corePattern;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->cpuArchitecture) {
            $res['CpuArchitecture'] = $this->cpuArchitecture;
        }

        if (null !== $this->cpuOptionsCore) {
            $res['CpuOptionsCore'] = $this->cpuOptionsCore;
        }

        if (null !== $this->cpuOptionsNuma) {
            $res['CpuOptionsNuma'] = $this->cpuOptionsNuma;
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

        if (null !== $this->dnsPolicy) {
            $res['DnsPolicy'] = $this->dnsPolicy;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->egressBandwidth) {
            $res['EgressBandwidth'] = $this->egressBandwidth;
        }

        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }

        if (null !== $this->eipCommonBandwidthPackage) {
            $res['EipCommonBandwidthPackage'] = $this->eipCommonBandwidthPackage;
        }

        if (null !== $this->eipISP) {
            $res['EipISP'] = $this->eipISP;
        }

        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }

        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }

        if (null !== $this->fixedIp) {
            $res['FixedIp'] = $this->fixedIp;
        }

        if (null !== $this->fixedIpRetainHour) {
            $res['FixedIpRetainHour'] = $this->fixedIpRetainHour;
        }

        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }

        if (null !== $this->hostAliase) {
            if (\is_array($this->hostAliase)) {
                $res['HostAliase'] = [];
                $n1 = 0;
                foreach ($this->hostAliase as $item1) {
                    $res['HostAliase'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->imageAccelerateMode) {
            $res['ImageAccelerateMode'] = $this->imageAccelerateMode;
        }

        if (null !== $this->imageRegistryCredential) {
            if (\is_array($this->imageRegistryCredential)) {
                $res['ImageRegistryCredential'] = [];
                $n1 = 0;
                foreach ($this->imageRegistryCredential as $item1) {
                    $res['ImageRegistryCredential'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->imageSnapshotId) {
            $res['ImageSnapshotId'] = $this->imageSnapshotId;
        }

        if (null !== $this->ingressBandwidth) {
            $res['IngressBandwidth'] = $this->ingressBandwidth;
        }

        if (null !== $this->initContainer) {
            if (\is_array($this->initContainer)) {
                $res['InitContainer'] = [];
                $n1 = 0;
                foreach ($this->initContainer as $item1) {
                    $res['InitContainer'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->insecureRegistry) {
            $res['InsecureRegistry'] = $this->insecureRegistry;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }

        if (null !== $this->ipv6GatewayBandwidth) {
            $res['Ipv6GatewayBandwidth'] = $this->ipv6GatewayBandwidth;
        }

        if (null !== $this->ipv6GatewayBandwidthEnable) {
            $res['Ipv6GatewayBandwidthEnable'] = $this->ipv6GatewayBandwidthEnable;
        }

        if (null !== $this->maxPendingMinute) {
            $res['MaxPendingMinute'] = $this->maxPendingMinute;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->ntpServer) {
            if (\is_array($this->ntpServer)) {
                $res['NtpServer'] = [];
                $n1 = 0;
                foreach ($this->ntpServer as $item1) {
                    $res['NtpServer'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->plainHttpRegistry) {
            $res['PlainHttpRegistry'] = $this->plainHttpRegistry;
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

        if (null !== $this->restartPolicy) {
            $res['RestartPolicy'] = $this->restartPolicy;
        }

        if (null !== $this->scheduleStrategy) {
            $res['ScheduleStrategy'] = $this->scheduleStrategy;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->shareProcessNamespace) {
            $res['ShareProcessNamespace'] = $this->shareProcessNamespace;
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

        if (null !== $this->strictSpot) {
            $res['StrictSpot'] = $this->strictSpot;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->terminationGracePeriodSeconds) {
            $res['TerminationGracePeriodSeconds'] = $this->terminationGracePeriodSeconds;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->volume) {
            if (\is_array($this->volume)) {
                $res['Volume'] = [];
                $n1 = 0;
                foreach ($this->volume as $item1) {
                    $res['Volume'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }

        if (isset($map['HostSecurityContext'])) {
            $model->hostSecurityContext = hostSecurityContext::fromMap($map['HostSecurityContext']);
        }

        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }

        if (isset($map['AcrRegistryInfo'])) {
            if (!empty($map['AcrRegistryInfo'])) {
                $model->acrRegistryInfo = [];
                $n1 = 0;
                foreach ($map['AcrRegistryInfo'] as $item1) {
                    $model->acrRegistryInfo[$n1++] = acrRegistryInfo::fromMap($item1);
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ComputeCategory'])) {
            if (!empty($map['ComputeCategory'])) {
                $model->computeCategory = [];
                $n1 = 0;
                foreach ($map['ComputeCategory'] as $item1) {
                    $model->computeCategory[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Container'])) {
            if (!empty($map['Container'])) {
                $model->container = [];
                $n1 = 0;
                foreach ($map['Container'] as $item1) {
                    $model->container[$n1++] = container::fromMap($item1);
                }
            }
        }

        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }

        if (isset($map['ContainerResourceView'])) {
            $model->containerResourceView = $map['ContainerResourceView'];
        }

        if (isset($map['CorePattern'])) {
            $model->corePattern = $map['CorePattern'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CpuArchitecture'])) {
            $model->cpuArchitecture = $map['CpuArchitecture'];
        }

        if (isset($map['CpuOptionsCore'])) {
            $model->cpuOptionsCore = $map['CpuOptionsCore'];
        }

        if (isset($map['CpuOptionsNuma'])) {
            $model->cpuOptionsNuma = $map['CpuOptionsNuma'];
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

        if (isset($map['DnsPolicy'])) {
            $model->dnsPolicy = $map['DnsPolicy'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EgressBandwidth'])) {
            $model->egressBandwidth = $map['EgressBandwidth'];
        }

        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }

        if (isset($map['EipCommonBandwidthPackage'])) {
            $model->eipCommonBandwidthPackage = $map['EipCommonBandwidthPackage'];
        }

        if (isset($map['EipISP'])) {
            $model->eipISP = $map['EipISP'];
        }

        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }

        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }

        if (isset($map['FixedIp'])) {
            $model->fixedIp = $map['FixedIp'];
        }

        if (isset($map['FixedIpRetainHour'])) {
            $model->fixedIpRetainHour = $map['FixedIpRetainHour'];
        }

        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }

        if (isset($map['HostAliase'])) {
            if (!empty($map['HostAliase'])) {
                $model->hostAliase = [];
                $n1 = 0;
                foreach ($map['HostAliase'] as $item1) {
                    $model->hostAliase[$n1++] = hostAliase::fromMap($item1);
                }
            }
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['ImageAccelerateMode'])) {
            $model->imageAccelerateMode = $map['ImageAccelerateMode'];
        }

        if (isset($map['ImageRegistryCredential'])) {
            if (!empty($map['ImageRegistryCredential'])) {
                $model->imageRegistryCredential = [];
                $n1 = 0;
                foreach ($map['ImageRegistryCredential'] as $item1) {
                    $model->imageRegistryCredential[$n1++] = imageRegistryCredential::fromMap($item1);
                }
            }
        }

        if (isset($map['ImageSnapshotId'])) {
            $model->imageSnapshotId = $map['ImageSnapshotId'];
        }

        if (isset($map['IngressBandwidth'])) {
            $model->ingressBandwidth = $map['IngressBandwidth'];
        }

        if (isset($map['InitContainer'])) {
            if (!empty($map['InitContainer'])) {
                $model->initContainer = [];
                $n1 = 0;
                foreach ($map['InitContainer'] as $item1) {
                    $model->initContainer[$n1++] = initContainer::fromMap($item1);
                }
            }
        }

        if (isset($map['InsecureRegistry'])) {
            $model->insecureRegistry = $map['InsecureRegistry'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }

        if (isset($map['Ipv6GatewayBandwidth'])) {
            $model->ipv6GatewayBandwidth = $map['Ipv6GatewayBandwidth'];
        }

        if (isset($map['Ipv6GatewayBandwidthEnable'])) {
            $model->ipv6GatewayBandwidthEnable = $map['Ipv6GatewayBandwidthEnable'];
        }

        if (isset($map['MaxPendingMinute'])) {
            $model->maxPendingMinute = $map['MaxPendingMinute'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NtpServer'])) {
            if (!empty($map['NtpServer'])) {
                $model->ntpServer = [];
                $n1 = 0;
                foreach ($map['NtpServer'] as $item1) {
                    $model->ntpServer[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlainHttpRegistry'])) {
            $model->plainHttpRegistry = $map['PlainHttpRegistry'];
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

        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }

        if (isset($map['ScheduleStrategy'])) {
            $model->scheduleStrategy = $map['ScheduleStrategy'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['ShareProcessNamespace'])) {
            $model->shareProcessNamespace = $map['ShareProcessNamespace'];
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

        if (isset($map['StrictSpot'])) {
            $model->strictSpot = $map['StrictSpot'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TerminationGracePeriodSeconds'])) {
            $model->terminationGracePeriodSeconds = $map['TerminationGracePeriodSeconds'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['Volume'])) {
            if (!empty($map['Volume'])) {
                $model->volume = [];
                $n1 = 0;
                foreach ($map['Volume'] as $item1) {
                    $model->volume[$n1++] = volume::fromMap($item1);
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
