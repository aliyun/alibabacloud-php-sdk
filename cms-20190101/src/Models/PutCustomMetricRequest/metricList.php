<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricRequest;

use AlibabaCloud\Tea\Model;

class metricList extends Model
{
    /**
     * @description The dimensions that specify the resources whose monitoring data you want to query. Valid values of N: 1 to 21.
     *
     * This parameter is required.
     * @example {"sampleName1":"value1","sampleName2":"value2"}
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The ID of the application group. Valid values of N: 1 to 21.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the metric. Valid values of N: 1 to 21. For more information, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     *
     * This parameter is required.
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
     * @description The timestamp when the metric data is generated. Valid values of N: 1 to 21. The timestamp can be in one of the following formats:
     *
     *   The UTC timestamp that is in the YYYY-MM-DDThh:mm:ssZ format. Example: 20171012T132456.888+0800.
     *   The UNIX timestamp of the LONG type. Example: 1508136760000.
     *
     * @example 1508136760000
     *
     * @var string
     */
    public $time;

    /**
     * @description The type of the reported data. Valid values of N: 1 to 21. Valid values:
     *
     *   0: reports raw data
     *   1: reports aggregate data
     *
     * This parameter is required.
     * @example 0
     *
     * @var string
     */
    public $type;

    /**
     * @description The collection of metric values. Valid values of N: 1 to 21.
     *
     * This parameter is required.
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
