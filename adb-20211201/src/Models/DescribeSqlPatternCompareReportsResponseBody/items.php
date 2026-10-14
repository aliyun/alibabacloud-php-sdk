<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSqlPatternCompareReportsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $cancelAvailable;

    /**
     * @var string
     */
    public $compareEndTime;

    /**
     * @var string
     */
    public $compareStartTime;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $detailEnabled;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $reportId;

    /**
     * @var string
     */
    public $reportType;

    /**
     * @var string
     */
    public $reportTypeName;

    /**
     * @var int
     */
    public $rowNumber;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cancelAvailable' => 'CancelAvailable',
        'compareEndTime' => 'CompareEndTime',
        'compareStartTime' => 'CompareStartTime',
        'createdAt' => 'CreatedAt',
        'detailEnabled' => 'DetailEnabled',
        'endTime' => 'EndTime',
        'reportId' => 'ReportId',
        'reportType' => 'ReportType',
        'reportTypeName' => 'ReportTypeName',
        'rowNumber' => 'RowNumber',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelAvailable) {
            $res['CancelAvailable'] = $this->cancelAvailable;
        }

        if (null !== $this->compareEndTime) {
            $res['CompareEndTime'] = $this->compareEndTime;
        }

        if (null !== $this->compareStartTime) {
            $res['CompareStartTime'] = $this->compareStartTime;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->detailEnabled) {
            $res['DetailEnabled'] = $this->detailEnabled;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        if (null !== $this->reportTypeName) {
            $res['ReportTypeName'] = $this->reportTypeName;
        }

        if (null !== $this->rowNumber) {
            $res['RowNumber'] = $this->rowNumber;
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
        if (isset($map['CancelAvailable'])) {
            $model->cancelAvailable = $map['CancelAvailable'];
        }

        if (isset($map['CompareEndTime'])) {
            $model->compareEndTime = $map['CompareEndTime'];
        }

        if (isset($map['CompareStartTime'])) {
            $model->compareStartTime = $map['CompareStartTime'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DetailEnabled'])) {
            $model->detailEnabled = $map['DetailEnabled'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        if (isset($map['ReportTypeName'])) {
            $model->reportTypeName = $map['ReportTypeName'];
        }

        if (isset($map['RowNumber'])) {
            $model->rowNumber = $map['RowNumber'];
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
