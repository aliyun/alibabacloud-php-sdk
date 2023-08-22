<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponseBody\resetUsersResult;

use AlibabaCloud\Tea\Model;

class failedUsers extends Model
{
    /**
     * @description The ID of the convenience user whose password failed to be reset.
     *
     * @example test123
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The error code.
     *
     * @example InvalidUsername
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example test123 is an invalid username.
     *
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'endUserId'    => 'EndUserId',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}
