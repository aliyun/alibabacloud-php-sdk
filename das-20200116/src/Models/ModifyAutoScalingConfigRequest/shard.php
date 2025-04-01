<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Dara\Model;

class shard extends Model
{
    /**
     * @var bool
     */
    public $apply;

    /**
     * @var bool
     */
    public $downgrade;

    /**
     * @var string
     */
    public $downgradeObservationWindowSize;

    /**
     * @var int
     */
    public $maxShards;

    /**
     * @var int
     */
    public $memUsageLowerThreshold;

    /**
     * @var int
     */
    public $memUsageUpperThreshold;

    /**
     * @var int
     */
    public $minShards;

    /**
     * @var bool
     */
    public $upgrade;

    /**
     * @var string
     */
    public $upgradeObservationWindowSize;
    protected $_name = [
        'apply' => 'Apply',
        'downgrade' => 'Downgrade',
        'downgradeObservationWindowSize' => 'DowngradeObservationWindowSize',
        'maxShards' => 'MaxShards',
        'memUsageLowerThreshold' => 'MemUsageLowerThreshold',
        'memUsageUpperThreshold' => 'MemUsageUpperThreshold',
        'minShards' => 'MinShards',
        'upgrade' => 'Upgrade',
        'upgradeObservationWindowSize' => 'UpgradeObservationWindowSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
