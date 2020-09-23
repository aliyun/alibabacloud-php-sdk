<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class taints extends Model
{
    /**
     * @description 调度策略。
     *
     * @var string
     */
    public $effect;

    /**
     * @description 污点key。
     *
     * @var string
     */
    public $key;

    /**
     * @description 污点值。
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'effect' => 'effect',
        'key'    => 'key',
        'value'  => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
