<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody\createResult;

use AlibabaCloud\Tea\Model;

class failedUsers extends Model
{
    /**
     * @description The email address of the end user.
     *
     * @example username2@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The name of the end user.
     *
     * @example test2
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The error code returned if the request failed.
     *
     * @example ExistedEndUserId
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example The username test is used by another user.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The mobile number of the end user.
     *
     * @example 1390000****
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'email'        => 'Email',
        'endUserId'    => 'EndUserId',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'phone'        => 'Phone',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedUsers
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
