<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIAlarmRulesResponseBody\pagingInfo\DIJobAlarmRules;

use AlibabaCloud\Tea\Model;

class triggerConditions extends Model
{
    /**
     * @description The types of DDL operations for which the alert rule takes effect. This parameter is returned only if the MetricType parameter is set to DdlReport.
     *
     * @deprecated
     *
     * @var string[]
     */
    public $ddlReportTags;

    /**
     * @var string[]
     */
    public $ddlTypes;

    /**
     * @description The time interval for alert calculation. Unit: minutes.
     *
     * @example 1
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
     * @example Critical
     *
     * @var string
     */
    public $severity;

    /**
     * @description The alert threshold.
     *
     *   If the alert rule is for task status, no threshold is used.
     *   If the alert rule is for failovers, the threshold is the number of failovers.
     *   If the alert rule is for latency, the threshold is the latency duration, in seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
        'ddlReportTags' => 'DdlReportTags',
        'ddlTypes'      => 'DdlTypes',
        'duration'      => 'Duration',
        'severity'      => 'Severity',
        'threshold'     => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddlReportTags) {
            $res['DdlReportTags'] = $this->ddlReportTags;
        }
        if (null !== $this->ddlTypes) {
            $res['DdlTypes'] = $this->ddlTypes;
        }
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
        if (isset($map['DdlReportTags'])) {
            if (!empty($map['DdlReportTags'])) {
                $model->ddlReportTags = $map['DdlReportTags'];
            }
        }
        if (isset($map['DdlTypes'])) {
            if (!empty($map['DdlTypes'])) {
                $model->ddlTypes = $map['DdlTypes'];
            }
        }
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
