<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults;

class DescribeDiagnosticReportAttributesResponseBody extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var metricResults
     */
    public $metricResults;

    /**
     * @var string
     */
    public $metricSetId;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'attributes' => 'Attributes',
        'creationTime' => 'CreationTime',
        'endTime' => 'EndTime',
        'finishedTime' => 'FinishedTime',
        'metricResults' => 'MetricResults',
        'metricSetId' => 'MetricSetId',
        'reportId' => 'ReportId',
        'requestId' => 'RequestId',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'severity' => 'Severity',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->metricResults) {
            $this->metricResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['MetricResults'] = null !== $this->metricResults ? $this->metricResults->toArray($noStream) : $this->metricResults;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
