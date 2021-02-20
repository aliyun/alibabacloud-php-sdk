<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelUserListResponseBody;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelUserListResponseBody\userList\userList[]
     */
    public $userList;
    protected $_name = [
        'userList' => 'UserList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userList) {
            $res['UserList'] = [];
            if (null !== $this->userList && \is_array($this->userList)) {
                $n = 0;
                foreach ($this->userList as $item) {
                    $res['UserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n               = 0;
                foreach ($map['UserList'] as $item) {
                    $model->userList[$n++] = null !== $item ? \AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelUserListResponseBody\userList\userList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
