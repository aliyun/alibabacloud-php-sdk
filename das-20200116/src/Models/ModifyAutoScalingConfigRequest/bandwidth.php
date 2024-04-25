<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Tea\Model;

class bandwidth extends Model
{
    /**
     * @description Specifies whether to apply the **Bandwidth** configuration of the automatic bandwidth adjustment feature. Valid values:
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
     * @description The average bandwidth usage threshold that triggers automatic bandwidth downgrade. Unit: %. Valid values:
     *
     *   **10**
     *   **20**
     *   **30**
     *
     * @example 30
     *
     * @var int
     */
    public $bandwidthUsageLowerThreshold;

    /**
     * @description The average bandwidth usage threshold that triggers automatic bandwidth upgrade. Unit: %. Valid values:
     *
     *   **50**
     *   **60**
     *   **70**
     *   **80**
     *   **90**
     *   **95**
     *
     * @example 70
     *
     * @var int
     */
    public $bandwidthUsageUpperThreshold;

    /**
     * @description Specifies whether to enable the automatic bandwidth downgrade feature. Valid values:
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
     * @description The observation window of the automatic bandwidth adjustment feature. The value of this parameter consists of a numeric value and a time unit suffix. The **m** time unit suffix specifies the minute. Valid values:
     *
     *   **1m**
     *   **5m**
     *   **10m**
     *   **15m**
     *   **30m**
     *
     * @example 5m
     *
     * @var string
     */
    public $observationWindowSize;

    /**
     * @description Specifies whether to enable the automatic bandwidth upgrade feature. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $upgrade;
    protected $_name = [
        'apply'                        => 'Apply',
        'bandwidthUsageLowerThreshold' => 'BandwidthUsageLowerThreshold',
        'bandwidthUsageUpperThreshold' => 'BandwidthUsageUpperThreshold',
        'downgrade'                    => 'Downgrade',
        'observationWindowSize'        => 'ObservationWindowSize',
        'upgrade'                      => 'Upgrade',
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
        if (null !== $this->bandwidthUsageLowerThreshold) {
            $res['BandwidthUsageLowerThreshold'] = $this->bandwidthUsageLowerThreshold;
        }
        if (null !== $this->bandwidthUsageUpperThreshold) {
            $res['BandwidthUsageUpperThreshold'] = $this->bandwidthUsageUpperThreshold;
        }
        if (null !== $this->downgrade) {
            $res['Downgrade'] = $this->downgrade;
        }
        if (null !== $this->observationWindowSize) {
            $res['ObservationWindowSize'] = $this->observationWindowSize;
        }
        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apply'])) {
            $model->apply = $map['Apply'];
        }
        if (isset($map['BandwidthUsageLowerThreshold'])) {
            $model->bandwidthUsageLowerThreshold = $map['BandwidthUsageLowerThreshold'];
        }
        if (isset($map['BandwidthUsageUpperThreshold'])) {
            $model->bandwidthUsageUpperThreshold = $map['BandwidthUsageUpperThreshold'];
        }
        if (isset($map['Downgrade'])) {
            $model->downgrade = $map['Downgrade'];
        }
        if (isset($map['ObservationWindowSize'])) {
            $model->observationWindowSize = $map['ObservationWindowSize'];
        }
        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }

        return $model;
    }
}
