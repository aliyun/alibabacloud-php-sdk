<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers;
use AlibabaCloud\Tea\Model;

class DescribeUsersInGroupResponseBody extends Model
{
    /**
     * @description Details about the end users.
     *
     * @var endUsers[]
     */
    public $endUsers;

    /**
     * @description The token that is used to start the next query.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of authorized users that are connecting to cloud desktops.
     *
     * @example 0
     *
     * @var int
     */
    public $onlineUsersCount;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of authorized users of the desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $usersCount;
    protected $_name = [
        'endUsers'         => 'EndUsers',
        'nextToken'        => 'NextToken',
        'onlineUsersCount' => 'OnlineUsersCount',
        'requestId'        => 'RequestId',
        'usersCount'       => 'UsersCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUsers) {
            $res['EndUsers'] = [];
            if (null !== $this->endUsers && \is_array($this->endUsers)) {
                $n = 0;
                foreach ($this->endUsers as $item) {
                    $res['EndUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->onlineUsersCount) {
            $res['OnlineUsersCount'] = $this->onlineUsersCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->usersCount) {
            $res['UsersCount'] = $this->usersCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsersInGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUsers'])) {
            if (!empty($map['EndUsers'])) {
                $model->endUsers = [];
                $n               = 0;
                foreach ($map['EndUsers'] as $item) {
                    $model->endUsers[$n++] = null !== $item ? endUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OnlineUsersCount'])) {
            $model->onlineUsersCount = $map['OnlineUsersCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsersCount'])) {
            $model->usersCount = $map['UsersCount'];
        }

        return $model;
    }
}
