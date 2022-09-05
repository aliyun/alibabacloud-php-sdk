<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\alertRuleContent;

use AlibabaCloud\Tea\Model;

class alertRuleItems extends Model
{
    /**
     * @var string
     */
    public $aggregate;

    /**
     * @var string
     */
    public $metricKey;

    /**
     * @var float
     */
    public $n;

    /**
     * @var string
     */
    public $operator;

    /**
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
