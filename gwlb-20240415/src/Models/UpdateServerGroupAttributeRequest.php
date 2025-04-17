<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateServerGroupAttributeRequest\connectionDrainConfig;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateServerGroupAttributeRequest\healthCheckConfig;

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
    public $serverFailoverMode;

    /**
     * @var string
     */
    public $serverGroupId;

    /**
     * @var string
     */
    public $serverGroupName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'connectionDrainConfig' => 'ConnectionDrainConfig',
        'dryRun' => 'DryRun',
        'healthCheckConfig' => 'HealthCheckConfig',
        'scheduler' => 'Scheduler',
        'serverFailoverMode' => 'ServerFailoverMode',
        'serverGroupId' => 'ServerGroupId',
        'serverGroupName' => 'ServerGroupName',
    ];

    public function validate()
    {
        if (null !== $this->connectionDrainConfig) {
            $this->connectionDrainConfig->validate();
        }
        if (null !== $this->healthCheckConfig) {
            $this->healthCheckConfig->validate();
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

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toArray($noStream) : $this->healthCheckConfig;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        if (null !== $this->serverFailoverMode) {
            $res['ServerFailoverMode'] = $this->serverFailoverMode;
        }

        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }

        if (null !== $this->serverGroupName) {
            $res['ServerGroupName'] = $this->serverGroupName;
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

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }

        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        if (isset($map['ServerFailoverMode'])) {
            $model->serverFailoverMode = $map['ServerFailoverMode'];
        }

        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }

        return $model;
    }
}
