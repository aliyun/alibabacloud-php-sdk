<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricMetaListResponseBody\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The metric description.
     *
     * @example CPUUtilization
     *
     * @var string
     */
    public $description;

    /**
     * @description The monitoring dimensions of the resource. Multiple monitoring dimensions are separated with commas (,).
     *
     * @example instanceId
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The tags of the metric, including one or more JSON strings.
     *
     * Format: `[{"name":"tag key","value":"tag value"}]`. The `name` can be repeated. The following tags are available:
     *
     *   metricCategory: the category of the metric.
     *   alertEnable: indicates whether to report alerts for the metric.
     *   alertUnit: the unit of the metric in the alerts.
     *   unitFactor: the factor for metric unit conversion.
     *   minAlertPeriod: the minimum interval at which the alert is reported.
     *   productCategory: the category of the service.
     *
     * @example [{\\"name\\":\\"alertUnit\\",\\"value\\":\\"Bytes\\"},{\\"name\\":\\"minAlertPeriod\\",\\"value\\":\\"60\\"},{\\"name\\":\\"metricCategory\\",\\"value\\":\\"instanceId\\"},{\\"name\\":\\"instanceType\\",\\"value\\":\\"disaster\\"},{\\"name\\":\\"is_alarm\\",\\"value\\":\\"true\\"},{\\"name\\":\\"productCategory\\",\\"value\\":\\"kvstore_old\\"}]
     *
     * @var string
     */
    public $labels;

    /**
     * @description The metric name.
     *
     * @example CPUUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * @example acs_kvstore
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The statistical periods of the metric. Multiple statistical periods are separated with commas (,).
     *
     * Unit: seconds.
     * @example 60,300
     *
     * @var string
     */
    public $periods;

    /**
     * @description The statistical method. Multiple statistical methods are separated with commas (,).
     *
     * @example Average,Minimum,Maximum
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The unit of the metric.
     *
     * @example %
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'description' => 'Description',
        'dimensions'  => 'Dimensions',
        'labels'      => 'Labels',
        'metricName'  => 'MetricName',
        'namespace'   => 'Namespace',
        'periods'     => 'Periods',
        'statistics'  => 'Statistics',
        'unit'        => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->periods) {
            $res['Periods'] = $this->periods;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Periods'])) {
            $model->periods = $map['Periods'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
