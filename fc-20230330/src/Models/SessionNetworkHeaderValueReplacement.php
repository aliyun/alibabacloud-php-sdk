<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class SessionNetworkHeaderValueReplacement extends Model
{
    /**
     * @var string
     */
    public $placeholder;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'placeholder' => 'placeholder',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->placeholder) {
            $res['placeholder'] = $this->placeholder;
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
        if (isset($map['placeholder'])) {
            $model->placeholder = $map['placeholder'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
