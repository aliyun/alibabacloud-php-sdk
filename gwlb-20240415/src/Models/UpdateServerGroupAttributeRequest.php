<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateServerGroupAttributeRequest\connectionDrainConfig;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateServerGroupAttributeRequest\healthCheckConfig;
use AlibabaCloud\Tea\Model;

class UpdateServerGroupAttributeRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var connectionDrainConfig
     */
    public $connectionDrainConfig;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @example 5TCH
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description This parameter is required.
     *
     * @example sgp-atstuj3rtoptyui****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @example testServerGroupName
     *
     * @var string
     */
    public $serverGroupName;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'connectionDrainConfig' => 'ConnectionDrainConfig',
        'dryRun'                => 'DryRun',
        'healthCheckConfig'     => 'HealthCheckConfig',
        'scheduler'             => 'Scheduler',
        'serverGroupId'         => 'ServerGroupId',
        'serverGroupName'       => 'ServerGroupName',
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
        if (null !== $this->connectionDrainConfig) {
            $res['ConnectionDrainConfig'] = null !== $this->connectionDrainConfig ? $this->connectionDrainConfig->toMap() : null;
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
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }

        return $model;
    }
}
