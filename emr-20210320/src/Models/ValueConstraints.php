<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ValueConstraints extends Model
{
    /**
     * @var int
     */
    public $defaultValue;
    /**
     * @var int
     */
    public $end;
    /**
     * @var int
     */
    public $start;
    /**
     * @var int
     */
    public $step;
    /**
     * @var string
     */
    public $type;
    /**
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
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1            = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1++] = $item1;
                }
            }
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
                $model->values = [];
                $n1            = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
