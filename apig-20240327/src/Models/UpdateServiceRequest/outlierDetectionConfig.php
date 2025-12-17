<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceRequest;

use AlibabaCloud\Dara\Model;

class outlierDetectionConfig extends Model
{
    /**
     * @var int
     */
    public $baseEjectionTime;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $failurePercentageMinimumHosts;

    /**
     * @var int
     */
    public $failurePercentageThreshold;

    /**
     * @var int
     */
    public $interval;
    protected $_name = [
        'baseEjectionTime' => 'baseEjectionTime',
        'enable' => 'enable',
        'failurePercentageMinimumHosts' => 'failurePercentageMinimumHosts',
        'failurePercentageThreshold' => 'failurePercentageThreshold',
        'interval' => 'interval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseEjectionTime) {
            $res['baseEjectionTime'] = $this->baseEjectionTime;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->failurePercentageMinimumHosts) {
            $res['failurePercentageMinimumHosts'] = $this->failurePercentageMinimumHosts;
        }

        if (null !== $this->failurePercentageThreshold) {
            $res['failurePercentageThreshold'] = $this->failurePercentageThreshold;
        }

        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
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
        if (isset($map['baseEjectionTime'])) {
            $model->baseEjectionTime = $map['baseEjectionTime'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['failurePercentageMinimumHosts'])) {
            $model->failurePercentageMinimumHosts = $map['failurePercentageMinimumHosts'];
        }

        if (isset($map['failurePercentageThreshold'])) {
            $model->failurePercentageThreshold = $map['failurePercentageThreshold'];
        }

        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }

        return $model;
    }
}
