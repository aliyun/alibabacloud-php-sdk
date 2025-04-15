<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAccountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'accountStatus' => 'accountStatus',
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
        if (null !== $this->accountStatus) {
            $res['accountStatus'] = $this->accountStatus;
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
        if (isset($map['accountStatus'])) {
            $model->accountStatus = $map['accountStatus'];
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
