<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponseBody\logMonitor;

use AlibabaCloud\Tea\Model;

class valueFilter extends Model
{
    /**
     * @description The field value to be matched in the filter condition.
     *
     * @example hostName
     *
     * @var string
     */
    public $key;

    /**
     * @description The size of the tumbling window for calculation. Unit: seconds. The system performs an aggregation for each tumbling window.
     *
     * @example contain
     *
     * @var string
     */
    public $operator;

    /**
     * @description The method that is used to match the field value. Valid values:
     *
     *   `contain`
     *   `notContain`
     *   `>`: greater than
     *   `<`: less than
     *   `>=`: greater than or equal to
     *   `<=`: less than or equal to
     *
     * @example portal
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'      => 'Key',
        'operator' => 'Operator',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
     * @return valueFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
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
