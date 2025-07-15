<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupMessagesResponseBody\messageList;

use AlibabaCloud\Tea\Model;

class sender extends Model
{
    /**
     * @description The ID of the user who sent the message.
     *
     * @example uid2
     *
     * @var string
     */
    public $userId;

    /**
     * @description The additional information about the user who sent the message.
     *
     * @example testusermeta2
     *
     * @var string
     */
    public $userInfo;
    protected $_name = [
        'userId' => 'UserId',
        'userInfo' => 'UserInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = $this->userInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sender
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = $map['UserInfo'];
        }

        return $model;
    }
}
