<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\JwtIdentityConfig;

use AlibabaCloud\Dara\Model;

class jwtTokenConfig extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var bool
     */
    public $pass;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $prefix;
    protected $_name = [
        'key' => 'key',
        'pass' => 'pass',
        'position' => 'position',
        'prefix' => 'prefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->pass) {
            $res['pass'] = $this->pass;
        }

        if (null !== $this->position) {
            $res['position'] = $this->position;
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
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
            $model->key = $map['key'];
        }

        if (isset($map['pass'])) {
            $model->pass = $map['pass'];
        }

        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        return $model;
    }
}
