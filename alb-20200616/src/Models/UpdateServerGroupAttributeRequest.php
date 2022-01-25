<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\healthCheckConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\stickySessionConfig;
use AlibabaCloud\Tea\Model;

class UpdateServerGroupAttributeRequest extends Model
{
    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description  是否只预检此次请求
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 健康检查配置
     *
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @description 调度策略
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description 服务器组Id
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description Acl名称
     *
     * @var string
     */
    public $serverGroupName;

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
    protected $_name = [
        'clientToken'         => 'ClientToken',
        'dryRun'              => 'DryRun',
        'healthCheckConfig'   => 'HealthCheckConfig',
        'scheduler'           => 'Scheduler',
        'serverGroupId'       => 'ServerGroupId',
        'serverGroupName'     => 'ServerGroupName',
        'serviceName'         => 'ServiceName',
        'stickySessionConfig' => 'StickySessionConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->serverGroupName) {
            $res['ServerGroupName'] = $this->serverGroupName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->stickySessionConfig) {
            $res['StickySessionConfig'] = null !== $this->stickySessionConfig ? $this->stickySessionConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServerGroupAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StickySessionConfig'])) {
            $model->stickySessionConfig = stickySessionConfig::fromMap($map['StickySessionConfig']);
        }

        return $model;
    }
}
