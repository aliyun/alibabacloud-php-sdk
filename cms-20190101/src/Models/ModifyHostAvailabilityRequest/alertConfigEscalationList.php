<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;

use AlibabaCloud\Dara\Model;

class alertConfigEscalationList extends Model
{
    /**
     * @var string
     */
    public $aggregate;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $times;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'aggregate' => 'Aggregate',
        'metricName' => 'MetricName',
        'operator' => 'Operator',
        'times' => 'Times',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
