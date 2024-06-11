<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetLoginProfileResponseBody;

use AlibabaCloud\Tea\Model;

class loginProfile extends Model
{
    /**
     * @description The time when the logon configurations were created.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description Indicates whether an MFA device must be attached to the RAM user upon logon.
     *
     * @example true
     *
     * @var bool
     */
    public $MFABindRequired;

    /**
     * @description Indicates whether the RAM user must change the password upon logon.
     *
     * @example true
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
        'createDate'            => 'CreateDate',
        'MFABindRequired'       => 'MFABindRequired',
        'passwordResetRequired' => 'PasswordResetRequired',
        'userName'              => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->MFABindRequired) {
            $res['MFABindRequired'] = $this->MFABindRequired;
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
     * @return loginProfile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['MFABindRequired'])) {
            $model->MFABindRequired = $map['MFABindRequired'];
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
