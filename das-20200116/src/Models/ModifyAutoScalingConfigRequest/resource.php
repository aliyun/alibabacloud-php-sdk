<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description Specifies whether to apply the **Resource** configuration of the auto scaling feature for resources. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $apply;

    /**
     * @description The average CPU utilization threshold that triggers automatic scale-out of resources. Unit: %. Valid values:
     *
     *   **70**
     *   **80**
     *   **90**
     *
     * @example 70
     *
     * @var int
     */
    public $cpuUsageUpperThreshold;

    /**
     * @description The observation window of the automatic resource scale-in feature. The value of this parameter consists of a numeric value and a time unit suffix. The **m** time unit suffix specifies the minute. Valid values:
     *
     *   **1m**
     *   **3m**
     *   **5m**
     *   **10m**
     *   **20m**
     *   **30m**
     *
     * @example 5m
     *
     * @var string
     */
    public $downgradeObservationWindowSize;

    /**
     * @description Specifies whether to enable the auto scaling feature for resources. Valid values:
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
     * @description The observation window of the automatic resource scale-out feature. The value of this parameter consists of a numeric value and a time unit suffix. The **m** time unit suffix specifies the minute. Valid values:
     *
     *   **1m**
     *   **3m**
     *   **5m**
     *   **10m**
     *   **20m**
     *   **30m**
     *
     * @example 5m
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return resource
     */
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
