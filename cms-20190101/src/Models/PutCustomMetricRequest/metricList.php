<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricRequest;

use AlibabaCloud\Tea\Model;

class metricList extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **PutCustomMetric**.
     *
     * @example {"sampleName1":"value1","sampleName2":"value2"}
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 12345
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The type of the reported data. Valid values of N: 1 to 21. Valid values:
     *
     *   0: reports raw data
     *   1: reports aggregate data
     *
     * >  We recommend that you report aggregate data in both the aggregation periods of 60s and 300s. Otherwise, you cannot query monitoring data in a time span that is more than seven days.
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The aggregation period. Valid values of N: 1 to 21. Unit: seconds. Valid values: 60 and 300.
     *
     * >  If the MetricList.N.Type parameter is set to 1, the MetricList.N.Period parameter is required.
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The collection of metric values. Valid values of N: 1 to 21.
     *
     * >  If the MetricList.N.Type parameter is set to 0, the keys in this parameter must be set to the specified value. CloudMonitor aggregates raw data in each aggregation period to generate multiple statistical values, such as the maximum value, the count, and the total value.
     * @example 1508136760000
     *
     * @var string
     */
    public $time;

    /**
     * @description The timestamp when the metric data is generated. Valid values of N: 1 to 21. The timestamp can be in one of the following formats:
     *
     *   The UTC timestamp that is in the YYYY-MM-DDThh:mm:ssZ format. Example: 20171012T132456.888+0800.
     *   The UNIX timestamp of the LONG type. Example: 1508136760000.
     *
     * @example 0
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the request.
     *
     * @example {"value":10.5}
     *
     * @var string
     */
    public $values;
    protected $_name = [
        'dimensions' => 'Dimensions',
        'groupId'    => 'GroupId',
        'metricName' => 'MetricName',
        'period'     => 'Period',
        'time'       => 'Time',
        'type'       => 'Type',
        'values'     => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
