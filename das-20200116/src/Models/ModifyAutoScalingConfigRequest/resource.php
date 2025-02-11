<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Dara\Model;

class resource extends Model
{
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var int
     */
    public $cpuUsageUpperThreshold;
    /**
     * @var string
     */
    public $downgradeObservationWindowSize;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var string
     */
    public $upgradeObservationWindowSize;
    protected $_name = [
        'apply'                          => 'Apply',
        'cpuUsageUpperThreshold'         => 'CpuUsageUpperThreshold',
        'downgradeObservationWindowSize' => 'DowngradeObservationWindowSize',
        'enable'                         => 'Enable',
        'upgradeObservationWindowSize'   => 'UpgradeObservationWindowSize',
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

        if (null !== $this->cpuUsageUpperThreshold) {
            $res['CpuUsageUpperThreshold'] = $this->cpuUsageUpperThreshold;
        }

        if (null !== $this->downgradeObservationWindowSize) {
            $res['DowngradeObservationWindowSize'] = $this->downgradeObservationWindowSize;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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

        if (isset($map['CpuUsageUpperThreshold'])) {
            $model->cpuUsageUpperThreshold = $map['CpuUsageUpperThreshold'];
        }

        if (isset($map['DowngradeObservationWindowSize'])) {
            $model->downgradeObservationWindowSize = $map['DowngradeObservationWindowSize'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['UpgradeObservationWindowSize'])) {
            $model->upgradeObservationWindowSize = $map['UpgradeObservationWindowSize'];
        }

        return $model;
    }
}
