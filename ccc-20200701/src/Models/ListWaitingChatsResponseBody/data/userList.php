<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsResponseBody\data;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @example c361765f-******-4e07-b81c-4b5d9183fac6
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @example CUSTOMER
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'avatarUrl' => 'AvatarUrl',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'userType' => 'UserType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
