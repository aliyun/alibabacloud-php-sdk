<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaySMBUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @example alex***
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'username' => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
