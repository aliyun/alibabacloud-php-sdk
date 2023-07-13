<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\dnsConfig;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\eciSecurityContext;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\events;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\hostAliases;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\initContainers;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\tags;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\volumes;
use AlibabaCloud\Tea\Model;

class containerGroups extends Model
{
    /**
     * @example eci-bp1jrgfqqy54kg5hc****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @example test
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @var containers[]
     */
    public $containers;

    /**
     * @example 2
     *
     * @var float
     */
    public $cpu;

    /**
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example 9
     *
     * @var int
     */
    public $discount;

    /**
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @var eciSecurityContext
     */
    public $eciSecurityContext;

    /**
     * @example eni-bp14rzqi6fd8satm****
     *
     * @var string
     */
    public $eniInstanceId;

    /**
     * @example 20
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example 2018-08-02T15:00:00Z
     *
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
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example 2001:XXXX:4:4:4:4:4:4
     *
     * @var string
     */
    public $ipv6Address;

    /**
     * @example 4.0
     *
     * @var float
     */
    public $memory;

    /**
     * @example ram:PassRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-aekzh43v*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example Never
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @example sg-bp12ujq5zpxuyjfo3o8r
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example 0.025
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 2019-12-11T04:33:42Z
     *
     * @var string
     */
    public $succeededTime;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example i-xxx
     *
     * @var string
     */
    public $tenantEniInstanceId;

    /**
     * @example 10.10.XX.XX
     *
     * @var string
     */
    public $tenantEniIp;

    /**
     * @example sg-xxx
     *
     * @var string
     */
    public $tenantSecurityGroupId;

    /**
     * @example vsw-xxx
     *
     * @var string
     */
    public $tenantVSwitchId;

    /**
     * @example vsw-bp1vzjjflab6wvjox****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @var volumes[]
     */
    public $volumes;

    /**
     * @example vpc-1vzjjflab6wvjox****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'containerGroupId'      => 'ContainerGroupId',
        'containerGroupName'    => 'ContainerGroupName',
        'containers'            => 'Containers',
        'cpu'                   => 'Cpu',
        'creationTime'          => 'CreationTime',
        'discount'              => 'Discount',
        'dnsConfig'             => 'DnsConfig',
        'eciSecurityContext'    => 'EciSecurityContext',
        'eniInstanceId'         => 'EniInstanceId',
        'ephemeralStorage'      => 'EphemeralStorage',
        'events'                => 'Events',
        'expiredTime'           => 'ExpiredTime',
        'failedTime'            => 'FailedTime',
        'hostAliases'           => 'HostAliases',
        'initContainers'        => 'InitContainers',
        'instanceType'          => 'InstanceType',
        'internetIp'            => 'InternetIp',
        'intranetIp'            => 'IntranetIp',
        'ipv6Address'           => 'Ipv6Address',
        'memory'                => 'Memory',
        'ramRoleName'           => 'RamRoleName',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'restartPolicy'         => 'RestartPolicy',
        'securityGroupId'       => 'SecurityGroupId',
        'spotPriceLimit'        => 'SpotPriceLimit',
        'spotStrategy'          => 'SpotStrategy',
        'status'                => 'Status',
        'succeededTime'         => 'SucceededTime',
        'tags'                  => 'Tags',
        'tenantEniInstanceId'   => 'TenantEniInstanceId',
        'tenantEniIp'           => 'TenantEniIp',
        'tenantSecurityGroupId' => 'TenantSecurityGroupId',
        'tenantVSwitchId'       => 'TenantVSwitchId',
        'vSwitchId'             => 'VSwitchId',
        'volumes'               => 'Volumes',
        'vpcId'                 => 'VpcId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
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
            $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
        }
        if (null !== $this->eciSecurityContext) {
            $res['EciSecurityContext'] = null !== $this->eciSecurityContext ? $this->eciSecurityContext->toMap() : null;
        }
        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }
        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
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
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->failedTime) {
            $res['FailedTime'] = $this->failedTime;
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
        if (null !== $this->initContainers) {
            $res['InitContainers'] = [];
            if (null !== $this->initContainers && \is_array($this->initContainers)) {
                $n = 0;
                foreach ($this->initContainers as $item) {
                    $res['InitContainers'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Volumes'] = [];
            if (null !== $this->volumes && \is_array($this->volumes)) {
                $n = 0;
                foreach ($this->volumes as $item) {
                    $res['Volumes'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return containerGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
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
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
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
                $n                  = 0;
                foreach ($map['HostAliases'] as $item) {
                    $model->hostAliases[$n++] = null !== $item ? hostAliases::fromMap($item) : $item;
                }
            }
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
                $n              = 0;
                foreach ($map['Volumes'] as $item) {
                    $model->volumes[$n++] = null !== $item ? volumes::fromMap($item) : $item;
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
