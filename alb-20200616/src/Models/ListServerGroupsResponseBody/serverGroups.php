<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups\connectionDrainConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups\healthCheckConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups\slowStartConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups\stickySessionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups\tags;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups\uchConfig;
use AlibabaCloud\Tea\Model;

class serverGroups extends Model
{
    /**
     * @description Indicates whether configuration management is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $configManagedEnabled;

    /**
     * @description The configurations of connection draining.
     *
     * >
     *
     *   By default, connection draining is disabled. To enable connection draining, contact your account manager.
     *
     *   Basic ALB instances do not support connection draining. Standard and WAF-enabled ALB instances support connection draining.
     *
     *   Server groups of the instance and IP types support connection draining. Server groups of the Function Compute type do not support connection draining.
     *
     * @var connectionDrainConfig
     */
    public $connectionDrainConfig;

    /**
     * @description The time when the resource was created.
     *
     * @example 2022-07-02T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The health check configurations.
     *
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @description Indicates whether IPv6 is supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $ipv6Enabled;

    /**
     * @description The backend protocol. Valid values:
     *
     *   **HTTP**: allows you to associate HTTPS, HTTP, or QUIC listeners with backend servers.
     *   **HTTPS**: allows you to associate HTTPS listeners with backend servers.
     *   **GRPC**: allows you to associate HTTPS and QUIC listeners with backend servers.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the ALB instance associated with the server group.
     *
     * @var string[]
     */
    public $relatedLoadBalancerIds;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **Wrr**: weighted round-robin. Backend servers with higher weights receive more requests than backend servers with lower weights.
     *   **Wlc**: weighted least connections. Requests are distributed based on the weight and load of each backend server. The load refers to the number of connections on a backend server. If multiple backend servers have the same weight, requests are forwarded to the backend server with the least number of connections.
     *   **Sch**: consistent hashing. Requests that have the same hash factors are distributed to the same backend server. If you do not specify the UchConfig parameter, the source IP address is used as the hash factor by default. Requests that are from the same IP address are distributed to the same backend server. If you specify the UchConfig parameter, the URL string is used as the hash factor. Requests that have the same URL string are distributed to the same backend server.
     *
     * @example Wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The number of backend servers in the server group.
     *
     * @example 1
     *
     * @var int
     */
    public $serverCount;

    /**
     * @description The server group ID.
     *
     * @example sgp-cige6j****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The server group name.
     *
     * @example Group3
     *
     * @var string
     */
    public $serverGroupName;

    /**
     * @description The status of the server group. Valid values:
     *
     *   **Creating**.
     *   **Available**
     *   **Configuring**
     *
     * @example Available
     *
     * @var string
     */
    public $serverGroupStatus;

    /**
     * @description The server group type. Valid values:
     *
     *   **Instance**: instances, including ECS instances, ENIs, and elastic container instances.
     *   **Ip**: IP addresses.
     *   **Fc**: Function Compute
     *
     * @example Instance
     *
     * @var string
     */
    public $serverGroupType;

    /**
     * @description The name of the server group.
     *
     * @example test
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The configurations of slow starts.
     *
     * >
     *
     *   Basic ALB instances do not support slow starts. Standard and WAF-enabled ALB instances support slow starts.
     *
     *   Server groups of the instance and IP types support slow starts. Server groups of the Function Compute type do not support slow starts.
     *
     *   Slow start is supported only by the weighted round-robin scheduling algorithm.
     *
     * @var slowStartConfig
     */
    public $slowStartConfig;

    /**
     * @description The configuration of session persistence.
     *
     * @var stickySessionConfig
     */
    public $stickySessionConfig;

    /**
     * @description The tags that are added to the server group.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The configuration of consistent hashing based on URLs.
     *
     * @var uchConfig
     */
    public $uchConfig;

