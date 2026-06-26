<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class SetUserPasswordRequest extends Model
{
    /**
     * @var bool
     */
    public $generateRandomPassword;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPoolName;
    protected $_name = [
        'generateRandomPassword' => 'GenerateRandomPassword',
        'password' => 'Password',
        'userName' => 'UserName',
        'userPoolName' => 'UserPoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateRandomPassword) {
            $res['GenerateRandomPassword'] = $this->generateRandomPassword;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userPoolName) {
            $res['UserPoolName'] = $this->userPoolName;
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
        if (isset($map['GenerateRandomPassword'])) {
            $model->generateRandomPassword = $map['GenerateRandomPassword'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserPoolName'])) {
            $model->userPoolName = $map['UserPoolName'];
        }

        return $model;
    }
}
