<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMuteGroupUserResponseBody\result;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @description The ID of the muted user.
     *
     * @example 1sd***,yu***
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
