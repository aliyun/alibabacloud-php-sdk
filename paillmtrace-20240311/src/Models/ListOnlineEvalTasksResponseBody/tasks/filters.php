<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListOnlineEvalTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The key of the filter condition.
     *
     * @example ServiceId
     * ServiceName
     * Input
     * Output
     * Status
     * TraceType
     * SpanType
     * TraceName
     * SpanName
     *
     * @var string
     */
    public $key;

    /**
     * @description The matching operator of the filter condition.
     *
     * @example =
     * StartsWith
     * Contains
     *
     * @var string
     */
    public $operator;

    /**
     * @description The value of the filter condition.
     *
     * @example foo
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'operator' => 'Operator',
        'value' => 'Value',
    ];

    public function validate() {}

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
     * @return filters
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
