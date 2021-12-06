<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class ResetUserPasswordRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var bool
     */
    public $generateRandomPassword;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $requirePasswordResetForNextLogin;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'directoryId'                      => 'DirectoryId',
        'generateRandomPassword'           => 'GenerateRandomPassword',
        'password'                         => 'Password',
        'requirePasswordResetForNextLogin' => 'RequirePasswordResetForNextLogin',
        'userId'                           => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->generateRandomPassword) {
            $res['GenerateRandomPassword'] = $this->generateRandomPassword;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->requirePasswordResetForNextLogin) {
            $res['RequirePasswordResetForNextLogin'] = $this->requirePasswordResetForNextLogin;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetUserPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['GenerateRandomPassword'])) {
            $model->generateRandomPassword = $map['GenerateRandomPassword'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RequirePasswordResetForNextLogin'])) {
            $model->requirePasswordResetForNextLogin = $map['RequirePasswordResetForNextLogin'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
