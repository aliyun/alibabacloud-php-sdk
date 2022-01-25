<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups\healthCheckConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups\stickySessionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups\tags;
use AlibabaCloud\Tea\Model;

class serverGroups extends Model
{
    /**
     * @description 是否开启配置管理
     *
     * @var bool
     */
    public $configManagedEnabled;

    /**
     * @description 健康检查配置
     *
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @description 是否支持Ipv6
     *
     * @var bool
     */
    public $ipv6Enabled;

    /**
     * @description 服务器组协议
     *
     * @var string
     */
    public $protocol;

    /**
     * @description 资源组id
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 调度策略
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description 服务器组内服务器数量
     *
     * @var int
     */
    public $serverCount;

    /**
     * @description 服务器组Id
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description 服务器组名称
     *
     * @var string
     */
    public $serverGroupName;

    /**
     * @description 服务器组状态
     *
     * @var string
     */
    public $serverGroupStatus;

    /**
     * @description 服务器组类型
     *
     * @var string
     */
    public $serverGroupType;

    /**
     * @description 服务器名称
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 会话保持配置
     *
     * @var stickySessionConfig
     */
    public $stickySessionConfig;

    /**
     * @description 标签列表
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description 是否开启后端长链接
     *
     * @var bool
     */
    public $upstreamKeepaliveEnabled;

    /**
     * @description 服务器组所在VpcId
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'configManagedEnabled'     => 'ConfigManagedEnabled',
        'healthCheckConfig'        => 'HealthCheckConfig',
        'ipv6Enabled'              => 'Ipv6Enabled',
        'protocol'                 => 'Protocol',
        'resourceGroupId'          => 'ResourceGroupId',
        'scheduler'                => 'Scheduler',
        'serverCount'              => 'ServerCount',
        'serverGroupId'            => 'ServerGroupId',
        'serverGroupName'          => 'ServerGroupName',
        'serverGroupStatus'        => 'ServerGroupStatus',
        'serverGroupType'          => 'ServerGroupType',
        'serviceName'              => 'ServiceName',
        'stickySessionConfig'      => 'StickySessionConfig',
        'tags'                     => 'Tags',
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
        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->ipv6Enabled) {
            $res['Ipv6Enabled'] = $this->ipv6Enabled;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }
        if (isset($map['Ipv6Enabled'])) {
            $model->ipv6Enabled = $map['Ipv6Enabled'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
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
        if (isset($map['UpstreamKeepaliveEnabled'])) {
            $model->upstreamKeepaliveEnabled = $map['UpstreamKeepaliveEnabled'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
