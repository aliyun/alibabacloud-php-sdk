<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @description The time when the user was created.
     *
     * @example 2018-07-18T17:46:47
     *
     * @var string
     */
    public $addTime;

    /**
     * @description The name of the permission group. Valid values:
     *
     *   users: an ordinary permission group. It is applicable to ordinary users that need only to submit and debug jobs.
     *   wheel: a sudo permission group. It is applicable to the administrator who needs to manage the cluster. In addition to submitting and debugging jobs, users who have sudo permissions can run sudo commands to install software and restart nodes.
     *
     * @example wheel
     *
     * @var string
     */
    public $group;

    /**
     * @description The username of the account.
     *
     * @example user1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'addTime' => 'AddTime',
        'group'   => 'Group',
        'name'    => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
