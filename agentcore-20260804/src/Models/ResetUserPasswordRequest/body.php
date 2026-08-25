<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ResetUserPasswordRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $agentCoreUserId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'agentCoreUserId' => 'agentCoreUserId',
        'password' => 'password',
        'username' => 'username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCoreUserId) {
            $res['agentCoreUserId'] = $this->agentCoreUserId;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
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
        if (isset($map['agentCoreUserId'])) {
            $model->agentCoreUserId = $map['agentCoreUserId'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
