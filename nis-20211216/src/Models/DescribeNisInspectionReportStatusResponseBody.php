<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class DescribeNisInspectionReportStatusResponseBody extends Model
{
    /**
     * @example 2024-07-18 15:13:07
     *
     * @var string
     */
    public $endTime;

    /**
     * @example basic
     *
     * @var string
     */
    public $inspectionProject;

    /**
     * @example nir-2ca527b8de114ba4afb9
     *
     * @var string
     */
    public $inspectionReportId;

    /**
     * @example ni-8svmpe0yso****r7fh79
     *
     * @var string
     */
    public $inspectionTaskId;

    /**
     * @var string
     */
    public $inspectionTaskName;

    /**
     * @example A7F0D6EC-E19E-58AC-AC9F-08036763960F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2024-07-18 15:12:28
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Finish
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'            => 'EndTime',
        'inspectionProject'  => 'InspectionProject',
        'inspectionReportId' => 'InspectionReportId',
        'inspectionTaskId'   => 'InspectionTaskId',
        'inspectionTaskName' => 'InspectionTaskName',
        'requestId'          => 'RequestId',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeNisInspectionReportStatusResponseBody
     */
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
