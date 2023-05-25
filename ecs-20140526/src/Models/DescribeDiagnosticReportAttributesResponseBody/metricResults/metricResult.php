<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults\metricResult\issues;
use AlibabaCloud\Tea\Model;

class metricResult extends Model
{
    /**
     * @description An array that consists of the details about the diagnosed issues.
     *
     * @var issues
     */
    public $issues;

    /**
     * @description The category of the diagnostic metric.
     *
     * @example CPU
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
     *   Unknown: The diagnostic has not started, failed to run, or exited unexpectedly without a diagnosis.
     *   Normal: No exceptions were detected.
     *   Info: Diagnostic information was recorded and may be related to exceptions.
     *   NotSupport: The version of the guest operating system does support diagnosing the metric.
     *   Warn: Diagnostic information was recorded and may indicate potential exceptions.
     *   Critical: Critical exceptions were detected.
     *
     * @example Normal
     *
     * @var string
     */
    public $severity;

    /**
     * @description The state of the diagnostic metric. Valid values:
     *
     *   InProgress: The diagnostic is in progress.
     *   Finished: The diagnostic is complete.
     *   Failed: The diagnostic failed.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'issues'         => 'Issues',
        'metricCategory' => 'MetricCategory',
        'metricId'       => 'MetricId',
        'severity'       => 'Severity',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issues) {
            $res['Issues'] = null !== $this->issues ? $this->issues->toMap() : null;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Issues'])) {
            $model->issues = issues::fromMap($map['Issues']);
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
