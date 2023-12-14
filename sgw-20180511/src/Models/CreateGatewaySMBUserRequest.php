<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewaySMBUserRequest extends Model
{
    /**
     * @example gw-000eg44nmxbsfwbvq2**
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example 123***
     *
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example alex
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'gatewayId'     => 'GatewayId',
        'password'      => 'Password',
        'securityToken' => 'SecurityToken',
        'username'      => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewaySMBUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
