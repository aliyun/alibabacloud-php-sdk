<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest;

use AlibabaCloud\Tea\Model;

class valueFilter extends Model
{
    /**
     * @description The name of the log field that is used for matching in the filter condition. Valid values of N: 1 to 10.
     *
     * @example lh_source
     *
     * @var string
     */
    public $key;

    /**
     * @description The method that is used to match the field value. Valid values of N: 1 to 10. Valid values:
     *
     *   `contain`: contains
     *   `notContain`: does not contain
     *   `>`: be greater than
     *   `<`: be less than
     *   `>=`: be greater than or equal to
     *   `<=`: be less than or equal to
     *
     * @example Operator
     *
     * @var string
     */
    public $operator;

    /**
     * @description The field value to be matched in the filter condition. Valid values of N: 1 to 10.
     *
     * @example test
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