    /**
     * @description Indicates whether persistent TCP connections are enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $upstreamKeepaliveEnabled;

    /**
     * @description The ID of the VPC to which the ALB instance belongs.
     *
     * @example vpc-bp15zckdt37pq72zv****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'configManagedEnabled'     => 'ConfigManagedEnabled',
        'connectionDrainConfig'    => 'ConnectionDrainConfig',
        'createTime'               => 'CreateTime',
        'healthCheckConfig'        => 'HealthCheckConfig',
        'ipv6Enabled'              => 'Ipv6Enabled',
        'protocol'                 => 'Protocol',
        'relatedLoadBalancerIds'   => 'RelatedLoadBalancerIds',
        'resourceGroupId'          => 'ResourceGroupId',
        'scheduler'                => 'Scheduler',
        'serverCount'              => 'ServerCount',
        'serverGroupId'            => 'ServerGroupId',
        'serverGroupName'          => 'ServerGroupName',
        'serverGroupStatus'        => 'ServerGroupStatus',
        'serverGroupType'          => 'ServerGroupType',
        'serviceName'              => 'ServiceName',
        'slowStartConfig'          => 'SlowStartConfig',
        'stickySessionConfig'      => 'StickySessionConfig',
        'tags'                     => 'Tags',
        'uchConfig'                => 'UchConfig',
        'upstreamKeepaliveEnabled' => 'UpstreamKeepaliveEnabled',
        'vpcId'                    => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configManagedEnabled) {
            $res['ConfigManagedEnabled'] = $this->configManagedEnabled;
        }
        if (null !== $this->connectionDrainConfig) {
            $res['ConnectionDrainConfig'] = null !== $this->connectionDrainConfig ? $this->connectionDrainConfig->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->ipv6Enabled) {
            $res['Ipv6Enabled'] = $this->ipv6Enabled;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->relatedLoadBalancerIds) {
            $res['RelatedLoadBalancerIds'] = $this->relatedLoadBalancerIds;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->serverCount) {
            $res['ServerCount'] = $this->serverCount;
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->serverGroupName) {
            $res['ServerGroupName'] = $this->serverGroupName;
        }
        if (null !== $this->serverGroupStatus) {
            $res['ServerGroupStatus'] = $this->serverGroupStatus;
        }
        if (null !== $this->serverGroupType) {
            $res['ServerGroupType'] = $this->serverGroupType;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->slowStartConfig) {
            $res['SlowStartConfig'] = null !== $this->slowStartConfig ? $this->slowStartConfig->toMap() : null;
        }
        if (null !== $this->stickySessionConfig) {
            $res['StickySessionConfig'] = null !== $this->stickySessionConfig ? $this->stickySessionConfig->toMap() : null;
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
        if (null !== $this->uchConfig) {
            $res['UchConfig'] = null !== $this->uchConfig ? $this->uchConfig->toMap() : null;
        }
        if (null !== $this->upstreamKeepaliveEnabled) {
            $res['UpstreamKeepaliveEnabled'] = $this->upstreamKeepaliveEnabled;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigManagedEnabled'])) {
            $model->configManagedEnabled = $map['ConfigManagedEnabled'];
        }
        if (isset($map['ConnectionDrainConfig'])) {
            $model->connectionDrainConfig = connectionDrainConfig::fromMap($map['ConnectionDrainConfig']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }
        if (isset($map['Ipv6Enabled'])) {
            $model->ipv6Enabled = $map['Ipv6Enabled'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RelatedLoadBalancerIds'])) {
            if (!empty($map['RelatedLoadBalancerIds'])) {
                $model->relatedLoadBalancerIds = $map['RelatedLoadBalancerIds'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServerCount'])) {
            $model->serverCount = $map['ServerCount'];
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }
        if (isset($map['ServerGroupStatus'])) {
            $model->serverGroupStatus = $map['ServerGroupStatus'];
        }
        if (isset($map['ServerGroupType'])) {
            $model->serverGroupType = $map['ServerGroupType'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SlowStartConfig'])) {
            $model->slowStartConfig = slowStartConfig::fromMap($map['SlowStartConfig']);
        }
        if (isset($map['StickySessionConfig'])) {
            $model->stickySessionConfig = stickySessionConfig::fromMap($map['StickySessionConfig']);
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
        if (isset($map['UchConfig'])) {
            $model->uchConfig = uchConfig::fromMap($map['UchConfig']);
        }
        if (isset($map['UpstreamKeepaliveEnabled'])) {
            $model->upstreamKeepaliveEnabled = $map['UpstreamKeepaliveEnabled'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
