<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\connectionDrainConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\healthCheckConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\slowStartConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\stickySessionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest\uchConfig;

class UpdateServerGroupAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var connectionDrainConfig
     */
    public $connectionDrainConfig;
    /**
     * @var bool
     */
    public $crossZoneEnabled;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var healthCheckConfig
     */
    public $healthCheckConfig;
    /**
     * @var string
     */
    public $scheduler;
    /**
     * @var string
     */
    public $serverGroupId;
    /**
     * @var string
     */
    public $serverGroupName;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var slowStartConfig
     */
    public $slowStartConfig;
    /**
     * @var stickySessionConfig
     */
    public $stickySessionConfig;
    /**
     * @var uchConfig
     */
    public $uchConfig;
    /**
     * @var bool
     */
    public $upstreamKeepaliveEnabled;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'connectionDrainConfig'    => 'ConnectionDrainConfig',
        'crossZoneEnabled'         => 'CrossZoneEnabled',
        'dryRun'                   => 'DryRun',
        'healthCheckConfig'        => 'HealthCheckConfig',
        'scheduler'                => 'Scheduler',
        'serverGroupId'            => 'ServerGroupId',
        'serverGroupName'          => 'ServerGroupName',
        'serviceName'              => 'ServiceName',
        'slowStartConfig'          => 'SlowStartConfig',
        'stickySessionConfig'      => 'StickySessionConfig',
        'uchConfig'                => 'UchConfig',
        'upstreamKeepaliveEnabled' => 'UpstreamKeepaliveEnabled',
    ];

    public function validate()
    {
        if (null !== $this->connectionDrainConfig) {
            $this->connectionDrainConfig->validate();
        }
        if (null !== $this->healthCheckConfig) {
            $this->healthCheckConfig->validate();
        }
        if (null !== $this->slowStartConfig) {
            $this->slowStartConfig->validate();
        }
        if (null !== $this->stickySessionConfig) {
            $this->stickySessionConfig->validate();
        }
        if (null !== $this->uchConfig) {
            $this->uchConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->connectionDrainConfig) {
            $res['ConnectionDrainConfig'] = null !== $this->connectionDrainConfig ? $this->connectionDrainConfig->toArray($noStream) : $this->connectionDrainConfig;
        }

        if (null !== $this->crossZoneEnabled) {
            $res['CrossZoneEnabled'] = $this->crossZoneEnabled;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toArray($noStream) : $this->healthCheckConfig;
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

        if (null !== $this->slowStartConfig) {
            $res['SlowStartConfig'] = null !== $this->slowStartConfig ? $this->slowStartConfig->toArray($noStream) : $this->slowStartConfig;
        }

        if (null !== $this->stickySessionConfig) {
            $res['StickySessionConfig'] = null !== $this->stickySessionConfig ? $this->stickySessionConfig->toArray($noStream) : $this->stickySessionConfig;
        }

        if (null !== $this->uchConfig) {
            $res['UchConfig'] = null !== $this->uchConfig ? $this->uchConfig->toArray($noStream) : $this->uchConfig;
        }

        if (null !== $this->upstreamKeepaliveEnabled) {
            $res['UpstreamKeepaliveEnabled'] = $this->upstreamKeepaliveEnabled;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConnectionDrainConfig'])) {
            $model->connectionDrainConfig = connectionDrainConfig::fromMap($map['ConnectionDrainConfig']);
        }

        if (isset($map['CrossZoneEnabled'])) {
            $model->crossZoneEnabled = $map['CrossZoneEnabled'];
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

        if (isset($map['SlowStartConfig'])) {
            $model->slowStartConfig = slowStartConfig::fromMap($map['SlowStartConfig']);
        }

        if (isset($map['StickySessionConfig'])) {
            $model->stickySessionConfig = stickySessionConfig::fromMap($map['StickySessionConfig']);
        }

        if (isset($map['UchConfig'])) {
            $model->uchConfig = uchConfig::fromMap($map['UchConfig']);
        }

        if (isset($map['UpstreamKeepaliveEnabled'])) {
            $model->upstreamKeepaliveEnabled = $map['UpstreamKeepaliveEnabled'];
        }

        return $model;
    }
}
