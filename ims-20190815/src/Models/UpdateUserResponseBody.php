<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateUserResponseBody\user;
use AlibabaCloud\Tea\Model;

class UpdateUserResponseBody extends Model
{
    /**
     * @var user
     */
    public $user;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'user'      => 'User',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
