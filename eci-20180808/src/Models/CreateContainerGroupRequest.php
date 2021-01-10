<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\acrRegistryInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\arn;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\dnsConfig;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\hostAliase;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\imageRegistryCredential;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\tag;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume;
use AlibabaCloud\Tea\Model;

class CreateContainerGroupRequest extends Model
{
    /**
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @var int
     */
    public $ownerId;

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
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $containerGroupName;

    /**
     * @var string
     */
    public $restartPolicy;

    /**
     * @var string
     */
    public $eipInstanceId;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $dnsPolicy;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $slsEnable;

    /**
     * @var string
     */
    public $imageSnapshotId;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @var bool
     */
    public $autoMatchImageCache;

    /**
     * @var string
     */
    public $vkClientVersion;

    /**
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @var int
     */
    public $activeDeadlineSeconds;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $scheduleStrategy;

    /**
     * @var string
     */
    public $tenantVSwitchId;

    /**
     * @var string
     */
    public $tenantSecurityGroupId;

    /**
     * @var string
     */
    public $corePattern;

    /**
     * @var bool
     */
    public $shareProcessNamespace;

    /**
     * @var string
     */
    public $productOnEciMode;

    /**
     * @var string
     */
    public $secondaryENIPolicy;

    /**
     * @var bool
     */
    public $autoCreateEip;

    /**
     * @var int
     */
    public $eipBandwidth;

    /**
     * @var string
     */
    public $eipISP;

    /**
     * @var string
     */
    public $eipCommonBandwidthPackage;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $ingressBandwidth;

    /**
     * @var int
     */
    public $egressBandwidth;

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
    public $cpuOptionsNuma;

    /**
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var imageRegistryCredential[]
     */
    public $imageRegistryCredential;

    /**
     * @var container[]
     */
    public $container;

    /**
     * @var volume[]
     */
    public $volume;

    /**
     * @var initContainer[]
     */
    public $initContainer;

    /**
     * @var hostAliase[]
     */
    public $hostAliase;

    /**
     * @var arn[]
     */
    public $arn;

    /**
     * @var string[]
     */
    public $ntpServer;

