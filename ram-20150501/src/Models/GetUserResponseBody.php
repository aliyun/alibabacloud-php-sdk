<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserResponseBody\user;
use AlibabaCloud\Tea\Model;

class GetUserResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2D69A58F-345C-4FDE-88E4-BF5189484043
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the RAM user.
     *
     * @var user
     */
    public $user;
    protected $_name = [
        'requestId' => 'RequestId',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }

        return $model;
    }
}
