<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupUsersResponseBody\userList;
use AlibabaCloud\Tea\Model;

class ListLiveMessageGroupUsersResponseBody extends Model
{
    /**
     * @description The ID of the group queried.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Indicates whether the current page is followed by another page.
     *
     * @example false
     *
     * @var bool
     */
    public $hasmore;

    /**
     * @description The starting page number for the next query. A value of 0 indicates that no further pages can be queried.
     *
     * @example 0
     *
     * @var int
     */
    public $nextPageToken;

    /**
     * @description The request ID.
     *
     * @example A1D75BEA-1329-116F-B29C-76F3F200****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the users.
     *
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

    public function validate() {}

    public function toMap()
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
     * @return ListLiveMessageGroupUsersResponseBody
     */
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
                $n = 0;
                foreach ($map['UserList'] as $item) {
                    $model->userList[$n++] = null !== $item ? userList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
