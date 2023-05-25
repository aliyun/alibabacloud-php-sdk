<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosticReportAttributesResponseBody extends Model
{
    /**
     * @description The extended attributes of the diagnostic report.
     *
     * @example {"OfflineDiagReportStatus":"CONFIRMED"}
     *
     * @var string
     */
    public $attributes;

    /**
     * @description The time when the diagnostic report was created.
     *
     * @example 2022-07-11T12:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The end of the reporting period of the diagnostic report. The value is the EndTime value that was passed in when you called the [CreateDiagnosticReport](~~442490~~) operation to create the diagnostic report.
     *
     * @example 2022-07-11T14:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time when the diagnostic report was complete.
     *
     * @example 2022-07-11T14:00:00Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The results of all diagnostic metrics in the diagnostic metric set.
     *
     * @var metricResults
     */
    public $metricResults;

    /**
     * @description The ID of the diagnostic metric set.
     *
     * @example dms-bp17p0qwtr72zmu*****
     *
     * @var string
     */
    public $metricSetId;

    /**
     * @description The ID of the diagnostic report, which is the unique identifier of the report.
     *
     * @example dr-uf6i0tv2refv8wz*****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource.
     *
     * @example i-uf6i0tv2refv8wz*****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type. The value of ResourceType can only be instance, which indicates that only instances are supported.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The severity level of the diagnostic report. The value of this parameter is determined by the metric with the highest severity level among all diagnostic metrics. Valid values:
     *
     *   Unknown: The diagnostic has not started, failed to run, or exited unexpectedly without a diagnosis.
     *   Normal: No exceptions were detected.
     *   Info: Diagnostic information was recorded and may be related to exceptions.
     *   Warn: Diagnostic information was recorded and may indicate potential exceptions.
     *   Critical: Critical exceptions were detected.
     *
     * @example Normal
     *
     * @var string
     */
    public $severity;

    /**
     * @description The beginning of the reporting period of the diagnostic report. The value is the StartTime value that was passed in when you called the [CreateDiagnosticReport](~~442490~~) operation to create the diagnostic report.
     *
     * @example 2022-07-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the diagnostic report. Valid values:
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
        'attributes'    => 'Attributes',
        'creationTime'  => 'CreationTime',
        'endTime'       => 'EndTime',
        'finishedTime'  => 'FinishedTime',
        'metricResults' => 'MetricResults',
        'metricSetId'   => 'MetricSetId',
        'reportId'      => 'ReportId',
        'requestId'     => 'RequestId',
        'resourceId'    => 'ResourceId',
        'resourceType'  => 'ResourceType',
        'severity'      => 'Severity',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->metricResults) {
            $res['MetricResults'] = null !== $this->metricResults ? $this->metricResults->toMap() : null;
        }
        if (null !== $this->metricSetId) {
            $res['MetricSetId'] = $this->metricSetId;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosticReportAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['MetricResults'])) {
            $model->metricResults = metricResults::fromMap($map['MetricResults']);
        }
        if (isset($map['MetricSetId'])) {
            $model->metricSetId = $map['MetricSetId'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
