<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody\summary;
use AlibabaCloud\Tea\Model;

class DescribeNisInspectionReportSummaryResponseBody extends Model
{
    /**
     * @example 2024-06-03 09:36:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example nir-38abb318b27b49cc9a01
     *
     * @var string
     */
    public $inspectionReportId;

    /**
     * @example ni-8svmpe0yso2bhzr7fh79
     *
     * @var string
     */
    public $inspectionTaskId;

    /**
     * @example 4838F3F2-30E1-5D82-B25A-B9FE33BC3E25
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2024-06-03 09:35:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @var summary
     */
    public $summary;
    protected $_name = [
        'endTime'            => 'EndTime',
        'inspectionReportId' => 'InspectionReportId',
        'inspectionTaskId'   => 'InspectionTaskId',
        'requestId'          => 'RequestId',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
        'summary'            => 'Summary',
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
        if (null !== $this->inspectionReportId) {
            $res['InspectionReportId'] = $this->inspectionReportId;
        }
        if (null !== $this->inspectionTaskId) {
            $res['InspectionTaskId'] = $this->inspectionTaskId;
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
        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNisInspectionReportSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InspectionReportId'])) {
            $model->inspectionReportId = $map['InspectionReportId'];
        }
        if (isset($map['InspectionTaskId'])) {
            $model->inspectionTaskId = $map['InspectionTaskId'];
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
        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }

        return $model;
    }
}
