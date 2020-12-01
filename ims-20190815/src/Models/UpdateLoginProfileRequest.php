<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateLoginProfileRequest extends Model
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
     * @var string
     */
    public $status;
    protected $_name = [
        'userPrincipalName'     => 'UserPrincipalName',
        'password'              => 'Password',
        'passwordResetRequired' => 'PasswordResetRequired',
        'MFABindRequired'       => 'MFABindRequired',
        'status'                => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('userPrincipalName', $this->userPrincipalName, true);
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
