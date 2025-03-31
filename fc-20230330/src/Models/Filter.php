<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class Filter extends Model
{
    /**
     * @var Key
     */
    public $key;
    protected $_name = [
        'key' => 'key',
    ];

    public function validate()
    {
        if (null !== $this->key) {
            $this->key->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = null !== $this->key ? $this->key->toArray($noStream) : $this->key;
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
        if (isset($map['key'])) {
            $model->key = Key::fromMap($map['key']);
        }

        return $model;
    }
}
