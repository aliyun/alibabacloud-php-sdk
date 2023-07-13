<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricMetaListResponseBody\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The unit of the metric.
     *
     * @example CPUUtilization
     *
     * @var string
     */
    public $description;

    /**
     * @description The statistical period of the metric. Multiple statistical periods are separated with commas (,).
     *
     * @example instanceId
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The dimensions of the metric. Multiple dimensions are separated with commas (,).
     *
     * @example [{\"name\":\"alertUnit\",\"value\":\"Bytes\"},{\"name\":\"minAlertPeriod\",\"value\":\"60\"},{\"name\":\"metricCategory\",\"value\":\"instanceId\"},{\"name\":\"instanceType\",\"value\":\"disaster\"},{\"name\":\"is_alarm\",\"value\":\"true\"},{\"name\":\"productCategory\",\"value\":\"kvstore_old\"}]
     *
     * @var string
     */
    public $labels;

    /**
     * @description The tags of the metric, including one or more JSON strings. Format: `[{"name":"tag name","value":"tag value"}]`. The `name` can be repeated.
     *
     * The following tags are available:
     *
     *   metricCategory: the category of the metric.
     *   alertEnable: specifies whether to report alerts for the metric.
     *   alertUnit: the suggested unit of the metric value in alerts.
     *   unitFactor: the factor for metric unit conversion.
     *   minAlertPeriod: the minimum time interval to report a new alert.
     *   productCategory: the category of the service.
     *
     * @example CPUUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The statistical method. Multiple statistic methods are separated with commas (,).
     *
     * @example acs_kvstore
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This operation is usually used with DescribeMetricList and DescribeMetricLast. For more information, see [DescribeMetricList](~~51936~~) and [DescribeMetricLast](~~51939~~).
     *
     * @example 60,300
     *
     * @var string
     */
    public $periods;

    /**
     * @example Average,Minimum,Maximum
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The namespace of the service. The value is usually in the format of acs_Service.
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
