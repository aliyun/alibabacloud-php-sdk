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
    public $computeCategory;

    /**
     * @description The instance ID.
     *
     * @example eci-bp1jrgfqqy54kg5hc****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The instance name.
     *
     * @example test
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
     * @description The number of vCPUs that are allocated to the elastic container instance.
     *
     * @example 2.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The time when the system created the elastic container instance after the system received the request. The time follows the RFC 3339 standard and must be in UTC.
     *
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The discount.
     *
     * @example 9
     *
     * @var int
     */
    public $discount;

    /**
     * @description The Domain Name System (DNS) settings.
     *
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @description The security context of the elastic container instance.
     *
     * @var eciSecurityContext
     */
    public $eciSecurityContext;

    /**
     * @description The ID of the elastic network interface (ENI).
     *
     * @example eni-bp14rzqi6fd8satm****
     *
     * @var string
     */
    public $eniInstanceId;

    /**
     * @description The size of the temporary storage space. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @description The events about the elastic container instance. A maximum of 50 events can be returned.
     *
     * @var events[]
     */
    public $events;

    /**
     * @description The time when the elastic container instance failed to run due to overdue payments. The time follows the RFC 3339 standard and must be in UTC.
     *
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The time when the instance failed to run. The time follows the RFC 3339 standard and must be in UTC.
     *
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $failedTime;

    /**
     * @description The hostname mapping of a container in the elastic container instance.
     *
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @description The information about the init containers.
     *
     * @var initContainers[]
     */
    public $initContainers;

    /**
     * @description The instance type of the Elastic Compute Service (ECS) instance that is used to create the elastic container instance.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The public IP address.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The IPv6 address.
     *
     * @example 2001:XXXX:4:4:4:4:4:4
     *
     * @var string
     */
    public $ipv6Address;

    /**
     * @description The memory size of the elastic container instance. Unit: GiB.
     *
     * @example 4.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the instance RAM role. You can use an instance RAM role to access both elastic container instances and ECS instances. For more information, see [Use the instance RAM role by calling APIs](~~61178~~).
     *
     * @example ram:PassRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-8db03793gfrz****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The restart policy of the elastic container instance. Valid values:
     *
     *   Never: never restarts the elastic container instance.
     *   Always: always restarts the elastic container instance.
     *   OnFailure: restarts the instance if it fails to run.
     *
     * @example Never
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description The ID of the security group to which the instance belongs.
     *
     * @example sg-bp12ujq5zpxuyjfo3o8r
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The maximum hourly price for the preemptible elastic container instance.
     *
     * This parameter is returned only if you set the SpotStrategy parameter to SpotWithPriceLimit.
     * @example 0.025
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The bidding policy for the instance. Valid values:
     *
     *   NoSpot (default): The instance is created as a regular pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance that has a maximum price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The status of the instance. Valid values:
     *
     *   Pending: The elastic container instance is being started.
     *   Running: The elastic container instance is running.
     *   Succeeded: The elastic container instance runs successfully.
     *   Failed: The elastic container instance fails to run.
     *   Scheduling: The elastic container instance is being created.
     *   ScheduleFailed: The elastic container instance fails to be created.
     *   Restarting: The elastic container instance is being restarted.
     *   Updating: The elastic container instance is being updated.
     *   Terminating: The elastic container instance is being terminated.
     *   Expired: The instance expired.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when all containers in the elastic container instance exit. The time follows the RFC 3339 standard and must be in UTC.
     *
     * @example 2019-12-11T04:33:42Z
     *
     * @var string
     */
    public $succeededTime;

    /**
     * @description The tags of the instance.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description This parameter is unavailable.
     *
     * @example i-xxx
     *
     * @var string
     */
    public $tenantEniInstanceId;

    /**
     * @description This parameter is unavailable.
     *
     * @example 10.10.XX.XX
     *
     * @var string
     */
    public $tenantEniIp;

    /**
     * @description This parameter is unavailable.
     *
     * @example sg-xxx
     *
     * @var string
     */
    public $tenantSecurityGroupId;

    /**
     * @description This parameter is unavailable.
     *
     * @example vsw-xxx
     *
     * @var string
     */
    public $tenantVSwitchId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1vzjjflab6wvjox****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The information about the volumes.
     *
     * @var volumes[]
     */
    public $volumes;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the elastic container instances belong.
     *
     * @example vpc-1vzjjflab6wvjox****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone to which the instance belongs.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'computeCategory'       => 'ComputeCategory',
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
