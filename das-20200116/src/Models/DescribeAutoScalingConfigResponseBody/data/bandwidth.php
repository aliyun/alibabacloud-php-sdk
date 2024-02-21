<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class bandwidth extends Model
{
    /**
     * @description The average bandwidth usage threshold that triggers automatic bandwidth downgrade. Unit: %.
     *
     * @example 30
     *
     * @var int
     */
    public $bandwidthUsageLowerThreshold;

    /**
     * @description The average bandwidth usage threshold that triggers automatic bandwidth adjustment. Unit: %.
     *
     * @example 70
     *
     * @var int
     */
    public $bandwidthUsageUpperThreshold;

    /**
     * @description Indicates whether the automatic bandwidth downgrade feature is enabled. Valid values:
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
     * @description The observation window of the automatic bandwidth adjustment feature. The return value consists of a numeric value and a time unit suffix. Valid values of the time unit suffix:
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
    public $observationWindowSize;

    /**
     * @description Indicates whether the automatic bandwidth adjustment feature is enabled. Valid values:
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
