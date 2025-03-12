<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateLoginProfileRequest extends Model
{
    /**
     * @description Specifies whether to forcefully enable multi-factor authentication (MFA) for the RAM user. Valid values:
     *
     *   true: forcefully enables MFA for the RAM user. The RAM user must bind an MFA device upon the next logon.
     *   false: does not forcefully enable MFA for the RAM user.
     *
     * @example false
     *
     * @var bool
     */
    public $MFABindRequired;

    /**
     * @description The new password that is used to log on to the console.
     *
     * The new password must meet the complexity requirements.
     * @example mypassword
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether the RAM user is required to reset the password upon the next logon. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $passwordResetRequired;

    /**
     * @description Specifies whether to enable password-based logons to the console. Valid values:
     *
     *   Active: enables password-based logons to the console.
     *   Inactive: disables password-based logons to the console.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The logon name of the RAM user.
     *
     * This parameter is required.
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'MFABindRequired'       => 'MFABindRequired',
        'password'              => 'Password',
        'passwordResetRequired' => 'PasswordResetRequired',
        'status'                => 'Status',
        'userPrincipalName'     => 'UserPrincipalName',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLoginProfileRequest
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
