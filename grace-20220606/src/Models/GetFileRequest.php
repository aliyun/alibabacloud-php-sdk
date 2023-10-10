<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models;

use AlibabaCloud\Tea\Model;

class GetFileRequest extends Model
{
    /**
     * @example 1597871211794192-1682563156700-402185-1682563123810-bbbbb
     *
     * @var string
     */
    public $name;

    /**
     * @example 924cb178-32e6-453a-a553-83289f9f494c
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'name'  => 'name',
        'token' => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
