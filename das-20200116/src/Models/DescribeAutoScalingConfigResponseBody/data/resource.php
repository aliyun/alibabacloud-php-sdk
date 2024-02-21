<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The scale-out step size of CPU.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuStep;

    /**
     * @description The average CPU utilization threshold that triggers automatic scale-out of local resources. Unit: %.
     *
     * @example 70
     *
     * @var int
     */
    public $cpuUsageUpperThreshold;

    /**
     * @description The observation window of the automatic scale-in feature for local resources. The return value consists of a numeric value and a time unit suffix. Valid values of the time unit suffix:
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
    public $downgradeObservationWindowSize;

    /**
     * @description Indicates whether the auto scaling feature is enabled for local resources. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The observation window of the automatic scale-out feature for local resources. The return value consists of a numeric value and a time unit suffix. Valid values of the time unit suffix:
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
        'cpuStep'                        => 'CpuStep',
        'cpuUsageUpperThreshold'         => 'CpuUsageUpperThreshold',
        'downgradeObservationWindowSize' => 'DowngradeObservationWindowSize',
        'enable'                         => 'Enable',
        'upgradeObservationWindowSize'   => 'UpgradeObservationWindowSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuStep) {
            $res['CpuStep'] = $this->cpuStep;
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

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuStep'])) {
            $model->cpuStep = $map['CpuStep'];
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
