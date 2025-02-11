<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Dara\Model;

class bandwidth extends Model
{
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var int
     */
    public $bandwidthUsageLowerThreshold;
    /**
     * @var int
     */
    public $bandwidthUsageUpperThreshold;
    /**
     * @var bool
     */
    public $downgrade;
    /**
     * @var string
     */
    public $observationWindowSize;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
