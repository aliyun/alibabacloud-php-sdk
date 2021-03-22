<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponseBody\saslUserList;

use AlibabaCloud\Tea\Model;

class saslUserVO extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'type'     => 'Type',
        'password' => 'Password',
        'username' => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saslUserVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
