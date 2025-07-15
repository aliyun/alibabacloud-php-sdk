<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\BatchGetOnlineUsersResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\BatchGetOnlineUsersResponseBody\result\onlineUsers;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The information about users.
     *
     * @var onlineUsers[]
     */
    public $onlineUsers;
    protected $_name = [
        'onlineUsers' => 'OnlineUsers',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineUsers) {
            $res['OnlineUsers'] = [];
            if (null !== $this->onlineUsers && \is_array($this->onlineUsers)) {
                $n = 0;
                foreach ($this->onlineUsers as $item) {
                    $res['OnlineUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlineUsers'])) {
            if (!empty($map['OnlineUsers'])) {
                $model->onlineUsers = [];
                $n = 0;
                foreach ($map['OnlineUsers'] as $item) {
                    $model->onlineUsers[$n++] = null !== $item ? onlineUsers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
