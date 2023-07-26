<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class EnableResourceDirectoryRequest extends Model
{
    /**
     * @description The mode in which you enable a resource directory. Valid values:
     *
     *   CurrentAccount: The current account is used to enable a resource directory.
     *   NewManagementAccount: A newly created account is used to enable a resource directory. If you select this mode, you must configure the `MAName`, `MASecureMobilePhone`, and `VerificationCode` parameters.
     *
     * @example CurrentAccount
     *
     * @var string
     */
    public $enableMode;

    /**
     * @description The name of the newly created account.
     *
     * Specify the name in the `<Prefix>@rdadmin.aliyunid.com` format. The prefix can contain letters, digits, and special characters but cannot contain consecutive special characters. The prefix must start and end with a letter or digit. Valid special characters include underscores (`_`), periods (.), and hyphens (-). The prefix must be 2 to 50 characters in length.
     * @example user01@rdadmin.aliyunid.com
     *
     * @var string
     */
    public $MAName;

    /**
     * @description The mobile phone number that is bound to the newly created account.
     *
     * > Mobile phone numbers in the `86-<Mobile phone number>` format in the Chinese mainland are not supported.
     * @example xx-13900001234
     *
     * @var string
     */
    public $MASecureMobilePhone;

    /**
     * @description The verification code.
     *
     * You can call the [SendVerificationCodeForEnableRD](~~SendVerificationCodeForEnableRD~~) operation to obtain the verification code.
     * @example 123456
     *
     * @var string
     */
    public $verificationCode;
    protected $_name = [
        'enableMode'          => 'EnableMode',
        'MAName'              => 'MAName',
        'MASecureMobilePhone' => 'MASecureMobilePhone',
        'verificationCode'    => 'VerificationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableMode) {
            $res['EnableMode'] = $this->enableMode;
        }
        if (null !== $this->MAName) {
            $res['MAName'] = $this->MAName;
        }
        if (null !== $this->MASecureMobilePhone) {
            $res['MASecureMobilePhone'] = $this->MASecureMobilePhone;
        }
        if (null !== $this->verificationCode) {
            $res['VerificationCode'] = $this->verificationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableResourceDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableMode'])) {
            $model->enableMode = $map['EnableMode'];
        }
        if (isset($map['MAName'])) {
            $model->MAName = $map['MAName'];
        }
        if (isset($map['MASecureMobilePhone'])) {
            $model->MASecureMobilePhone = $map['MASecureMobilePhone'];
        }
        if (isset($map['VerificationCode'])) {
            $model->verificationCode = $map['VerificationCode'];
        }

        return $model;
    }
}
