<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserListResponseBody\userList;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'user' => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
