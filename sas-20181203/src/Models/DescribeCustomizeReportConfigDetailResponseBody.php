<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeCustomizeReportConfigDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $chartIds;
    /**
     * @var string
     */
    public $groupType;
    /**
     * @var int
     */
    public $isDefault;
    /**
     * @var int
     */
    public $pinnedTime;
    /**
     * @var string
     */
    public $recipients;
    /**
     * @var int
     */
    public $reportDays;
    /**
     * @var string
     */
    public $reportEndDate;
    /**
     * @var int
     */
    public $reportId;
    /**
     * @var string
     */
    public $reportLang;
    /**
     * @var string
     */
    public $reportSendType;
    /**
     * @var string
     */
    public $reportStartDate;
    /**
     * @var string
     */
    public $reportStatus;
    /**
     * @var string
     */
    public $reportType;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $sendEndTime;
    /**
     * @var int
     */
    public $sendPeriodDays;
    /**
     * @var string
     */
    public $sendPeriodType;
    /**
     * @var string
     */
    public $sendStartTime;
    /**
     * @var string
     */
    public $sendTime;
    /**
     * @var string
     */
    public $targetGroups;
    /**
     * @var string
     */
    public $targetUids;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
