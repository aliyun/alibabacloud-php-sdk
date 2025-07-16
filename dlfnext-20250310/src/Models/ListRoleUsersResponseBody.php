<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListRoleUsersResponseBody extends Model
{
    /**
     * @example token!
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @var User[]
     */
    public $users;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'users' => 'users',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->users) {
            $res['users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRoleUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }
        if (isset($map['users'])) {
            if (!empty($map['users'])) {
                $model->users = [];
                $n = 0;
                foreach ($map['users'] as $item) {
                    $model->users[$n++] = null !== $item ? User::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
