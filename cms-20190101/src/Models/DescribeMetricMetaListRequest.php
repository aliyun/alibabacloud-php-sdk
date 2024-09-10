<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricMetaListRequest extends Model
{
    /**
     * @description The tags for filtering metrics. Specify a JSON string.
     *
     * Format: ` [{"name":"tag key","value":"tag value"},{"name":"tag key","value":"tag value"}]  `. The following tags are available:
     *
     *   metricCategory: the category of the metric.
     *   alertEnable: specifies whether to report alerts for the metric.
     *   alertUnit: the unit of the metric in the alerts.
     *   unitFactor: the factor for metric unit conversion.
     *   minAlertPeriod: the minimum interval at which the alert is reported.
     *   productCategory: the category of the service.
     *
     * @example [{"name":"productCategory","value":"kvstore_old"}]
     *
     * @var string
     */
    public $labels;

    /**
     * @description The metric name. For more information, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     *
     * @example CPUUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * For more information about the namespaces of cloud services, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     * @example acs_kvstore
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'labels'     => 'Labels',
        'metricName' => 'MetricName',
        'namespace'  => 'Namespace',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricMetaListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
