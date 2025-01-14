<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\dataQualityRules\checkingConfig\thresholds;

use AlibabaCloud\Tea\Model;

class warned extends Model
{
    /**
     * @description The comparison operator. Valid values:
     *
     *   \\>
     *   \\>=
     *   <
     *   <=
     *   !=
     *   \\=
     *
     * @example >
     *
     * @var string
     */
    public $operator;

    /**
     * @description The threshold value.
     *
     * @example 0.001
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'operator' => 'Operator',
        'value'    => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warned
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
