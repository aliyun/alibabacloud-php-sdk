<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\dnsConfig;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\eciSecurityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\events;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\hostAliases;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\tags;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\volumes;

class containerGroups extends Model
{
    /**
     * @var string
     */
    public $computeCategory;

    /**
     * @var string
     */
    public $containerGroupId;

    /**
     * @var string
     */
    public $containerGroupName;

    /**
     * @var containers[]
     */
    public $containers;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $discount;

    /**
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @var string
     */
    public $dnsPolicy;

    /**
     * @var eciSecurityContext
     */
    public $eciSecurityContext;

    /**
     * @var string
     */
    public $eniInstanceId;

    /**
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $failedTime;

    /**
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @var initContainers[]
     */
    public $initContainers;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $ipv6Address;

    /**
     * @var float
     */
    public $memory;

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
    public $securityGroupId;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $succeededTime;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $tenantEniInstanceId;

    /**
     * @var string
     */
    public $tenantEniIp;

    /**
     * @var string
     */
    public $tenantSecurityGroupId;

    /**
     * @var string
     */
    public $tenantVSwitchId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var volumes[]
     */
    public $volumes;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'computeCategory' => 'ComputeCategory',
        'containerGroupId' => 'ContainerGroupId',
        'containerGroupName' => 'ContainerGroupName',
        'containers' => 'Containers',
        'cpu' => 'Cpu',
        'creationTime' => 'CreationTime',
        'discount' => 'Discount',
        'dnsConfig' => 'DnsConfig',
        'dnsPolicy' => 'DnsPolicy',
        'eciSecurityContext' => 'EciSecurityContext',
        'eniInstanceId' => 'EniInstanceId',
        'ephemeralStorage' => 'EphemeralStorage',
        'events' => 'Events',
        'expiredTime' => 'ExpiredTime',
        'failedTime' => 'FailedTime',
        'hostAliases' => 'HostAliases',
        'initContainers' => 'InitContainers',
        'instanceType' => 'InstanceType',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'ipv6Address' => 'Ipv6Address',
        'memory' => 'Memory',
        'ramRoleName' => 'RamRoleName',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'restartPolicy' => 'RestartPolicy',
        'securityGroupId' => 'SecurityGroupId',
        'spotPriceLimit' => 'SpotPriceLimit',
        'spotStrategy' => 'SpotStrategy',
        'status' => 'Status',
        'succeededTime' => 'SucceededTime',
        'tags' => 'Tags',
        'tenantEniInstanceId' => 'TenantEniInstanceId',
        'tenantEniIp' => 'TenantEniIp',
        'tenantSecurityGroupId' => 'TenantSecurityGroupId',
        'tenantVSwitchId' => 'TenantVSwitchId',
        'vSwitchId' => 'VSwitchId',
        'volumes' => 'Volumes',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->containers)) {
            Model::validateArray($this->containers);
        }
        if (null !== $this->dnsConfig) {
            $this->dnsConfig->validate();
        }
        if (null !== $this->eciSecurityContext) {
            $this->eciSecurityContext->validate();
        }
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (\is_array($this->hostAliases)) {
            Model::validateArray($this->hostAliases);
        }
        if (\is_array($this->initContainers)) {
            Model::validateArray($this->initContainers);
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
        if (null !== $this->computeCategory) {
            $res['ComputeCategory'] = $this->computeCategory;
        }

        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }

        if (null !== $this->containerGroupName) {
            $res['ContainerGroupName'] = $this->containerGroupName;
        }

        if (null !== $this->containers) {
            if (\is_array($this->containers)) {
                $res['Containers'] = [];
                $n1 = 0;
                foreach ($this->containers as $item1) {
                    $res['Containers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->discount) {
            $res['Discount'] = $this->discount;
        }

        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toArray($noStream) : $this->dnsConfig;
        }

        if (null !== $this->dnsPolicy) {
            $res['DnsPolicy'] = $this->dnsPolicy;
        }

        if (null !== $this->eciSecurityContext) {
            $res['EciSecurityContext'] = null !== $this->eciSecurityContext ? $this->eciSecurityContext->toArray($noStream) : $this->eciSecurityContext;
        }

        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }

        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }

        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['Events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['Events'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->failedTime) {
            $res['FailedTime'] = $this->failedTime;
        }

        if (null !== $this->hostAliases) {
            if (\is_array($this->hostAliases)) {
                $res['HostAliases'] = [];
                $n1 = 0;
                foreach ($this->hostAliases as $item1) {
                    $res['HostAliases'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->initContainers) {
            if (\is_array($this->initContainers)) {
                $res['InitContainers'] = [];
                $n1 = 0;
                foreach ($this->initContainers as $item1) {
                    $res['InitContainers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->succeededTime) {
            $res['SucceededTime'] = $this->succeededTime;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenantEniInstanceId) {
            $res['TenantEniInstanceId'] = $this->tenantEniInstanceId;
        }

        if (null !== $this->tenantEniIp) {
            $res['TenantEniIp'] = $this->tenantEniIp;
        }

        if (null !== $this->tenantSecurityGroupId) {
            $res['TenantSecurityGroupId'] = $this->tenantSecurityGroupId;
        }

        if (null !== $this->tenantVSwitchId) {
            $res['TenantVSwitchId'] = $this->tenantVSwitchId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->volumes) {
            if (\is_array($this->volumes)) {
                $res['Volumes'] = [];
                $n1 = 0;
                foreach ($this->volumes as $item1) {
                    $res['Volumes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ComputeCategory'])) {
            $model->computeCategory = $map['ComputeCategory'];
        }

        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }

        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }

        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n1 = 0;
                foreach ($map['Containers'] as $item1) {
                    $model->containers[$n1++] = containers::fromMap($item1);
                }
            }
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Discount'])) {
            $model->discount = $map['Discount'];
        }

        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }

        if (isset($map['DnsPolicy'])) {
            $model->dnsPolicy = $map['DnsPolicy'];
        }

        if (isset($map['EciSecurityContext'])) {
            $model->eciSecurityContext = eciSecurityContext::fromMap($map['EciSecurityContext']);
        }

        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
        }

        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }

        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['Events'] as $item1) {
                    $model->events[$n1++] = events::fromMap($item1);
                }
            }
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['FailedTime'])) {
            $model->failedTime = $map['FailedTime'];
        }

        if (isset($map['HostAliases'])) {
            if (!empty($map['HostAliases'])) {
                $model->hostAliases = [];
                $n1 = 0;
                foreach ($map['HostAliases'] as $item1) {
                    $model->hostAliases[$n1++] = hostAliases::fromMap($item1);
                }
            }
        }

        if (isset($map['InitContainers'])) {
            if (!empty($map['InitContainers'])) {
                $model->initContainers = [];
                $n1 = 0;
                foreach ($map['InitContainers'] as $item1) {
                    $model->initContainers[$n1++] = initContainers::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
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

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SucceededTime'])) {
            $model->succeededTime = $map['SucceededTime'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TenantEniInstanceId'])) {
            $model->tenantEniInstanceId = $map['TenantEniInstanceId'];
        }

        if (isset($map['TenantEniIp'])) {
            $model->tenantEniIp = $map['TenantEniIp'];
        }

        if (isset($map['TenantSecurityGroupId'])) {
            $model->tenantSecurityGroupId = $map['TenantSecurityGroupId'];
        }

        if (isset($map['TenantVSwitchId'])) {
            $model->tenantVSwitchId = $map['TenantVSwitchId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['Volumes'])) {
            if (!empty($map['Volumes'])) {
                $model->volumes = [];
                $n1 = 0;
                foreach ($map['Volumes'] as $item1) {
                    $model->volumes[$n1++] = volumes::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
