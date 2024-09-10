<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest;

use AlibabaCloud\Tea\Model;

class aggregates extends Model
{
    /**
     * @description The alias of the aggregate function. Valid values of N: 1 to 10.
     *
     * This parameter is required.
     * @example Count
     *
     * @var string
     */
    public $alias;

    /**
     * @description The name of the field to be aggregated. Valid values of N: 1 to 10.
     *
     * This parameter is required.
     * @example sourceCount
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The function that is used to aggregate log data within a statistical period. Valid values of N: 1 to 10. Valid values:
     *
     *   count: counts the number.
     *   sum: calculates the total value.
     *   avg: calculates the average value.
     *   max: calculates the maximum value.
     *   min: calculates the minimum value.
     *   countps: calculates the number of values of the specified field divided by the total number of seconds within a statistical period.
     *   sumps: calculates the sum of the values of the specified field divided by the total number of seconds within a statistical period.
     *   distinct: calculates the number of unique values of the specified field within a statistical period.
     *
     * This parameter is required.
     * @example count
     *
     * @var string
     */
    public $function;
    protected $_name = [
        'alias'     => 'Alias',
        'fieldName' => 'FieldName',
        'function'  => 'Function',
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

        return $model;
    }
}
