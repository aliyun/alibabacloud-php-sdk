<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserRequest extends Model
{
    /**
     * @description The email address of the convenience user. For a user-activated convenience user, the email address or mobile number must be verified. You can choose to verify the email address or the mobile number. For an administrator-activated convenience user, the email address and mobile number can be left empty.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The name of the user.
     *
     * This parameter is required.
     * @example Alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The mobile number of the convenience user. For a user-activated convenience user, the email address or mobile number must be verified. You can choose to verify the email address or the mobile number. For an administrator-activated convenience user, the email address and mobile number can be left empty.
     *
     * >  Accounts created on the International site (alibabacloud.com) do not support mobile number-based authentication.
     * @example 1381111****
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'email'     => 'Email',
        'endUserId' => 'EndUserId',
        'phone'     => 'Phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
