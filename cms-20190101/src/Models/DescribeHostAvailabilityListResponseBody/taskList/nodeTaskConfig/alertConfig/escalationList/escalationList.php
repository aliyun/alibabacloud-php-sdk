<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\escalationList;

use AlibabaCloud\Tea\Model;

class escalationList extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $times;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $aggregate;
    protected $_name = [
        'value'      => 'Value',
        'metricName' => 'MetricName',
        'times'      => 'Times',
        'operator'   => 'Operator',
        'aggregate'  => 'Aggregate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->aggregate) {
            $res['Aggregate'] = $this->aggregate;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Aggregate'])) {
            $model->aggregate = $map['Aggregate'];
        }

        return $model;
    }
}
