<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class Variable extends Model
{
    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'encrypted' => 'encrypted',
        'sensitive' => 'sensitive',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }

        if (null !== $this->sensitive) {
            $res['sensitive'] = $this->sensitive;
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
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }

        if (isset($map['sensitive'])) {
            $model->sensitive = $map['sensitive'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
