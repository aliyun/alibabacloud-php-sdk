<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SaveCustomizeReportConfigRequest extends Model
{
    /**
     * @description The grouping type. Valid values:
     *
     *   **ALIYUN_RG**
     *   **SAS_GROUP**
     *
     * >  This parameter is supported only in version 2.0.0.
     *
     * @example SAS_GROUP
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The time when the report is pinned. Unit: milliseconds.
     *
     * >  This parameter is supported only in version 2.0.0.
     *
     * @example 1717430400000
     *
     * @var int
     */
    public $pinnedTime;

    /**
     * @description The email address of the recipient. Separate multiple email addresses with commas (,).
     *
     * This parameter is required.
     *
     * @example xxx@163.com
     *
     * @var string
     */
    public $recipients;

    /**
     * @description The most recent days for report statistics.
     *
     * >  This parameter is supported only in version 2.0.0.
     *
     * @example 7
     *
     * @var int
     */
    public $reportDays;

    /**
     * @description The end date on which the report is sent. The value is in the yyyy-MM-dd format.
     *
     * >  This parameter is required if the ReportType parameter is set to 3.
     *
     * @example 2024-01-15
     *
     * @var string
     */
    public $reportEndDate;

    /**
     * @description The ID of the report.
     *
     * >  You can call the [DescribeCustomizeReportList](~~DescribeCustomizeReportList~~) operation to query the ID.
     *
     * @example 123
     *
     * @var int
     */
    public $reportId;

    /**
     * @description The language of the report. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $reportLang;

    /**
     * @description The time range in which the report is sent. Valid values:
     *
     *   **1**: 00:00 to 06:00.
     *   **2**: 06:00 to 12:00.
     *   **3**: 12:00 to 18:00.
     *   **4**: 18:00 to 24:00.
     *
     * @example 2
     *
     * @var int
     */
    public $reportSendType;

    /**
     * @description The start date on which the report is sent. The value is in the yyyy-MM-dd format.
     *
     * >  This parameter is required if the ReportType parameter is set to 3.
     *
     * @example 2024-01-01
     *
     * @var string
     */
    public $reportStartDate;

    /**
     * @description The status of the report. Valid values:
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $reportStatus;

    /**
     * @description The type of the report. Valid values:
     *
     *   **0**: daily report.
     *   **1**: weekly report.
     *   **2**: monthly report.
     *   **3**: report whose statistics are collected within a custom time range.
     *   **4**: report of the most recent time range.
     *
     * This parameter is required.
     *
     * @example 4
     *
     * @var int
     */
    public $reportType;

    /**
     * @description The version of the report. Valid values:
     *
     *   **1.0.0**
     *   **2.0.0**
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $reportVersion;

    /**
     * @description The end time at which the report is sent. The value is in the HH:mm:ss format.
     *
     * >  This parameter is required if the ReportType parameter is set to 0, 1, 2, or 4.
     *
     * @example 10:00:00
     *
     * @var string
     */
    public $sendEndTime;

    /**
     * @description The exact day within the sending period.
     *
     * >  This parameter is supported only in version 2.0.0.
     *
     * @example 12
     *
     * @var int
     */
    public $sendPeriodDays;

    /**
     * @description The interval at which the report is sent. Valid values:
     *
     *   **DAY**
     *   **WEEK**
     *   **MONTH**
     *
     * >  This parameter is supported only in version 2.0.0.
     *
     * @example MONTH
     *
     * @var string
     */
    public $sendPeriodType;

    /**
     * @description The start time at which the report is sent. The value is in the HH:mm:ss format.
     *
     * >  This parameter is required if the ReportType parameter is set to 0, 1, 2, or 4.
     *
     * @example 09:00:00
     *
     * @var string
     */
    public $sendStartTime;

    /**
     * @description The groups.
     *
     * >  This parameter is supported only in version 2.0.0.
     *
     * @example 12,123
     *
     * @var string
     */
    public $targetGroups;

    /**
     * @description The ID of the Alibaba Cloud account. Separate multiple IDs with commas (,).
     *
     * >  This parameter is supported only in version 2.0.0.
     *
     * @example 12,123
     *
     * @var string
     */
    public $targetUids;

    /**
     * @description The title of the report.
     *
     * This parameter is required.
     *
     * @example Daily Report
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'groupType' => 'GroupType',
        'pinnedTime' => 'PinnedTime',
        'recipients' => 'Recipients',
        'reportDays' => 'ReportDays',
        'reportEndDate' => 'ReportEndDate',
        'reportId' => 'ReportId',
        'reportLang' => 'ReportLang',
        'reportSendType' => 'ReportSendType',
        'reportStartDate' => 'ReportStartDate',
        'reportStatus' => 'ReportStatus',
        'reportType' => 'ReportType',
        'reportVersion' => 'ReportVersion',
        'sendEndTime' => 'SendEndTime',
        'sendPeriodDays' => 'SendPeriodDays',
        'sendPeriodType' => 'SendPeriodType',
        'sendStartTime' => 'SendStartTime',
        'targetGroups' => 'TargetGroups',
        'targetUids' => 'TargetUids',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->pinnedTime) {
            $res['PinnedTime'] = $this->pinnedTime;
        }
        if (null !== $this->recipients) {
            $res['Recipients'] = $this->recipients;
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
        if (null !== $this->reportLang) {
            $res['ReportLang'] = $this->reportLang;
        }
        if (null !== $this->reportSendType) {
            $res['ReportSendType'] = $this->reportSendType;
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
        if (null !== $this->sendEndTime) {
            $res['SendEndTime'] = $this->sendEndTime;
        }
        if (null !== $this->sendPeriodDays) {
            $res['SendPeriodDays'] = $this->sendPeriodDays;
        }
        if (null !== $this->sendPeriodType) {
            $res['SendPeriodType'] = $this->sendPeriodType;
        }
        if (null !== $this->sendStartTime) {
            $res['SendStartTime'] = $this->sendStartTime;
        }
        if (null !== $this->targetGroups) {
            $res['TargetGroups'] = $this->targetGroups;
        }
        if (null !== $this->targetUids) {
            $res['TargetUids'] = $this->targetUids;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveCustomizeReportConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['PinnedTime'])) {
            $model->pinnedTime = $map['PinnedTime'];
        }
        if (isset($map['Recipients'])) {
            $model->recipients = $map['Recipients'];
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
        if (isset($map['ReportLang'])) {
            $model->reportLang = $map['ReportLang'];
        }
        if (isset($map['ReportSendType'])) {
            $model->reportSendType = $map['ReportSendType'];
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
        if (isset($map['SendEndTime'])) {
            $model->sendEndTime = $map['SendEndTime'];
        }
        if (isset($map['SendPeriodDays'])) {
            $model->sendPeriodDays = $map['SendPeriodDays'];
        }
        if (isset($map['SendPeriodType'])) {
            $model->sendPeriodType = $map['SendPeriodType'];
        }
        if (isset($map['SendStartTime'])) {
            $model->sendStartTime = $map['SendStartTime'];
        }
        if (isset($map['TargetGroups'])) {
            $model->targetGroups = $map['TargetGroups'];
        }
        if (isset($map['TargetUids'])) {
            $model->targetUids = $map['TargetUids'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
