<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceAccountRequest extends Model
{
    /**
     * @description The username of the account.
     *
     * If you do not configure this parameter, the default username of the instance is used.
     * @example test
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'username' => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
