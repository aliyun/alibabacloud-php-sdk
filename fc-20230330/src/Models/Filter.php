<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = null !== $this->key ? $this->key->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = Key::fromMap($map['key']);
        }

        return $model;
    }
}
