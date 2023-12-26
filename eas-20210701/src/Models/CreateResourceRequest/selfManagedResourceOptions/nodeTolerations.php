<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest\selfManagedResourceOptions;

use AlibabaCloud\Tea\Model;

class nodeTolerations extends Model
{
    /**
     * @description 效果
     *
     * @example NoSchedule
     *
     * @var string
     */
    public $effect;

    /**
     * @description 键名
     *
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description 键名和键值的关系
     *
     * @example Equal
     *
     * @var string
     */
    public $operator;

    /**
     * @description 键值
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'effect'   => 'effect',
        'key'      => 'key',
        'operator' => 'operator',
        'value'    => 'value',
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
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeTolerations
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
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
