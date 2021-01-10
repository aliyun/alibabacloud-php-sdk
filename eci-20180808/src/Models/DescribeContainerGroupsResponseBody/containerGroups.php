<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\dnsConfig;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\eciSecurityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\events;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\hostAliases;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\tags;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\volumes;
use AlibabaCloud\Tea\Model;

class containerGroups extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $tenantSecurityGroupId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @var string
     */
    public $succeededTime;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @var string
     */
    public $tenantEniInstanceId;

    /**
     * @var int
     */
    public $discount;

    /**
     * @var string
     */
    public $restartPolicy;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $tenantVSwitchId;

    /**
     * @var containers[]
     */
    public $containers;

    /**
     * @var string
     */
    public $eniInstanceId;

    /**
     * @var initContainers[]
     */
    public $initContainers;

    /**
     * @var string
     */
    public $containerGroupId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ipv6Address;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @var volumes[]
     */
    public $volumes;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $containerGroupName;

    /**
     * @var eciSecurityContext
     */
    public $eciSecurityContext;

    /**
     * @var string
     */
    public $failedTime;
    protected $_name = [
        'status'                => 'Status',
        'creationTime'          => 'CreationTime',
        'vpcId'                 => 'VpcId',
        'internetIp'            => 'InternetIp',
        'tenantSecurityGroupId' => 'TenantSecurityGroupId',
        'securityGroupId'       => 'SecurityGroupId',
        'hostAliases'           => 'HostAliases',
        'tags'                  => 'Tags',
        'events'                => 'Events',
        'succeededTime'         => 'SucceededTime',
        'spotStrategy'          => 'SpotStrategy',
        'ephemeralStorage'      => 'EphemeralStorage',
        'tenantEniInstanceId'   => 'TenantEniInstanceId',
        'discount'              => 'Discount',
        'restartPolicy'         => 'RestartPolicy',
        'memory'                => 'Memory',
        'tenantVSwitchId'       => 'TenantVSwitchId',
        'containers'            => 'Containers',
        'eniInstanceId'         => 'EniInstanceId',
        'initContainers'        => 'InitContainers',
        'containerGroupId'      => 'ContainerGroupId',
        'instanceType'          => 'InstanceType',
        'ipv6Address'           => 'Ipv6Address',
        'intranetIp'            => 'IntranetIp',
        'regionId'              => 'RegionId',
        'dnsConfig'             => 'DnsConfig',
        'volumes'               => 'Volumes',
        'ramRoleName'           => 'RamRoleName',
        'vSwitchId'             => 'VSwitchId',
        'cpu'                   => 'Cpu',
        'expiredTime'           => 'ExpiredTime',
        'resourceGroupId'       => 'ResourceGroupId',
        'zoneId'                => 'ZoneId',
        'containerGroupName'    => 'ContainerGroupName',
        'eciSecurityContext'    => 'EciSecurityContext',
        'failedTime'            => 'FailedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->tenantSecurityGroupId) {
            $res['TenantSecurityGroupId'] = $this->tenantSecurityGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->events) {
            $res['Events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['Events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->succeededTime) {
            $res['SucceededTime'] = $this->succeededTime;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }
        if (null !== $this->tenantEniInstanceId) {
            $res['TenantEniInstanceId'] = $this->tenantEniInstanceId;
        }
        if (null !== $this->discount) {
            $res['Discount'] = $this->discount;
        }
        if (null !== $this->restartPolicy) {
            $res['RestartPolicy'] = $this->restartPolicy;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->tenantVSwitchId) {
            $res['TenantVSwitchId'] = $this->tenantVSwitchId;
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
        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
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
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
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
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->containerGroupName) {
            $res['ContainerGroupName'] = $this->containerGroupName;
        }
        if (null !== $this->eciSecurityContext) {
            $res['EciSecurityContext'] = null !== $this->eciSecurityContext ? $this->eciSecurityContext->toMap() : null;
        }
        if (null !== $this->failedTime) {
            $res['FailedTime'] = $this->failedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['TenantSecurityGroupId'])) {
            $model->tenantSecurityGroupId = $map['TenantSecurityGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SucceededTime'])) {
            $model->succeededTime = $map['SucceededTime'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }
        if (isset($map['TenantEniInstanceId'])) {
            $model->tenantEniInstanceId = $map['TenantEniInstanceId'];
        }
        if (isset($map['Discount'])) {
            $model->discount = $map['Discount'];
        }
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['TenantVSwitchId'])) {
            $model->tenantVSwitchId = $map['TenantVSwitchId'];
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
        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
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
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
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
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }
        if (isset($map['EciSecurityContext'])) {
            $model->eciSecurityContext = eciSecurityContext::fromMap($map['EciSecurityContext']);
        }
        if (isset($map['FailedTime'])) {
            $model->failedTime = $map['FailedTime'];
        }

        return $model;
    }
}
