<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Tea\Model;

class shard extends Model
{
    /**
     * @description Specifies whether to apply the **Shard** configuration of the auto scaling feature for shards. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  The auto scaling feature for shards is available only for ApsaraDB for Redis Community Edition instances that use cloud disks on the China site (aliyun.com).
     * @example true
     *
     * @var bool
     */
    public $apply;

    /**
     * @description Specifies whether to enable the feature of automatically removing shards. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  The feature of automatically removing shards is in canary release.
     * @example true
     *
     * @var bool
     */
    public $downgrade;

    /**
     * @description The observation window of the feature of automatically removing shards. The value of this parameter consists of a numeric value and a time unit suffix. The **h** time unit suffix specifies the hour. The **d** time unit suffix specifies the day. Valid values:
     *
     *   **1h**
     *   **2h**
     *   **3h**
     *   **1d**
     *   **7d**
     *
     * @example 1h
     *
     * @var string
     */
    public $downgradeObservationWindowSize;

    /**
     * @description The maximum number of shards in the instance. The value must be a positive integer. Valid values: 4 to 32.
     *
     * @example 16
     *
     * @var int
     */
    public $maxShards;

    /**
     * @description The average memory usage threshold that triggers automatic removal of shards. Unit: %. Valid values:
     *
     *   **10**
     *   **20**
     *   **30**
     *
     * @example 30
     *
     * @var int
     */
    public $memUsageLowerThreshold;

    /**
     * @description The average memory usage threshold that triggers automatic adding of shards. Unit: %. Valid values:
     *
     *   **50**
     *   **60**
     *   **70**
     *   **80**
     *   **90**
     *
     * @example 70
     *
     * @var int
     */
    public $memUsageUpperThreshold;

    /**
     * @description The minimum number of shards in the instance. The value must be a positive integer. Valid values: 4 to 32.
     *
     * @example 4
     *
     * @var int
     */
    public $minShards;

    /**
     * @description Specifies whether to enable the feature of automatically adding shards. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $upgrade;

    /**
     * @description The observation window of the feature of automatically adding shards. The value of this parameter consists of a numeric value and a time unit suffix. The **m** time unit suffix specifies the minute. Valid values:
     *
     *   **5m**
     *   **10m**
     *   **15m**
     *   **30m**
     *
     * @example 5m
     *
     * @var string
     */
    public $upgradeObservationWindowSize;
    protected $_name = [
        'apply'                          => 'Apply',
        'downgrade'                      => 'Downgrade',
        'downgradeObservationWindowSize' => 'DowngradeObservationWindowSize',
        'maxShards'                      => 'MaxShards',
        'memUsageLowerThreshold'         => 'MemUsageLowerThreshold',
        'memUsageUpperThreshold'         => 'MemUsageUpperThreshold',
        'minShards'                      => 'MinShards',
        'upgrade'                        => 'Upgrade',
        'upgradeObservationWindowSize'   => 'UpgradeObservationWindowSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apply) {
            $res['Apply'] = $this->apply;
        }
        if (null !== $this->downgrade) {
            $res['Downgrade'] = $this->downgrade;
        }
        if (null !== $this->downgradeObservationWindowSize) {
            $res['DowngradeObservationWindowSize'] = $this->downgradeObservationWindowSize;
        }
        if (null !== $this->maxShards) {
            $res['MaxShards'] = $this->maxShards;
        }
        if (null !== $this->memUsageLowerThreshold) {
            $res['MemUsageLowerThreshold'] = $this->memUsageLowerThreshold;
        }
        if (null !== $this->memUsageUpperThreshold) {
            $res['MemUsageUpperThreshold'] = $this->memUsageUpperThreshold;
        }
        if (null !== $this->minShards) {
            $res['MinShards'] = $this->minShards;
        }
        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
        }
        if (null !== $this->upgradeObservationWindowSize) {
            $res['UpgradeObservationWindowSize'] = $this->upgradeObservationWindowSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apply'])) {
            $model->apply = $map['Apply'];
        }
        if (isset($map['Downgrade'])) {
            $model->downgrade = $map['Downgrade'];
        }
        if (isset($map['DowngradeObservationWindowSize'])) {
            $model->downgradeObservationWindowSize = $map['DowngradeObservationWindowSize'];
        }
        if (isset($map['MaxShards'])) {
            $model->maxShards = $map['MaxShards'];
        }
        if (isset($map['MemUsageLowerThreshold'])) {
            $model->memUsageLowerThreshold = $map['MemUsageLowerThreshold'];
        }
        if (isset($map['MemUsageUpperThreshold'])) {
            $model->memUsageUpperThreshold = $map['MemUsageUpperThreshold'];
        }
        if (isset($map['MinShards'])) {
            $model->minShards = $map['MinShards'];
        }
        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }
        if (isset($map['UpgradeObservationWindowSize'])) {
            $model->upgradeObservationWindowSize = $map['UpgradeObservationWindowSize'];
        }

        return $model;
    }
}
