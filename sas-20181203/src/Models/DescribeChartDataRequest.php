<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeChartDataRequest extends Model
{
    /**
     * @description The ID of the chart.
     *
     * >  You can call the [DescribeChartList](~~DescribeChartList~~) operation to query the ID. This parameter is required if the report version is 1.0.0.
     *
     * @example CID_ASSET_RISK_TREND
     *
     * @var string
     */
    public $charId;

    /**
     * @description The ID of the chart.
     *
     * >  You can call the [DescribeChartList](~~DescribeChartList~~) operation to query the ID. This parameter is required if the report version is 2.0.0.
     *
     * @example CID_VUL_SUMMARY
     *
     * @var string
     */
    public $chartId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the security report.
     *
     * >  You can call the [DescribeCustomizeReportList](~~DescribeCustomizeReportList~~) operation to query the ID.
     *
     * @example 721734
     *
     * @var int
     */
    public $reportId;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1683862286000
     *
     * @var int
     */
    public $timeEnd;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1683603086000
     *
     * @var int
     */
    public $timeStart;
    protected $_name = [
        'charId' => 'CharId',
        'chartId' => 'ChartId',
        'lang' => 'Lang',
        'reportId' => 'ReportId',
        'timeEnd' => 'TimeEnd',
        'timeStart' => 'TimeStart',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->charId) {
            $res['CharId'] = $this->charId;
        }
        if (null !== $this->chartId) {
            $res['ChartId'] = $this->chartId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }
        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChartDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharId'])) {
            $model->charId = $map['CharId'];
        }
        if (isset($map['ChartId'])) {
            $model->chartId = $map['ChartId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }
        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }

        return $model;
    }
}
