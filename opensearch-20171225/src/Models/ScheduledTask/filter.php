<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ScheduledTask;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var int
     */
    public $days;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'days' => 'days',
        'expression' => 'expression',
        'field' => 'field',
        'unit' => 'unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->days) {
            $res['days'] = $this->days;
        }

        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        if (null !== $this->field) {
            $res['field'] = $this->field;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['days'])) {
            $model->days = $map['days'];
        }

        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        if (isset($map['field'])) {
            $model->field = $map['field'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
