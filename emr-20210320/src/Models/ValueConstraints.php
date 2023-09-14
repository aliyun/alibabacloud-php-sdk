<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ValueConstraints extends Model
{
    /**
     * @description 默认值。
     *
     * @var int
     */
    public $defaultValue;

    /**
     * @description 结束值。
     *
     * @var int
     */
    public $end;

    /**
     * @description 起始值。
     *
     * @var int
     */
    public $start;

    /**
     * @description 步长。
     *
     * @var int
     */
    public $step;

    /**
     * @description 值限制类型。
     *
     * @var string
     */
    public $type;

    /**
     * @description 枚举值。
     *
     * @example null
     *
     * @var int[]
     */
    public $values;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'end'          => 'End',
        'start'        => 'Start',
        'step'         => 'Step',
        'type'         => 'Type',
        'values'       => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValueConstraints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
