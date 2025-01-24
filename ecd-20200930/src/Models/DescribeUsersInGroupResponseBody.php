<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers;

class DescribeUsersInGroupResponseBody extends Model
{
    /**
     * @var endUsers[]
     */
    public $endUsers;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var int
     */
    public $onlineUsersCount;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->endUsers)) {
            Model::validateArray($this->endUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUsers) {
            if (\is_array($this->endUsers)) {
                $res['EndUsers'] = [];
                $n1              = 0;
                foreach ($this->endUsers as $item1) {
                    $res['EndUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUsers'])) {
            if (!empty($map['EndUsers'])) {
                $model->endUsers = [];
                $n1              = 0;
                foreach ($map['EndUsers'] as $item1) {
                    $model->endUsers[$n1++] = endUsers::fromMap($item1);
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
