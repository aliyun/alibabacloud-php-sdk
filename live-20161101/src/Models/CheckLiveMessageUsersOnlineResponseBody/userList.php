<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\CheckLiveMessageUsersOnlineResponseBody;

use AlibabaCloud\Dara\Model;

class userList extends Model
{
    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'online' => 'Online',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
