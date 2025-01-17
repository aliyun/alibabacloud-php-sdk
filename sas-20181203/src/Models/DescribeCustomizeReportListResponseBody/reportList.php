<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomizeReportListResponseBody;

use AlibabaCloud\Dara\Model;

class reportList extends Model
{
    /**
     * @var string
     */
    public $isDefault;
    /**
     * @var int
     */
    public $pinnedTime;
    /**
     * @var int
     */
    public $reportDays;
    /**
     * @var int
     */
    public $reportEndDate;
    /**
     * @var int
     */
    public $reportId;
    /**
     * @var int
     */
    public $reportStartDate;
    /**
     * @var string
     */
    public $reportStatus;
    /**
     * @var int
     */
    public $reportType;
    /**
     * @var string
     */
    public $reportVersion;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'isDefault'       => 'IsDefault',
        'pinnedTime'      => 'PinnedTime',
        'reportDays'      => 'ReportDays',
        'reportEndDate'   => 'ReportEndDate',
        'reportId'        => 'ReportId',
        'reportStartDate' => 'ReportStartDate',
        'reportStatus'    => 'ReportStatus',
        'reportType'      => 'ReportType',
        'reportVersion'   => 'ReportVersion',
        'title'           => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
