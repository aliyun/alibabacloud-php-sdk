<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreateLoginProfileRequest extends Model
{
    /**
     * @description Specifies whether an MFA device must be attached to the RAM user upon logon. Default value: `false`.
     *
     * @example false
     *
     * @var bool
     */
    public $MFABindRequired;

    /**
     * @description The logon password of the RAM user. The password must meet the password strength requirements. For more information, see [GetPasswordPolicy](https://help.aliyun.com/document_detail/2337691.html).
     *
     * @example mypassword
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether the RAM user must change the password upon logon. Default value: `false`.
     *
     * @example false
     *
     * @var bool
     */
    public $passwordResetRequired;

    /**
     * @description The name of the RAM user.
     *
     * @example zhangq****
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'MFABindRequired'       => 'MFABindRequired',
        'password'              => 'Password',
        'passwordResetRequired' => 'PasswordResetRequired',
        'userName'              => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MFABindRequired) {
            $res['MFABindRequired'] = $this->MFABindRequired;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordResetRequired) {
            $res['PasswordResetRequired'] = $this->passwordResetRequired;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['MFABindRequired'])) {
            $model->MFABindRequired = $map['MFABindRequired'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordResetRequired'])) {
            $model->passwordResetRequired = $map['PasswordResetRequired'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
