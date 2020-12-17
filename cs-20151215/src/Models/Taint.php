<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class Taint extends Model
{
    /**
     * @description key值。
     *
     * @var string
     */
    public $key;

    /**
     * @description value值。
     *
     * @var string
     */
    public $value;

    /**
     * @description 污点生效策略。
     *
     * @var string
     */
    public $effect;
    protected $_name = [
        'key'    => 'key',
        'value'  => 'value',
        'effect' => 'effect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Taint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }

        return $model;
    }
}
