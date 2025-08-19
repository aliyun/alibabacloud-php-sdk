<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\limiterInfo;

use AlibabaCloud\Dara\Model;

class limiters extends Model
{
    /**
     * @var int
     */
    public $maxValue;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'maxValue' => 'maxValue',
        'minValue' => 'minValue',
        'type' => 'type',
        'values' => 'values',
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
        if (null !== $this->maxValue) {
            $res['maxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['minValue'] = $this->minValue;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['values'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['maxValue'])) {
            $model->maxValue = $map['maxValue'];
        }

        if (isset($map['minValue'])) {
            $model->minValue = $map['minValue'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
