<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\alertRuleContent;

use AlibabaCloud\Tea\Model;

class alertRuleItems extends Model
{
    /**
     * @description The aggregation method of the alert condition. Valid values:
     *
     *   AVG: calculates the average value
     *   SUM: calculates the total value
     *   MAX: selects the maximum value
     *   MIN: selects the minimum value
     *
     * @example AVG
     *
     * @var string
     */
    public $aggregate;

    /**
     * @description The metric of the alert condition.
     *
     * @example appstat.jvm.non_heap_used
     *
     * @var string
     */
    public $metricKey;

    /**
     * @description Indicates the last N minutes.
     *
     * @example 1
     *
     * @var float
     */
    public $n;

    /**
     * @description The comparison operator that was used to compare the metric value with the threshold. Valid values:
     *
     *   CURRENT_GTE: greater than or equal to
     *   CURRENT_LTE: less than or equal to
     *   PREVIOUS_UP: the increase percentage compared with the last period
     *   PREVIOUS_DOWN: the decrease percentage compared with the last period
     *   HOH_UP: the increase percentage compared with the last hour
     *   HOH_DOWN: the decrease percentage compared with the last hour
     *   DOD_UP: the increase percentage compared with the last day
     *   DOD_DOWN: the decrease percentage compared with the last day
     *
     * @example CURRENT_GTE
     *
     * @var string
     */
    public $operator;

    /**
     * @description The threshold of the alert condition.
     *
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'aggregate' => 'Aggregate',
        'metricKey' => 'MetricKey',
        'n'         => 'N',
        'operator'  => 'Operator',
        'value'     => 'Value',
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
        if (null !== $this->metricKey) {
            $res['MetricKey'] = $this->metricKey;
        }
        if (null !== $this->n) {
            $res['N'] = $this->n;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertRuleItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregate'])) {
            $model->aggregate = $map['Aggregate'];
        }
        if (isset($map['MetricKey'])) {
            $model->metricKey = $map['MetricKey'];
        }
        if (isset($map['N'])) {
            $model->n = $map['N'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
