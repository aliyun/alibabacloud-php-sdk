<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\escalationList;

use AlibabaCloud\Tea\Model;

class escalationList extends Model
{
    /**
     * @description The method used to calculate metric values that trigger alerts. Valid values:
     *
     *   Value: the value of the HTTP status code
     *   Average: the average HTTP response time
     *   Value: the value of the Telnet status code
     *   TelnetLatency: the average Telnet response time
     *   Average: the average Ping packet loss rate
     *
     * @example Value
     *
     * @var string
     */
    public $aggregate;

    /**
     * @description The name of the metric. Valid values:
     *
     *   HttpStatus
     *   HttpLatency
     *   TelnetStatus
     *   TelnetLatency
     *   PingLostRate
     *
     * @example HttpStatus
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The comparison operator that is used in the alert rule. Valid values:
     *
     *   `>`
     *   `>=`
     *   `<`
     *   `<=`
     *   `=`
     *
     * @example =
     *
     * @var string
     */
    public $operator;

    /**
     * @description The consecutive number of times for which the metric value is measured before an alert is triggered.
     *
     * @example 3
     *
     * @var string
     */
    public $times;

    /**
     * @description The alert threshold.
     *
     * @example 400
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'aggregate'  => 'Aggregate',
        'metricName' => 'MetricName',
        'operator'   => 'Operator',
        'times'      => 'Times',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregate) {
            $res['Aggregate'] = $this->aggregate;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregate'])) {
            $model->aggregate = $map['Aggregate'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
