<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateServerGroupAttributeRequest\healthCheckConfig;

class UpdateServerGroupAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $connectionDrainEnabled;

    /**
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @var bool
     */
    public $preserveClientIpEnabled;

    /**
     * @var string
     */
    public $regionId;

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
    protected $_name = [
        'clientToken' => 'ClientToken',
        'connectionDrainEnabled' => 'ConnectionDrainEnabled',
        'connectionDrainTimeout' => 'ConnectionDrainTimeout',
        'dryRun' => 'DryRun',
        'healthCheckConfig' => 'HealthCheckConfig',
        'preserveClientIpEnabled' => 'PreserveClientIpEnabled',
        'regionId' => 'RegionId',
        'scheduler' => 'Scheduler',
        'serverGroupId' => 'ServerGroupId',
        'serverGroupName' => 'ServerGroupName',
    ];

    public function validate()
    {
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

        if (null !== $this->connectionDrainEnabled) {
            $res['ConnectionDrainEnabled'] = $this->connectionDrainEnabled;
        }

        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toArray($noStream) : $this->healthCheckConfig;
        }

        if (null !== $this->preserveClientIpEnabled) {
            $res['PreserveClientIpEnabled'] = $this->preserveClientIpEnabled;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['ConnectionDrainEnabled'])) {
            $model->connectionDrainEnabled = $map['ConnectionDrainEnabled'];
        }

        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }

        if (isset($map['PreserveClientIpEnabled'])) {
            $model->preserveClientIpEnabled = $map['PreserveClientIpEnabled'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
