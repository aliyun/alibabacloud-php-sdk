<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\BatchGetOnlineUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\BatchGetOnlineUsersResponseBody\result\onlineUsers;

class result extends Model
{
    /**
     * @var onlineUsers[]
     */
    public $onlineUsers;
    protected $_name = [
        'onlineUsers' => 'OnlineUsers',
    ];

    public function validate()
    {
        if (\is_array($this->onlineUsers)) {
            Model::validateArray($this->onlineUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onlineUsers) {
            if (\is_array($this->onlineUsers)) {
                $res['OnlineUsers'] = [];
                $n1 = 0;
                foreach ($this->onlineUsers as $item1) {
                    $res['OnlineUsers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['OnlineUsers'])) {
            if (!empty($map['OnlineUsers'])) {
                $model->onlineUsers = [];
                $n1 = 0;
                foreach ($map['OnlineUsers'] as $item1) {
                    $model->onlineUsers[$n1] = onlineUsers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
