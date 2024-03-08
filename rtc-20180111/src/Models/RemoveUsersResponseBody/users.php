<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveUsersResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 1811****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'code'    => 'Code',
        'message' => 'Message',
        'userId'  => 'UserId',
    ];

    public function validate()
    {
    }

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
     * @return users
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
