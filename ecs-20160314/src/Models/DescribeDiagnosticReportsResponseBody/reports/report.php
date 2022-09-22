<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\issues;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\items;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\recentEvents;
use AlibabaCloud\Tea\Model;

class report extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $diagnosticCategory;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $invokeSystem;

    /**
     * @var string
     */
    public $issueCategoryId;

    /**
     * @var issues
     */
    public $issues;

    /**
     * @var items
     */
    public $items;

    /**
     * @var string
     */
    public $offlineDiagReportStatus;

    /**
     * @var string
     */
    public $pePassword;

    /**
     * @var recentEvents
     */
    public $recentEvents;

    /**
     * @var string
     */
    public $reportId;

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
        'creationTime'            => 'CreationTime',
        'diagnosticCategory'      => 'DiagnosticCategory',
        'endTime'                 => 'EndTime',
        'finishedTime'            => 'FinishedTime',
        'invokeSystem'            => 'InvokeSystem',
        'issueCategoryId'         => 'IssueCategoryId',
        'issues'                  => 'Issues',
        'items'                   => 'Items',
        'offlineDiagReportStatus' => 'OfflineDiagReportStatus',
        'pePassword'              => 'PePassword',
        'recentEvents'            => 'RecentEvents',
        'reportId'                => 'ReportId',
        'resourceId'              => 'ResourceId',
        'resourceType'            => 'ResourceType',
        'severity'                => 'Severity',
        'startTime'               => 'StartTime',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->diagnosticCategory) {
            $res['DiagnosticCategory'] = $this->diagnosticCategory;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->invokeSystem) {
            $res['InvokeSystem'] = $this->invokeSystem;
        }
        if (null !== $this->issueCategoryId) {
            $res['IssueCategoryId'] = $this->issueCategoryId;
        }
        if (null !== $this->issues) {
            $res['Issues'] = null !== $this->issues ? $this->issues->toMap() : null;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->offlineDiagReportStatus) {
            $res['OfflineDiagReportStatus'] = $this->offlineDiagReportStatus;
        }
        if (null !== $this->pePassword) {
            $res['PePassword'] = $this->pePassword;
        }
        if (null !== $this->recentEvents) {
            $res['RecentEvents'] = null !== $this->recentEvents ? $this->recentEvents->toMap() : null;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
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
     * @return report
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DiagnosticCategory'])) {
            $model->diagnosticCategory = $map['DiagnosticCategory'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['InvokeSystem'])) {
            $model->invokeSystem = $map['InvokeSystem'];
        }
        if (isset($map['IssueCategoryId'])) {
            $model->issueCategoryId = $map['IssueCategoryId'];
        }
        if (isset($map['Issues'])) {
            $model->issues = issues::fromMap($map['Issues']);
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['OfflineDiagReportStatus'])) {
            $model->offlineDiagReportStatus = $map['OfflineDiagReportStatus'];
        }
        if (isset($map['PePassword'])) {
            $model->pePassword = $map['PePassword'];
        }
        if (isset($map['RecentEvents'])) {
            $model->recentEvents = recentEvents::fromMap($map['RecentEvents']);
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
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
