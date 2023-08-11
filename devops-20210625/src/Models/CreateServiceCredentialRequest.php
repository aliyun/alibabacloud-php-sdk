<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceCredentialRequest extends Model
{
    /**
     * @example 张三的Git证书
     *
     * @var string
     */
    public $name;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $password;

    /**
     * @example PERSON
     *
     * @var string
     */
    public $scope;

    /**
     * @example USERNAME_PASSWORD
     *
     * @var string
     */
    public $type;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'name'     => 'name',
        'password' => 'password',
        'scope'    => 'scope',
        'type'     => 'type',
        'username' => 'username',
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
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceCredentialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
