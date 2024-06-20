<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\StartChatRequest;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @example http://xxx.com/image
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @example fcd020fe-d8e4-40e5-8c77-1a272a174a7d
     *
     * @var string
     */
    public $userId;

    /**
     * @example CUSTOMER
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'avatarUrl' => 'AvatarUrl',
        'nickname'  => 'Nickname',
        'userId'    => 'UserId',
        'userType'  => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
