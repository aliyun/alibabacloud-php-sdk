<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponseBody\logMonitor;

use AlibabaCloud\Tea\Model;

class aggregates extends Model
{
    /**
     * @description The alias of the aggregate function.
     *
     * @example HostName
     *
     * @var string
     */
    public $alias;

    /**
     * @description The name of the field in logs.
     *
     * @example hostName
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The function that is used to aggregate the monitoring data of logs within an aggregation period. Valid values:
     *
     *   count: counts the number.
     *   sum: calculates the total value.
     *   avg: calculates the average value.
     *   max: selects the maximum value.
     *   min: selects the minimum value.
     *   countps: calculates the counted number of the specified field divided by the total number of seconds of the aggregation period.
     *   sumps: calculates the total value of the specified field divided by the total number of seconds of the aggregation period.
     *   distinct: counts the number of logs where the specified field appears within the aggregation period.
     *
     * @example count
     *
     * @var string
     */
    public $function;

    /**
     * @description The maximum value.
     *
     * @example 10
     *
     * @var string
     */
    public $max;

    /**
     * @description The minimum value.
     *
     * @example 0
     *
     * @var string
     */
    public $min;
    protected $_name = [
        'alias'     => 'Alias',
        'fieldName' => 'FieldName',
        'function'  => 'Function',
        'max'       => 'Max',
        'min'       => 'Min',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        return $model;
    }
}
