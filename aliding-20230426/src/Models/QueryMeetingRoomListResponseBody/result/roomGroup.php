<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomGroup extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $groupId;

    /**
     * @example 测试分组
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 0
     *
     * @var int
     */
    public $parentId;
    protected $_name = [
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
        'parentId'  => 'ParentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
