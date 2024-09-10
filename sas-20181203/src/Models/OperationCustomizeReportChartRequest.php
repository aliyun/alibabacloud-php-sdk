<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperationCustomizeReportChartRequest extends Model
{
    /**
     * @description The ID of the chart that is included in the report. Separate multiple IDs with commas (,).
     *
     * This parameter is required.
     * @example CID_VUL_SUMMARY,CID_VUL_TREND,CID_VUL_OPERATION_TREND,CID_BASELINE_CHECK_SUMMARY,CID_BASELINE_CHECK_TREND,CID_BASELINE_CHECK_OPERATION_TREND
     *
     * @var string
     */
    public $chartIds;

    /**
     * @description The ID of the report.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $reportId;
    protected $_name = [
        'chartIds' => 'ChartIds',
        'reportId' => 'ReportId',
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
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperationCustomizeReportChartRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChartIds'])) {
            $model->chartIds = $map['ChartIds'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        return $model;
    }
}
