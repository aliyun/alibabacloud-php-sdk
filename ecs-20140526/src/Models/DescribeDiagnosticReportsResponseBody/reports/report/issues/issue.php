<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports\report\issues;

use AlibabaCloud\Tea\Model;

class issue extends Model
{
    /**
     * @description The unique ID of the diagnosed issue.
     *
     * @example GuestOS.CPU.HighUtiliz*****
     *
     * @var string
     */
    public $issueId;

    /**
     * @description The category of the diagnostic metric.
     *
     * @example ECSService.GuestOS
     *
     * @var string
     */
    public $metricCategory;

    /**
     * @description The ID of the diagnostic metric.
     *
     * @example GuestOS.WinFirewall
     *
     * @var string
     */
    public $metricId;

    /**
     * @description The severity level of the diagnostic metric. Valid values:
     *
     *   Info: Diagnostic information was recorded and may be related to exceptions.
     *   Warn: Diagnostic information was recorded and may indicate exceptions.
     *   Critical: Critical exceptions were detected.
     *
     * @example Info
     *
     * @var string
     */
    public $severity;
    protected $_name = [
        'issueId'        => 'IssueId',
        'metricCategory' => 'MetricCategory',
        'metricId'       => 'MetricId',
        'severity'       => 'Severity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issueId) {
            $res['IssueId'] = $this->issueId;
        }
        if (null !== $this->metricCategory) {
            $res['MetricCategory'] = $this->metricCategory;
        }
        if (null !== $this->metricId) {
            $res['MetricId'] = $this->metricId;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return issue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssueId'])) {
            $model->issueId = $map['IssueId'];
        }
        if (isset($map['MetricCategory'])) {
            $model->metricCategory = $map['MetricCategory'];
        }
        if (isset($map['MetricId'])) {
            $model->metricId = $map['MetricId'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}
