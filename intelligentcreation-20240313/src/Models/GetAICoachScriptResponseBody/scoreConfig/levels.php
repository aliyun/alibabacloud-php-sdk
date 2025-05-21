<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\scoreConfig;

use AlibabaCloud\Dara\Model;

class levels extends Model
{
    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'max' => 'max',
        'min' => 'min',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->max) {
            $res['max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['min'] = $this->min;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['max'])) {
            $model->max = $map['max'];
        }

        if (isset($map['min'])) {
            $model->min = $map['min'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
