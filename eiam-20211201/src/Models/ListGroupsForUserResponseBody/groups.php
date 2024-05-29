<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForUserResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description The group ID.
     *
     * @example group_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupMemberRelationSourceId;

    /**
     * @var string
     */
    public $groupMemberRelationSourceType;
    protected $_name = [
        'groupId'                       => 'GroupId',
        'groupMemberRelationSourceId'   => 'GroupMemberRelationSourceId',
        'groupMemberRelationSourceType' => 'GroupMemberRelationSourceType',
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
        if (null !== $this->groupMemberRelationSourceId) {
            $res['GroupMemberRelationSourceId'] = $this->groupMemberRelationSourceId;
        }
        if (null !== $this->groupMemberRelationSourceType) {
            $res['GroupMemberRelationSourceType'] = $this->groupMemberRelationSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupMemberRelationSourceId'])) {
            $model->groupMemberRelationSourceId = $map['GroupMemberRelationSourceId'];
        }
        if (isset($map['GroupMemberRelationSourceType'])) {
            $model->groupMemberRelationSourceType = $map['GroupMemberRelationSourceType'];
        }

        return $model;
    }
}
