<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForUserResponseBody;

use AlibabaCloud\Dara\Model;

class groups extends Model
{
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['GroupMemberRelationSourceId'])) {
            $model->groupMemberRelationSourceId = $map['GroupMemberRelationSourceId'];
        }

        if (isset($map['GroupMemberRelationSourceType'])) {
            $model->groupMemberRelationSourceType = $map['GroupMemberRelationSourceType'];
        }

        return $model;
    }
}
