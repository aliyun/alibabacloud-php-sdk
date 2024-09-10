<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomizeReportConfigDetailResponseBody extends Model
{
    /**
     * @description The ID of the chart that is included in the report. Multiple IDs are separated by commas (,).
     *
     * @example BIZ_STAT_QUERY_KEY_ATTACK,CUSTOM_VUL_CVE_LIST,CUSTOM_VUL_SYS_LIST,CUSTOM_VUL_WEBCMS_LIST,CUSTOM_AUTO_BREAKING_PIE,CUSTOM_AK_LEAK_LIST,KEY_HP_TAMPERPROOF,KEY_HP_DEFENCE
     *
     * @var string
     */
    public $chartIds;

    /**
     * @description The grouping type. Valid values:
     *
     *   **ALIYUN_RG**
     *   **SAS_GROUP**
     *
     * @example SAS_GROUP
     *
     * @var string
     */
    public $groupType;

    /**
     * @description Indicates whether the report is the default report. Valid values:
     *
     *   **0**: no.
     *   **1**: yes.
     *
     * @example 1
     *
     * @var int
     */
    public $isDefault;

    /**
     * @description The time when the report is pinned.
     *
     * @example 1717430400000
     *
     * @var int
     */
    public $pinnedTime;

    /**
     * @description The email address of the recipient. Multiple email addresses are separated by commas (,).
     *
     * @example PengZheng@eaton.com,ZhongJi@Eaton.com
     *
     * @var string
     */
    public $recipients;

    /**
     * @description The most recent days for report statistics.
     *
     * @example 30
     *
     * @var int
     */
    public $reportDays;

    /**
     * @description The end date on which the report is sent.
     *
     * @example 1720022399999
     *
     * @var string
     */
    public $reportEndDate;

    /**
     * @description The ID of the report.
     *
     * @example 663434
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
     * @var string
     */
    public $reportSendType;

    /**
     * @description The start date on which the report is sent.
     *
     * @example 1717430400000
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
     * @example 1
     *
     * @var string
     */
    public $reportStatus;

    /**
     * @description The type of the report. Valid values:
     *
     *   **0**: daily report.
     *   **1**: weekly report.
     *   **2**: monthly report.
     *   **3**: report whose statistics are collected in a custom time range.
     *
     * @example 3
     *
     * @var string
     */
    public $reportType;

    /**
     * @description The request ID.
     *
     * @example 379a9b8f-107b-4630-9e95-2299a1ea****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The end time at which the report is sent. The value is in the HH:mm:ss format.
     *
     * @example 10:00:00
     *
     * @var string
     */
    public $sendEndTime;

    /**
     * @description The exact day within the sending period.
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
     * @example MONTH
     *
     * @var string
     */
    public $sendPeriodType;

    /**
     * @description The start time at which the report is sent. The value is in the HH:mm:ss format.
     *
     * @example 09:00:00
     *
     * @var string
     */
    public $sendStartTime;

    /**
     * @description The time at which the report is sent. The value is in the HH:mm:ss format.
     *
     * @example 09:00:00
     *
     * @var string
     */
    public $sendTime;

    /**
     * @description The groups.
     *
     * @example 12125884,12140191
     *
     * @var string
     */
    public $targetGroups;

    /**
     * @description The ID of the Alibaba Cloud account. Multiple IDs are separated by commas (,).
     *
     * @example 1457515594445744,1600011353839072,1766185894104675,1674080148055995,1627510829033157
     *
     * @var string
     */
    public $targetUids;

    /**
     * @description The title of the report.
     *
     * @example marketing report
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'chartIds'        => 'ChartIds',
        'groupType'       => 'GroupType',
        'isDefault'       => 'IsDefault',
        'pinnedTime'      => 'PinnedTime',
        'recipients'      => 'Recipients',
        'reportDays'      => 'ReportDays',
        'reportEndDate'   => 'ReportEndDate',
        'reportId'        => 'ReportId',
        'reportLang'      => 'ReportLang',
        'reportSendType'  => 'ReportSendType',
        'reportStartDate' => 'ReportStartDate',
        'reportStatus'    => 'ReportStatus',
        'reportType'      => 'ReportType',
        'requestId'       => 'RequestId',
        'sendEndTime'     => 'SendEndTime',
        'sendPeriodDays'  => 'SendPeriodDays',
        'sendPeriodType'  => 'SendPeriodType',
        'sendStartTime'   => 'SendStartTime',
        'sendTime'        => 'SendTime',
        'targetGroups'    => 'TargetGroups',
        'targetUids'      => 'TargetUids',
        'title'           => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chartIds) {
            $res['ChartIds'] = $this->chartIds;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
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
     * @return DescribeCustomizeReportConfigDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChartIds'])) {
            $model->chartIds = $map['ChartIds'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
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
