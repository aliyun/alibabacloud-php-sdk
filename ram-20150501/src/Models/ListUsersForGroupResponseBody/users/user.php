<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersForGroupResponseBody\users;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The display name of the RAM user.
     *
     * @example Alice
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The time when the RAM user joined the RAM user group.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $joinDate;

    /**
     * @description The name of the RAM user.
     *
     * @example zhangqiang
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'displayName' => 'DisplayName',
        'joinDate'    => 'JoinDate',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->joinDate) {
            $res['JoinDate'] = $this->joinDate;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['JoinDate'])) {
            $model->joinDate = $map['JoinDate'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
