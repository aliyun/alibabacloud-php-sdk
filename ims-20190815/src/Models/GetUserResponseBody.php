<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserResponseBody\user;
use AlibabaCloud\Tea\Model;

class GetUserResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 4507D1CD-526A-4E2B-A1E2-3AB045D1EE0B
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
