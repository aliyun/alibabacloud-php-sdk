<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterRequest;

use AlibabaCloud\Dara\Model;

class taints extends Model
{
    /**
     * @var string
     */
    public $effect;
    /**
     * @var string
     */
    public $key;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
