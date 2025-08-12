<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupUsersResponseBody\userList;

class ListLiveMessageGroupUsersResponseBody extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $hasmore;

    /**
     * @var int
     */
    public $nextPageToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'groupId' => 'GroupId',
        'hasmore' => 'Hasmore',
        'nextPageToken' => 'NextPageToken',
        'requestId' => 'RequestId',
        'userList' => 'UserList',
    ];

    public function validate()
    {
        if (\is_array($this->userList)) {
            Model::validateArray($this->userList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->hasmore) {
            $res['Hasmore'] = $this->hasmore;
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['UserList'] = [];
                $n1 = 0;
                foreach ($this->userList as $item1) {
                    $res['UserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Hasmore'])) {
            $model->hasmore = $map['Hasmore'];
        }

        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n1 = 0;
                foreach ($map['UserList'] as $item1) {
                    $model->userList[$n1] = userList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
