<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;

use AlibabaCloud\Tea\Model;

class alertConfigEscalationList extends Model
{
    /**
     * @description The method used to calculate the metric values that trigger alerts. Valid values of N: 1 to 21. The value of this parameter varies based on the metric. The following items show the correspondence between metrics and calculation methods:
     *
     *   HttpStatus: Value
     *   HttpLatency: Average
     *   TelnetStatus: Value
     *   TelnetLatency: Average
     *   PingLostRate: Average
     *
     * > The value Value indicates the original value and is used for metrics such as status codes. The value Average indicates the average value and is used for metrics such as the latency and packet loss rate.
     * @example Value
     *
     * @var string
     */
    public $aggregate;

    /**
     * @description The metric for which the alert feature is enabled. Valid values of N: 1 to 21. Valid values:
     *
     *   HttpStatus: HTTP status code
     *   HttpLatency: HTTP response time
     *   TelnetStatus: Telnet status code
     *   TelnetLatency: Telnet response time
     *   PingLostRate: Ping packet loss rate
     *
     * @example HttpStatus
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The comparison operator that is used in the alert rule. Valid values of N: 1 to 21. Valid values:
     *
     *   `>`
     *   `>=`
     *   `<`
     *   `<=`
     *   `=`
     *
     * @example >
     *
     * @var string
     */
    public $operator;

    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before an alert is triggered. Valid values of N: 1 to 21.
     *
     * @example 3
     *
     * @var int
     */
    public $times;

    /**
     * @description The alert threshold. Valid values of N: 1 to 21.
     *
     * @example 3
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
     * @return alertConfigEscalationList
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