    /**
     * @var acrRegistryInfo[]
     */
    public $acrRegistryInfo;
    protected $_name = [
        'dnsConfig'                     => 'DnsConfig',
        'securityContext'               => 'SecurityContext',
        'ownerId'                       => 'OwnerId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'ownerAccount'                  => 'OwnerAccount',
        'regionId'                      => 'RegionId',
        'zoneId'                        => 'ZoneId',
        'securityGroupId'               => 'SecurityGroupId',
        'vSwitchId'                     => 'VSwitchId',
        'containerGroupName'            => 'ContainerGroupName',
        'restartPolicy'                 => 'RestartPolicy',
        'eipInstanceId'                 => 'EipInstanceId',
        'cpu'                           => 'Cpu',
        'memory'                        => 'Memory',
        'resourceGroupId'               => 'ResourceGroupId',
        'dnsPolicy'                     => 'DnsPolicy',
        'clientToken'                   => 'ClientToken',
        'instanceType'                  => 'InstanceType',
        'slsEnable'                     => 'SlsEnable',
        'imageSnapshotId'               => 'ImageSnapshotId',
        'ramRoleName'                   => 'RamRoleName',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'autoMatchImageCache'           => 'AutoMatchImageCache',
        'vkClientVersion'               => 'VkClientVersion',
        'ipv6AddressCount'              => 'Ipv6AddressCount',
        'activeDeadlineSeconds'         => 'ActiveDeadlineSeconds',
        'spotStrategy'                  => 'SpotStrategy',
        'spotPriceLimit'                => 'SpotPriceLimit',
        'scheduleStrategy'              => 'ScheduleStrategy',
        'tenantVSwitchId'               => 'TenantVSwitchId',
        'tenantSecurityGroupId'         => 'TenantSecurityGroupId',
        'corePattern'                   => 'CorePattern',
        'shareProcessNamespace'         => 'ShareProcessNamespace',
        'productOnEciMode'              => 'ProductOnEciMode',
        'secondaryENIPolicy'            => 'SecondaryENIPolicy',
        'autoCreateEip'                 => 'AutoCreateEip',
        'eipBandwidth'                  => 'EipBandwidth',
        'eipISP'                        => 'EipISP',
        'eipCommonBandwidthPackage'     => 'EipCommonBandwidthPackage',
        'hostName'                      => 'HostName',
        'ingressBandwidth'              => 'IngressBandwidth',
        'egressBandwidth'               => 'EgressBandwidth',
        'cpuOptionsCore'                => 'CpuOptionsCore',
        'cpuOptionsThreadsPerCore'      => 'CpuOptionsThreadsPerCore',
        'cpuOptionsNuma'                => 'CpuOptionsNuma',
        'ephemeralStorage'              => 'EphemeralStorage',
        'tag'                           => 'Tag',
        'imageRegistryCredential'       => 'ImageRegistryCredential',
        'container'                     => 'Container',
        'volume'                        => 'Volume',
        'initContainer'                 => 'InitContainer',
        'hostAliase'                    => 'HostAliase',
        'arn'                           => 'Arn',
        'ntpServer'                     => 'NtpServer',
        'acrRegistryInfo'               => 'AcrRegistryInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
        }
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->containerGroupName) {
            $res['ContainerGroupName'] = $this->containerGroupName;
        }
        if (null !== $this->restartPolicy) {
            $res['RestartPolicy'] = $this->restartPolicy;
        }
        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->dnsPolicy) {
            $res['DnsPolicy'] = $this->dnsPolicy;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->slsEnable) {
            $res['SlsEnable'] = $this->slsEnable;
        }
        if (null !== $this->imageSnapshotId) {
            $res['ImageSnapshotId'] = $this->imageSnapshotId;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->terminationGracePeriodSeconds) {
            $res['TerminationGracePeriodSeconds'] = $this->terminationGracePeriodSeconds;
        }
        if (null !== $this->autoMatchImageCache) {
            $res['AutoMatchImageCache'] = $this->autoMatchImageCache;
        }
        if (null !== $this->vkClientVersion) {
            $res['VkClientVersion'] = $this->vkClientVersion;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->activeDeadlineSeconds) {
            $res['ActiveDeadlineSeconds'] = $this->activeDeadlineSeconds;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->scheduleStrategy) {
            $res['ScheduleStrategy'] = $this->scheduleStrategy;
        }
        if (null !== $this->tenantVSwitchId) {
            $res['TenantVSwitchId'] = $this->tenantVSwitchId;
        }
        if (null !== $this->tenantSecurityGroupId) {
            $res['TenantSecurityGroupId'] = $this->tenantSecurityGroupId;
        }
        if (null !== $this->corePattern) {
            $res['CorePattern'] = $this->corePattern;
        }
        if (null !== $this->shareProcessNamespace) {
            $res['ShareProcessNamespace'] = $this->shareProcessNamespace;
        }
        if (null !== $this->productOnEciMode) {
            $res['ProductOnEciMode'] = $this->productOnEciMode;
        }
        if (null !== $this->secondaryENIPolicy) {
            $res['SecondaryENIPolicy'] = $this->secondaryENIPolicy;
        }
        if (null !== $this->autoCreateEip) {
            $res['AutoCreateEip'] = $this->autoCreateEip;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->eipISP) {
            $res['EipISP'] = $this->eipISP;
        }
        if (null !== $this->eipCommonBandwidthPackage) {
            $res['EipCommonBandwidthPackage'] = $this->eipCommonBandwidthPackage;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ingressBandwidth) {
            $res['IngressBandwidth'] = $this->ingressBandwidth;
        }
        if (null !== $this->egressBandwidth) {
            $res['EgressBandwidth'] = $this->egressBandwidth;
        }
        if (null !== $this->cpuOptionsCore) {
            $res['CpuOptionsCore'] = $this->cpuOptionsCore;
        }
        if (null !== $this->cpuOptionsThreadsPerCore) {
            $res['CpuOptionsThreadsPerCore'] = $this->cpuOptionsThreadsPerCore;
        }
        if (null !== $this->cpuOptionsNuma) {
            $res['CpuOptionsNuma'] = $this->cpuOptionsNuma;
        }
        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageRegistryCredential) {
            $res['ImageRegistryCredential'] = [];
            if (null !== $this->imageRegistryCredential && \is_array($this->imageRegistryCredential)) {
                $n = 0;
                foreach ($this->imageRegistryCredential as $item) {
                    $res['ImageRegistryCredential'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->container) {
            $res['Container'] = [];
            if (null !== $this->container && \is_array($this->container)) {
                $n = 0;
                foreach ($this->container as $item) {
                    $res['Container'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->volume) {
            $res['Volume'] = [];
            if (null !== $this->volume && \is_array($this->volume)) {
                $n = 0;
                foreach ($this->volume as $item) {
                    $res['Volume'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->initContainer) {
            $res['InitContainer'] = [];
            if (null !== $this->initContainer && \is_array($this->initContainer)) {
                $n = 0;
                foreach ($this->initContainer as $item) {
                    $res['InitContainer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostAliase) {
            $res['HostAliase'] = [];
            if (null !== $this->hostAliase && \is_array($this->hostAliase)) {
                $n = 0;
                foreach ($this->hostAliase as $item) {
                    $res['HostAliase'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->arn) {
            $res['Arn'] = [];
            if (null !== $this->arn && \is_array($this->arn)) {
                $n = 0;
                foreach ($this->arn as $item) {
                    $res['Arn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ntpServer) {
            $res['NtpServer'] = $this->ntpServer;
        }
        if (null !== $this->acrRegistryInfo) {
            $res['AcrRegistryInfo'] = [];
            if (null !== $this->acrRegistryInfo && \is_array($this->acrRegistryInfo)) {
                $n = 0;
                foreach ($this->acrRegistryInfo as $item) {
                    $res['AcrRegistryInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateContainerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['DnsPolicy'])) {
            $model->dnsPolicy = $map['DnsPolicy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SlsEnable'])) {
            $model->slsEnable = $map['SlsEnable'];
        }
        if (isset($map['ImageSnapshotId'])) {
            $model->imageSnapshotId = $map['ImageSnapshotId'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['TerminationGracePeriodSeconds'])) {
            $model->terminationGracePeriodSeconds = $map['TerminationGracePeriodSeconds'];
        }
        if (isset($map['AutoMatchImageCache'])) {
            $model->autoMatchImageCache = $map['AutoMatchImageCache'];
        }
        if (isset($map['VkClientVersion'])) {
            $model->vkClientVersion = $map['VkClientVersion'];
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['ActiveDeadlineSeconds'])) {
            $model->activeDeadlineSeconds = $map['ActiveDeadlineSeconds'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['ScheduleStrategy'])) {
            $model->scheduleStrategy = $map['ScheduleStrategy'];
        }
        if (isset($map['TenantVSwitchId'])) {
            $model->tenantVSwitchId = $map['TenantVSwitchId'];
        }
        if (isset($map['TenantSecurityGroupId'])) {
            $model->tenantSecurityGroupId = $map['TenantSecurityGroupId'];
        }
        if (isset($map['CorePattern'])) {
            $model->corePattern = $map['CorePattern'];
        }
        if (isset($map['ShareProcessNamespace'])) {
            $model->shareProcessNamespace = $map['ShareProcessNamespace'];
        }
        if (isset($map['ProductOnEciMode'])) {
            $model->productOnEciMode = $map['ProductOnEciMode'];
        }
        if (isset($map['SecondaryENIPolicy'])) {
            $model->secondaryENIPolicy = $map['SecondaryENIPolicy'];
        }
        if (isset($map['AutoCreateEip'])) {
            $model->autoCreateEip = $map['AutoCreateEip'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['EipISP'])) {
            $model->eipISP = $map['EipISP'];
        }
        if (isset($map['EipCommonBandwidthPackage'])) {
            $model->eipCommonBandwidthPackage = $map['EipCommonBandwidthPackage'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['IngressBandwidth'])) {
            $model->ingressBandwidth = $map['IngressBandwidth'];
        }
        if (isset($map['EgressBandwidth'])) {
            $model->egressBandwidth = $map['EgressBandwidth'];
        }
        if (isset($map['CpuOptionsCore'])) {
            $model->cpuOptionsCore = $map['CpuOptionsCore'];
        }
        if (isset($map['CpuOptionsThreadsPerCore'])) {
            $model->cpuOptionsThreadsPerCore = $map['CpuOptionsThreadsPerCore'];
        }
        if (isset($map['CpuOptionsNuma'])) {
            $model->cpuOptionsNuma = $map['CpuOptionsNuma'];
        }
        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageRegistryCredential'])) {
            if (!empty($map['ImageRegistryCredential'])) {
                $model->imageRegistryCredential = [];
                $n                              = 0;
                foreach ($map['ImageRegistryCredential'] as $item) {
                    $model->imageRegistryCredential[$n++] = null !== $item ? imageRegistryCredential::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Container'])) {
            if (!empty($map['Container'])) {
                $model->container = [];
                $n                = 0;
                foreach ($map['Container'] as $item) {
                    $model->container[$n++] = null !== $item ? container::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Volume'])) {
            if (!empty($map['Volume'])) {
                $model->volume = [];
                $n             = 0;
                foreach ($map['Volume'] as $item) {
                    $model->volume[$n++] = null !== $item ? volume::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InitContainer'])) {
            if (!empty($map['InitContainer'])) {
                $model->initContainer = [];
                $n                    = 0;
                foreach ($map['InitContainer'] as $item) {
                    $model->initContainer[$n++] = null !== $item ? initContainer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostAliase'])) {
            if (!empty($map['HostAliase'])) {
                $model->hostAliase = [];
                $n                 = 0;
                foreach ($map['HostAliase'] as $item) {
                    $model->hostAliase[$n++] = null !== $item ? hostAliase::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n          = 0;
                foreach ($map['Arn'] as $item) {
                    $model->arn[$n++] = null !== $item ? arn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NtpServer'])) {
            if (!empty($map['NtpServer'])) {
                $model->ntpServer = $map['NtpServer'];
            }
        }
        if (isset($map['AcrRegistryInfo'])) {
            if (!empty($map['AcrRegistryInfo'])) {
                $model->acrRegistryInfo = [];
                $n                      = 0;
                foreach ($map['AcrRegistryInfo'] as $item) {
                    $model->acrRegistryInfo[$n++] = null !== $item ? acrRegistryInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
