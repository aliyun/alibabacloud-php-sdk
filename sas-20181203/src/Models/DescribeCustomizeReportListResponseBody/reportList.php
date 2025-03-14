<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomizeReportListResponseBody;

use AlibabaCloud\Tea\Model;

class reportList extends Model
{
    /**
     * @description Indicates whether the report is the default report. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description The timestamp when the report is pinned. Unit: milliseconds.
     *
     * @example 1721836800000
     *
     * @var int
     */
    public $pinnedTime;

    /**
     * @description The most recent days for report statistics.
     *
     * @example 7
     *
     * @var int
     */
    public $reportDays;

    /**
     * @description The end date on which the report is sent. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1721923199999
     *
     * @var int
     */
    public $reportEndDate;

    /**
     * @description The ID of the report.
     *
     * @example 1
     *
     * @var int
     */
    public $reportId;

    /**
     * @description The start date on which the report is sent. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1721836800000
     *
     * @var int
     */
    public $reportStartDate;

    /**
     * @description The state of the report. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 0
     *
     * @var string
     */
    public $reportStatus;

    /**
     * @description The type of the report. Valid values:
     *
     *   **0**: daily report
     *   **1**: weekly report
     *   **2**: monthly report
     *   **3**: report whose statistics are collected in a custom time range
     *
     * @example 0
     *
     * @var int
     */
    public $reportType;

    /**
     * @description The report version.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $reportVersion;

    /**
     * @description The name of the report.
     *
     * @example test
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'isDefault' => 'IsDefault',
        'pinnedTime' => 'PinnedTime',
        'reportDays' => 'ReportDays',
        'reportEndDate' => 'ReportEndDate',
        'reportId' => 'ReportId',
        'reportStartDate' => 'ReportStartDate',
        'reportStatus' => 'ReportStatus',
        'reportType' => 'ReportType',
        'reportVersion' => 'ReportVersion',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->pinnedTime) {
            $res['PinnedTime'] = $this->pinnedTime;
        }
        if (null !== $this->reportDays) {
            $res['ReportDays'] = $this->reportDays;
        }
        if (null !== $this->reportEndDate) {
            $res['ReportEndDate'] = $this->reportEndDate;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->reportStartDate) {
            $res['ReportStartDate'] = $this->reportStartDate;
        }
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }
        if (null !== $this->reportVersion) {
            $res['ReportVersion'] = $this->reportVersion;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reportList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['PinnedTime'])) {
            $model->pinnedTime = $map['PinnedTime'];
        }
        if (isset($map['ReportDays'])) {
            $model->reportDays = $map['ReportDays'];
        }
        if (isset($map['ReportEndDate'])) {
            $model->reportEndDate = $map['ReportEndDate'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ReportStartDate'])) {
            $model->reportStartDate = $map['ReportStartDate'];
        }
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }
        if (isset($map['ReportVersion'])) {
            $model->reportVersion = $map['ReportVersion'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
