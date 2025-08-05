<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\encryption;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\externalProjectProperties;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\storageTierInfo;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycle;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig;
use AlibabaCloud\Tea\Model;

class properties extends Model
{
    /**
     * @description Indicates whether a full table scan is allowed in the project. A full table scan occupies a large number of resources, which reduces data processing efficiency. By default, the full table scan feature is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $allowFullScan;

    /**
     * @var int
     */
    public $autoMvQuotaGb;

    /**
     * @description The Tunnel parent resource group that is bound to the project. You do not need to pay attention to this group.
     *
     * @example No value
     *
     * @var string
     */
    public $elderTunnelQuota;

    /**
     * @var bool
     */
    public $enableAutoMv;

    /**
     * @description Indicates whether the DECIMAL type of the MaxCompute V2.0 data type edition is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDecimal2;

    /**
     * @var bool
     */
    public $enableDr;

    /**
     * @description Indicates whether external table caching is forcefully enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableFdcCacheForce;

    /**
     * @description Indicates whether [tiered storage](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/tiered-storage) is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableTieredStorage;

    /**
     * @description Indicates whether the routing of the Tunnel resource group is enabled.
     *
     *   true: The data transfer tasks that are submitted by the project by default use the Tunnel resource group that is bound to the project.
     *   false: The data transfer tasks that are submitted by the project by default use the Tunnel shared resource group.
     *
     * @example true
     *
     * @var bool
     */
    public $enableTunnelQuotaRoute;

    /**
     * @description The storage encryption properties.
     *
     * @var encryption
     */
    public $encryption;

    /**
     * @description The properties of the external project.
     *
     * @var externalProjectProperties
     */
    public $externalProjectProperties;

    /**
     * @description The quota for external table caching.
     *
     * @example fdc_quota
     *
     * @var string
     */
    public $fdcQuota;

    /**
     * @description The retention period for backup data. Unit: days. During the retention period, you can restore data of the version in use to the backup data of any version. Valid values: [0,30]. Default value: 1. The value 0 indicates that the backup feature is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The maximum consumption threshold of a single SQL statement. Formula: Amount of scanned data (GB) × Complexity.
     *
     * @example 1500
     *
     * @var string
     */
    public $sqlMeteringMax;

    /**
     * @description The [storage tier](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/tiered-storage) information.
     *
     * @var storageTierInfo
     */
    public $storageTierInfo;

    /**
     * @description The table lifecycle properties.
     *
     * @var tableLifecycle
     */
    public $tableLifecycle;

    /**
     * @description The [properties of tiered storage lifecycle rules](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/tiered-storage#f61fc9db76nna). After you configure the properties, the system triggers automatic switching of storage tiers based on the rules.
     *
     * @var tableLifecycleConfig
     */
    public $tableLifecycleConfig;

    /**
     * @description The time zone that is used by your project. The time zone is the same as the time zone specified by `odps.sql.timezone`.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The [Tunnel](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/overview-of-dts) resource group that is bound to the project.
     *
     *   Default resource group: The Tunnel shared resource group is used. You cannot use the subscription-based Tunnel resource group for the project. The default resource group is automatically used by the Tunnel service of your project, regardless of the parameter setting.
     *   Subscription-based Tunnel resource group: You can use the subscription-based Tunnel resource group for the project.
     *
     * @example Quota
     *
     * @var string
     */
    public $tunnelQuota;

    /**
     * @description The data type edition. Valid values:
     *
     *   **1**: MaxCompute V1.0 data type edition
     *   **2**: MaxCompute V2.0 data type edition
     *   **hive**: Hive-compatible data type edition
     *
     * For more information about the differences among the three data type editions, see [Data type editions](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/data-type-editions).
     *
     * @example 2.0
     *
     * @var string
     */
    public $typeSystem;
    protected $_name = [
        'allowFullScan' => 'allowFullScan',
        'autoMvQuotaGb' => 'autoMvQuotaGb',
        'elderTunnelQuota' => 'elderTunnelQuota',
        'enableAutoMv' => 'enableAutoMv',
        'enableDecimal2' => 'enableDecimal2',
        'enableDr' => 'enableDr',
        'enableFdcCacheForce' => 'enableFdcCacheForce',
        'enableTieredStorage' => 'enableTieredStorage',
        'enableTunnelQuotaRoute' => 'enableTunnelQuotaRoute',
        'encryption' => 'encryption',
        'externalProjectProperties' => 'externalProjectProperties',
        'fdcQuota' => 'fdcQuota',
        'retentionDays' => 'retentionDays',
        'sqlMeteringMax' => 'sqlMeteringMax',
        'storageTierInfo' => 'storageTierInfo',
        'tableLifecycle' => 'tableLifecycle',
        'tableLifecycleConfig' => 'tableLifecycleConfig',
        'timezone' => 'timezone',
        'tunnelQuota' => 'tunnelQuota',
        'typeSystem' => 'typeSystem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowFullScan) {
            $res['allowFullScan'] = $this->allowFullScan;
        }
        if (null !== $this->autoMvQuotaGb) {
            $res['autoMvQuotaGb'] = $this->autoMvQuotaGb;
        }
        if (null !== $this->elderTunnelQuota) {
            $res['elderTunnelQuota'] = $this->elderTunnelQuota;
        }
        if (null !== $this->enableAutoMv) {
            $res['enableAutoMv'] = $this->enableAutoMv;
        }
        if (null !== $this->enableDecimal2) {
            $res['enableDecimal2'] = $this->enableDecimal2;
        }
        if (null !== $this->enableDr) {
            $res['enableDr'] = $this->enableDr;
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
        if (null !== $this->externalProjectProperties) {
            $res['externalProjectProperties'] = null !== $this->externalProjectProperties ? $this->externalProjectProperties->toMap() : null;
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
        if (isset($map['autoMvQuotaGb'])) {
            $model->autoMvQuotaGb = $map['autoMvQuotaGb'];
        }
        if (isset($map['elderTunnelQuota'])) {
            $model->elderTunnelQuota = $map['elderTunnelQuota'];
        }
        if (isset($map['enableAutoMv'])) {
            $model->enableAutoMv = $map['enableAutoMv'];
        }
        if (isset($map['enableDecimal2'])) {
            $model->enableDecimal2 = $map['enableDecimal2'];
        }
        if (isset($map['enableDr'])) {
            $model->enableDr = $map['enableDr'];
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
        if (isset($map['externalProjectProperties'])) {
            $model->externalProjectProperties = externalProjectProperties::fromMap($map['externalProjectProperties']);
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
