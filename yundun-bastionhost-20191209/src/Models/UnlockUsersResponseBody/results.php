<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UnlockUsersResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The result of the call. Valid values:
     *
     *   **OK**: The call was successful.
     *
     *   **UNEXPECTED**: An unknown error occurred.
     *
     *   **INVALID_ARGUMENT**: A request parameter is invalid.
     *   **OBJECT_AlREADY_EXISTS**: The specified object on which you want to perform the operation already exists.
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is deprecated.
     *
     * @example N/A
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the user.
     *
     * @example １
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
