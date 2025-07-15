<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\CheckLiveMessageUsersOnlineResponseBody\userList;
use AlibabaCloud\Tea\Model;

class CheckLiveMessageUsersOnlineResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 178F572F-AECF-100B-937A-B8047B4D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of users queried.
     *
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'requestId' => 'RequestId',
        'userList' => 'UserList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return CheckLiveMessageUsersOnlineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
