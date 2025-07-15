<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\CheckLiveMessageUsersInGroupResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description Indicates whether the user is in the group.
     *
     * @example false
     *
     * @var bool
     */
    public $online;

    /**
     * @description The ID of the user.
     *
     * @example uid1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'online' => 'Online',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->online) {
            $res['Online'] = $this->online;
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
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
