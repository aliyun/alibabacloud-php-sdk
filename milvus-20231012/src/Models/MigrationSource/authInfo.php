<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\MigrationSource;

use AlibabaCloud\Dara\Model;

class authInfo extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'authType' => 'authType',
        'password' => 'password',
        'token' => 'token',
        'username' => 'username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
