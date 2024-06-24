<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\encryption;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\storageTierInfo;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycle;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig;
use AlibabaCloud\Tea\Model;

class properties extends Model
{
    /**
     * @description Indicates whether a full table scan on the project is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $allowFullScan;

    /**
     * @description This operation does not return a value for this parameter.
     *
     * @example No value
     *
     * @var string
     */
    public $elderTunnelQuota;

    /**
     * @description Indicates whether the DECIMAL data type in MaxCompute V2.0 is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDecimal2;

    /**
     * @var bool
     */
    public $enableFdcCacheForce;

    /**
     * @var bool
     */
    public $enableTieredStorage;

    /**
     * @description Indicates whether tunnel quota routing is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableTunnelQuotaRoute;

    /**
     * @description The encryption information.
     *
     * @var encryption
     */
    public $encryption;

    /**
     * @var string
     */
    public $fdcQuota;

    /**
     * @description The number of days for which backup data can be retained.
     *
     * @example 1
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The upper limit for the resources that are consumed by an SQL statement.
     *
     * @example 1500
     *
     * @var string
     */
    public $sqlMeteringMax;

    /**
     * @description The information about the tiered storage.
     *
     * @var storageTierInfo
     */
    public $storageTierInfo;

    /**
     * @description The lifecycle of the table in the project.
     *
     * @var tableLifecycle
     */
    public $tableLifecycle;

    /**
     * @var tableLifecycleConfig
     */
    public $tableLifecycleConfig;

    /**
     * @description The time zone of the project.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The name of the tunnel quota.
     *
     * @example Quota
     *
     * @var string
     */
    public $tunnelQuota;

    /**
     * @description The data type edition. Valid values: -**1**: MaxCompute V1.0 data type edition. -**2**: MaxCompute V2.0 data type edition. -**hive**: Hive-compatible data type edition.
     *
     * @example 2.0
     *
     * @var string
     */
    public $typeSystem;
    protected $_name = [
        'allowFullScan'          => 'allowFullScan',
        'elderTunnelQuota'       => 'elderTunnelQuota',
        'enableDecimal2'         => 'enableDecimal2',
        'enableFdcCacheForce'    => 'enableFdcCacheForce',
        'enableTieredStorage'    => 'enableTieredStorage',
        'enableTunnelQuotaRoute' => 'enableTunnelQuotaRoute',
        'encryption'             => 'encryption',
        'fdcQuota'               => 'fdcQuota',
        'retentionDays'          => 'retentionDays',
        'sqlMeteringMax'         => 'sqlMeteringMax',
        'storageTierInfo'        => 'storageTierInfo',
        'tableLifecycle'         => 'tableLifecycle',
        'tableLifecycleConfig'   => 'tableLifecycleConfig',
        'timezone'               => 'timezone',
        'tunnelQuota'            => 'tunnelQuota',
        'typeSystem'             => 'typeSystem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowFullScan) {
            $res['allowFullScan'] = $this->allowFullScan;
        }
        if (null !== $this->elderTunnelQuota) {
            $res['elderTunnelQuota'] = $this->elderTunnelQuota;
        }
        if (null !== $this->enableDecimal2) {
            $res['enableDecimal2'] = $this->enableDecimal2;
        }
        if (null !== $this->enableFdcCacheForce) {
            $res['enableFdcCacheForce'] = $this->enableFdcCacheForce;
        }
        if (null !== $this->enableTieredStorage) {
            $res['enableTieredStorage'] = $this->enableTieredStorage;
        }
        if (null !== $this->enableTunnelQuotaRoute) {
            $res['enableTunnelQuotaRoute'] = $this->enableTunnelQuotaRoute;
        }
        if (null !== $this->encryption) {
            $res['encryption'] = null !== $this->encryption ? $this->encryption->toMap() : null;
        }
        if (null !== $this->fdcQuota) {
            $res['fdcQuota'] = $this->fdcQuota;
        }
        if (null !== $this->retentionDays) {
            $res['retentionDays'] = $this->retentionDays;
        }
        if (null !== $this->sqlMeteringMax) {
            $res['sqlMeteringMax'] = $this->sqlMeteringMax;
        }
        if (null !== $this->storageTierInfo) {
            $res['storageTierInfo'] = null !== $this->storageTierInfo ? $this->storageTierInfo->toMap() : null;
        }
        if (null !== $this->tableLifecycle) {
            $res['tableLifecycle'] = null !== $this->tableLifecycle ? $this->tableLifecycle->toMap() : null;
        }
        if (null !== $this->tableLifecycleConfig) {
            $res['tableLifecycleConfig'] = null !== $this->tableLifecycleConfig ? $this->tableLifecycleConfig->toMap() : null;
        }
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }
        if (null !== $this->tunnelQuota) {
            $res['tunnelQuota'] = $this->tunnelQuota;
        }
        if (null !== $this->typeSystem) {
            $res['typeSystem'] = $this->typeSystem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return properties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowFullScan'])) {
            $model->allowFullScan = $map['allowFullScan'];
        }
        if (isset($map['elderTunnelQuota'])) {
            $model->elderTunnelQuota = $map['elderTunnelQuota'];
        }
        if (isset($map['enableDecimal2'])) {
            $model->enableDecimal2 = $map['enableDecimal2'];
        }
        if (isset($map['enableFdcCacheForce'])) {
            $model->enableFdcCacheForce = $map['enableFdcCacheForce'];
        }
        if (isset($map['enableTieredStorage'])) {
            $model->enableTieredStorage = $map['enableTieredStorage'];
        }
        if (isset($map['enableTunnelQuotaRoute'])) {
            $model->enableTunnelQuotaRoute = $map['enableTunnelQuotaRoute'];
        }
        if (isset($map['encryption'])) {
            $model->encryption = encryption::fromMap($map['encryption']);
        }
        if (isset($map['fdcQuota'])) {
            $model->fdcQuota = $map['fdcQuota'];
        }
        if (isset($map['retentionDays'])) {
            $model->retentionDays = $map['retentionDays'];
        }
        if (isset($map['sqlMeteringMax'])) {
            $model->sqlMeteringMax = $map['sqlMeteringMax'];
        }
        if (isset($map['storageTierInfo'])) {
            $model->storageTierInfo = storageTierInfo::fromMap($map['storageTierInfo']);
        }
        if (isset($map['tableLifecycle'])) {
            $model->tableLifecycle = tableLifecycle::fromMap($map['tableLifecycle']);
        }
        if (isset($map['tableLifecycleConfig'])) {
            $model->tableLifecycleConfig = tableLifecycleConfig::fromMap($map['tableLifecycleConfig']);
        }
        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }
        if (isset($map['tunnelQuota'])) {
            $model->tunnelQuota = $map['tunnelQuota'];
        }
        if (isset($map['typeSystem'])) {
            $model->typeSystem = $map['typeSystem'];
        }

        return $model;
    }
}
