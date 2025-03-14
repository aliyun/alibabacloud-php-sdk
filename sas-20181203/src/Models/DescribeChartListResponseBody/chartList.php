<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartListResponseBody;

use AlibabaCloud\Tea\Model;

class chartList extends Model
{
    /**
     * @description The name of the business type. Valid values:
     *
     *   Overall Operations Metrics
     *   Asset Operations Metrics
     *   Security Alert Operations Metrics
     *   Vulnerability Operations Metrics
     *   Baseline Operations Metrics
     *   Cloud Product Operations Metrics
     *   Honeypot Operations Metrics
     *
     * @example Overall Operation Metrics
     *
     * @var string
     */
    public $businessName;

    /**
     * @description The business type. Valid values:
     *
     *   INDEX_SECURITY_OVERALL_OPERATION
     *   INDEX_ASSET_OPERATION
     *   INDEX_SUSPICIOUS_OPERATION
     *   INDEX_VUL_OPERATION
     *   INDEX_BASELINE_CHECK_OPERATION
     *   INDEX_CLOUD_ASSET_OPERATION
     *   INDEX_HONEYPOT_RISK_OPERATION
     *
     * @example INDEX_SECURITY_OVERALL_OPERATION
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The ID of the chart.
     *
     * @example CID_CLOUD_ASSET_SUMMARY
     *
     * @var string
     */
    public $chartId;

    /**
     * @description The name of the chart.
     *
     * @example Security Score
     *
     * @var string
     */
    public $chartName;

    /**
     * @description The type of the chart. Valid values:
     *
     *   **text**
     *   **table**
     *   **gauge**
     *   **pie**
     *   **line**
     *   **bar**
     *   **timeBar**
     *   **timeLine**
     *
     * @example text
     *
     * @var string
     */
    public $chartType;
    protected $_name = [
        'businessName' => 'BusinessName',
        'businessType' => 'BusinessType',
        'chartId' => 'ChartId',
        'chartName' => 'ChartName',
        'chartType' => 'ChartType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->chartId) {
            $res['ChartId'] = $this->chartId;
        }
        if (null !== $this->chartName) {
            $res['ChartName'] = $this->chartName;
        }
        if (null !== $this->chartType) {
            $res['ChartType'] = $this->chartType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chartList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['ChartId'])) {
            $model->chartId = $map['ChartId'];
        }
        if (isset($map['ChartName'])) {
            $model->chartName = $map['ChartName'];
        }
        if (isset($map['ChartType'])) {
            $model->chartType = $map['ChartType'];
        }

        return $model;
    }
}
