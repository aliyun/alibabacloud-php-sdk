<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class HyperParameterRange extends Model
{
    /**
     * @var string[]
     */
    public $enum;

    /**
     * @var bool
     */
    public $exclusiveMaximum;

    /**
     * @var bool
     */
    public $exclusiveMinimum;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $maximum;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var string
     */
    public $minimum;

    /**
     * @var string
     */
    public $pattern;
    protected $_name = [
        'enum' => 'Enum',
        'exclusiveMaximum' => 'ExclusiveMaximum',
        'exclusiveMinimum' => 'ExclusiveMinimum',
        'maxLength' => 'MaxLength',
        'maximum' => 'Maximum',
        'minLength' => 'MinLength',
        'minimum' => 'Minimum',
        'pattern' => 'Pattern',
    ];

    public function validate()
    {
        if (\is_array($this->enum)) {
            Model::validateArray($this->enum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enum) {
            if (\is_array($this->enum)) {
                $res['Enum'] = [];
                $n1 = 0;
                foreach ($this->enum as $item1) {
                    $res['Enum'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exclusiveMaximum) {
            $res['ExclusiveMaximum'] = $this->exclusiveMaximum;
        }

        if (null !== $this->exclusiveMinimum) {
            $res['ExclusiveMinimum'] = $this->exclusiveMinimum;
        }

        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }

        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }

        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }

        if (null !== $this->minimum) {
            $res['Minimum'] = $this->minimum;
        }

        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
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
        if (isset($map['Enum'])) {
            if (!empty($map['Enum'])) {
                $model->enum = [];
                $n1 = 0;
                foreach ($map['Enum'] as $item1) {
                    $model->enum[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExclusiveMaximum'])) {
            $model->exclusiveMaximum = $map['ExclusiveMaximum'];
        }

        if (isset($map['ExclusiveMinimum'])) {
            $model->exclusiveMinimum = $map['ExclusiveMinimum'];
        }

        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }

        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }

        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }

        if (isset($map['Minimum'])) {
            $model->minimum = $map['Minimum'];
        }

        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }

        return $model;
    }
}
