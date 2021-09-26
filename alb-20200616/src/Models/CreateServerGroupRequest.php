<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\healthCheckConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\stickySessionConfig;
use AlibabaCloud\Tea\Model;

class CreateServerGroupRequest extends Model
{
    /**
     * @description 服务器组名称
     *
     * @var string
     */
    public $serverGroupName;

    /**
     * @description 服务器组类型
     *
     * @var string
     */
    public $serverGroupType;

    /**
     * @description VpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description 调度策略
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description 后端协议类型
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
     * @description 健康检查配置
     *
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @description 会话保持配置
     *
     * @var stickySessionConfig
     */
    public $stickySessionConfig;

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
    protected $_name = [
        'serverGroupName'     => 'ServerGroupName',
        'serverGroupType'     => 'ServerGroupType',
        'vpcId'               => 'VpcId',
        'scheduler'           => 'Scheduler',
        'protocol'            => 'Protocol',
        'resourceGroupId'     => 'ResourceGroupId',
        'healthCheckConfig'   => 'HealthCheckConfig',
        'stickySessionConfig' => 'StickySessionConfig',
        'clientToken'         => 'ClientToken',
        'dryRun'              => 'DryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverGroupName) {
            $res['ServerGroupName'] = $this->serverGroupName;
        }
        if (null !== $this->serverGroupType) {
            $res['ServerGroupType'] = $this->serverGroupType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->stickySessionConfig) {
            $res['StickySessionConfig'] = null !== $this->stickySessionConfig ? $this->stickySessionConfig->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }
        if (isset($map['ServerGroupType'])) {
            $model->serverGroupType = $map['ServerGroupType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }
        if (isset($map['StickySessionConfig'])) {
            $model->stickySessionConfig = stickySessionConfig::fromMap($map['StickySessionConfig']);
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        return $model;
    }
}
