<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserResponseBody\groups;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description The description of the RAM user group.
     *
     * @example Dev-Team
     *
     * @var string
     */
    public $comments;

    /**
     * @description The ID of the RAM user group.
     *
     * @example g-zYtroLrgbZR1****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the RAM user group.
     *
     * @example Dev-Team
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The time when the RAM user joined the RAM user group.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $joinDate;
    protected $_name = [
        'comments'  => 'Comments',
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
        'joinDate'  => 'JoinDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->joinDate) {
            $res['JoinDate'] = $this->joinDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return group
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['JoinDate'])) {
            $model->joinDate = $map['JoinDate'];
        }

        return $model;
    }
}
