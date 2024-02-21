<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class shard extends Model
{
    /**
     * @description Indicates whether the feature of automatically removing shards is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $downgrade;

    /**
     * @description The observation window of the feature of automatically removing shards. The return value consists of a numeric value and a time unit suffix. Valid values of the time unit suffix:
     *
     *   **s**: seconds.
     *   **m**: minutes.
     *   **h**: hours.
     *   **d**: days.
     *
     * >  A value of **1d** indicates one day.
     * @example 1d
     *
     * @var string
     */
    public $downgradeObservationWindowSize;

    /**
     * @description The maximum number of shards in the instance.
     *
     * @example 16
     *
     * @var int
     */
    public $maxShards;

    /**
     * @description The average memory usage threshold that triggers automatic removal of shards. Unit: %.
     *
     * @example 30
     *
     * @var int
     */
    public $memUsageLowerThreshold;

    /**
     * @description The average memory usage threshold that triggers automatic adding of shards. Unit: %.
     *
     * @example 70
     *
     * @var int
     */
    public $memUsageUpperThreshold;

    /**
     * @description The minimum number of shards in the instance.
     *
     * @example 4
     *
     * @var int
     */
    public $minShards;

    /**
     * @description Indicates whether the feature of automatically adding shards is enabled. Valid values:
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
     * @description The observation window of the feature of automatically adding shards. The return value consists of a numeric value and a time unit suffix. Valid values of the time unit suffix:
     *
     *   **s**: seconds.
     *   **m**: minutes.
     *   **h**: hours.
     *   **d**: days.
     *
     * >  A value of **5m** indicates 5 minutes.
     * @example 5m
     *
     * @var string
     */
    public $upgradeObservationWindowSize;
    protected $_name = [
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
