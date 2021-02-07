<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateLoginProfileRequest extends Model
{
    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $passwordResetRequired;

    /**
     * @var bool
     */
    public $MFABindRequired;

    /**
     * @var bool
     */
    public $generateRandomPassword;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $akProxySuffix;
    protected $_name = [
        'userPrincipalName'      => 'UserPrincipalName',
        'password'               => 'Password',
        'passwordResetRequired'  => 'PasswordResetRequired',
        'MFABindRequired'        => 'MFABindRequired',
        'generateRandomPassword' => 'GenerateRandomPassword',
        'status'                 => 'Status',
        'akProxySuffix'          => 'AkProxySuffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordResetRequired) {
            $res['PasswordResetRequired'] = $this->passwordResetRequired;
        }
        if (null !== $this->MFABindRequired) {
            $res['MFABindRequired'] = $this->MFABindRequired;
        }
        if (null !== $this->generateRandomPassword) {
            $res['GenerateRandomPassword'] = $this->generateRandomPassword;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoginProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordResetRequired'])) {
            $model->passwordResetRequired = $map['PasswordResetRequired'];
        }
        if (isset($map['MFABindRequired'])) {
            $model->MFABindRequired = $map['MFABindRequired'];
        }
        if (isset($map['GenerateRandomPassword'])) {
            $model->generateRandomPassword = $map['GenerateRandomPassword'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }

        return $model;
    }
}
