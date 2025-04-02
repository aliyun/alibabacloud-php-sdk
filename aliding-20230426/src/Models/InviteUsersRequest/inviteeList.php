<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest;

use AlibabaCloud\Dara\Model;

class inviteeList extends Model
{
    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'nick' => 'Nick',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
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
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
