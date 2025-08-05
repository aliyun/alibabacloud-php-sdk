<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectBasicMetaRequest;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectBasicMetaRequest\properties\encryption;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectBasicMetaRequest\properties\tableLifecycle;
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
     * @description Indicates whether the routing of the Tunnel resource group is enabled.
     *
     * - true: The data transfer tasks that are submitted by the project by default use the Tunnel resource group that is bound to the project.
     * - false: The data transfer tasks that are submitted by the project by default use the Tunnel shared resource group.
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
     * @description The table lifecycle properties.
     *
     * @var tableLifecycle
     */
    public $tableLifecycle;

    /**
     * @description The time zone that is used by your project. The time zone is the same as the time zone specified by `odps.sql.timezone` .
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The <props="china">[Data Transmission Service](https://help.aliyun.com/zh/maxcompute/user-guide/overview-of-dts)
     * <props="intl">[Data Transmission Service](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/overview-of-dts) resource group that is bound to the project.
     *
     * - Default resource group: The Tunnel shared resource group is used. You cannot use the subscription-based Tunnel resource group for the project. The default resource group is automatically used by the Tunnel service of your project, regardless of the parameter setting.
     * - Subscription-based Tunnel resource group: You can use the subscription-based Tunnel resource group for the project.
     *
     * @example Default
     *
     * @var string
     */
    public $tunnelQuota;

    /**
     * @description The data type edition. Valid values:
     *
     * - *1*: MaxCompute V1.0 data type edition
     * - *2*: MaxCompute V2.0 data type edition
     * - *hive*: Hive-compatible data type edition
     * For more information about the differences among the three data type editions, see <props="china">[Data Type Versions](https://help.aliyun.com/zh/maxcompute/user-guide/data-type-editions)
     * <props="intl">[Data Type Versions](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/data-type-editions).
     *
     * @example 2.0
     *
     * @var string
     */
    public $typeSystem;
    protected $_name = [
        'allowFullScan' => 'allowFullScan',
        'enableDecimal2' => 'enableDecimal2',
        'enableDr' => 'enableDr',
        'enableTunnelQuotaRoute' => 'enableTunnelQuotaRoute',
        'encryption' => 'encryption',
        'retentionDays' => 'retentionDays',
        'sqlMeteringMax' => 'sqlMeteringMax',
        'tableLifecycle' => 'tableLifecycle',
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
        if (null !== $this->enableDecimal2) {
            $res['enableDecimal2'] = $this->enableDecimal2;
        }
        if (null !== $this->enableDr) {
            $res['enableDr'] = $this->enableDr;
        }
        if (null !== $this->enableTunnelQuotaRoute) {
            $res['enableTunnelQuotaRoute'] = $this->enableTunnelQuotaRoute;
        }
        if (null !== $this->encryption) {
            $res['encryption'] = null !== $this->encryption ? $this->encryption->toMap() : null;
        }
        if (null !== $this->retentionDays) {
            $res['retentionDays'] = $this->retentionDays;
        }
        if (null !== $this->sqlMeteringMax) {
            $res['sqlMeteringMax'] = $this->sqlMeteringMax;
        }
        if (null !== $this->tableLifecycle) {
            $res['tableLifecycle'] = null !== $this->tableLifecycle ? $this->tableLifecycle->toMap() : null;
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
        if (isset($map['enableDecimal2'])) {
            $model->enableDecimal2 = $map['enableDecimal2'];
        }
        if (isset($map['enableDr'])) {
            $model->enableDr = $map['enableDr'];
        }
        if (isset($map['enableTunnelQuotaRoute'])) {
            $model->enableTunnelQuotaRoute = $map['enableTunnelQuotaRoute'];
        }
        if (isset($map['encryption'])) {
            $model->encryption = encryption::fromMap($map['encryption']);
        }
        if (isset($map['retentionDays'])) {
            $model->retentionDays = $map['retentionDays'];
        }
        if (isset($map['sqlMeteringMax'])) {
            $model->sqlMeteringMax = $map['sqlMeteringMax'];
        }
        if (isset($map['tableLifecycle'])) {
            $model->tableLifecycle = tableLifecycle::fromMap($map['tableLifecycle']);
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
