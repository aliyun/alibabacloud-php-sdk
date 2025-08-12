<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupUserResponseBody\result;

use AlibabaCloud\Dara\Model;

class userList extends Model
{
    /**
     * @var int
     */
    public $joinTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'joinTime' => 'JoinTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
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
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
