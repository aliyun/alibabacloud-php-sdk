<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\alertRuleContent;

use AlibabaCloud\Tea\Model;

class alertRuleItems extends Model
{
    /**
     * @example AVG
     *
     * @var string
     */
    public $aggregate;

    /**
     * @example appstat.jvm.non_heap_used
     *
     * @var string
     */
    public $metricKey;

    /**
     * @example 1
     *
     * @var float
     */
    public $n;

    /**
     * @example CURRENT_GTE
     *
     * @var string
     */
    public $operator;

    /**
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
