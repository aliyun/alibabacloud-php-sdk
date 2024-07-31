<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIAlarmRuleRequest;

use AlibabaCloud\Tea\Model;

class triggerConditions extends Model
{
    /**
     * @description The time interval for alert calculation. Unit: minutes.
     *
     * @example 15
     *
     * @var int
     */
    public $duration;

    /**
     * @description The severity level. Valid values:
     *
     *   Warning
     *   Critical
     *
     * @example Warning
     *
     * @var string
     */
    public $severity;

    /**
     * @description The alert threshold.
     *
     *   If the alert rule is for task status, you do not need to specify a threshold.
     *   If the alert rule is for failovers, specify the number of failovers.
     *   If the alert rule is for latency, the threshold is the latency duration, in seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
        'duration'  => 'Duration',
        'severity'  => 'Severity',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggerConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
