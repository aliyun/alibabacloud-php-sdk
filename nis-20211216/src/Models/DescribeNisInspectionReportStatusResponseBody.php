<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class DescribeNisInspectionReportStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $inspectionProject;

    /**
     * @var string
     */
    public $inspectionReportId;

    /**
     * @var string
     */
    public $inspectionTaskId;

    /**
     * @var string
     */
    public $inspectionTaskName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime' => 'EndTime',
        'inspectionProject' => 'InspectionProject',
        'inspectionReportId' => 'InspectionReportId',
        'inspectionTaskId' => 'InspectionTaskId',
        'inspectionTaskName' => 'InspectionTaskName',
        'requestId' => 'RequestId',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->inspectionProject) {
            $res['InspectionProject'] = $this->inspectionProject;
        }

        if (null !== $this->inspectionReportId) {
            $res['InspectionReportId'] = $this->inspectionReportId;
        }

        if (null !== $this->inspectionTaskId) {
            $res['InspectionTaskId'] = $this->inspectionTaskId;
        }

        if (null !== $this->inspectionTaskName) {
            $res['InspectionTaskName'] = $this->inspectionTaskName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InspectionProject'])) {
            $model->inspectionProject = $map['InspectionProject'];
        }

        if (isset($map['InspectionReportId'])) {
            $model->inspectionReportId = $map['InspectionReportId'];
        }

        if (isset($map['InspectionTaskId'])) {
            $model->inspectionTaskId = $map['InspectionTaskId'];
        }

        if (isset($map['InspectionTaskName'])) {
            $model->inspectionTaskName = $map['InspectionTaskName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
