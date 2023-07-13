<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserGroupsRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The new permission group of the user N. Valid values:
     *
     *   users: an ordinary permission group. It is applicable to ordinary users that need only to submit and debug jobs.
     *   wheel: a sudo permission group. It is applicable to the administrator who needs to manage the cluster. In addition to submitting and debugging jobs, users who have sudo permissions can run sudo commands to install software and restart nodes.
     *
     * @example users
     *
     * @var string
     */
    public $group;

    /**
     * @description The name of the user N whose permissions you want to modify. Valid values of N: 1 to 100.
     *
     * You can call the [ListUsers](~~188572~~) operation to query the users of the cluster.
     * @example user11
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'group' => 'Group',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
