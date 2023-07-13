<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig\filter;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The extended field that specifies the result of basic operations performed on aggregation results.
     *
     * @example =
     *
     * @var string
     */
    public $operator;

    /**
     * @description The method that is used to filter logs imported from Log Service. Valid values:
     *
     *   `contain`: contains
     *   `notContain`: does not contain
     *   `>`: greater than
     *   `<`: less than
     *   `=`: equal to
     *   `! =`: not equal to
     *   `>=`: greater than or equal to
     *   `<=`: less than or equal to
     *
     * @example code
     *
     * @var string
     */
    public $SLSKeyName;

    /**
     * @description The name of the metric import task.
     *
     * For information about how to obtain the ID of a metric import task, see [DescribeHybridMonitorTaskList](~~428624~~).
     * @example 200
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'operator'   => 'Operator',
        'SLSKeyName' => 'SLSKeyName',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->SLSKeyName) {
            $res['SLSKeyName'] = $this->SLSKeyName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['SLSKeyName'])) {
            $model->SLSKeyName = $map['SLSKeyName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
