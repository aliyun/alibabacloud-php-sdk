<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetInspectionTaskResponseBody\inspectionTask;

use AlibabaCloud\Tea\Model;

class inspectionAlarmRules extends Model
{
    /**
     * @example 11
     *
     * @var string
     */
    public $actualValue;

    /**
     * @example >
     *
     * @var string
     */
    public $expression;

    /**
     * @example WARNING
     *
     * @var string
     */
    public $level;

    /**
     * @example A
     *
     * @var string
     */
    public $operator;

    /**
     * @example 10
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'actualValue' => 'ActualValue',
        'expression'  => 'Expression',
        'level'       => 'Level',
        'operator'    => 'Operator',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualValue) {
            $res['ActualValue'] = $this->actualValue;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
     * @return inspectionAlarmRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualValue'])) {
            $model->actualValue = $map['ActualValue'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
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
