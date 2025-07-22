<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelAllUsersResponseBody\users;
use AlibabaCloud\Tea\Model;

class DescribeChannelAllUsersResponseBody extends Model
{
    /**
     * @var bool
     */
    public $channelExist;

    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CF8
     *
     * @var string
     */
    public $requestId;

    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'channelExist' => 'ChannelExist',
        'requestId' => 'RequestId',
        'users' => 'Users',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelExist) {
            $res['ChannelExist'] = $this->channelExist;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelAllUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelExist'])) {
            $model->channelExist = $map['ChannelExist'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? users::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
