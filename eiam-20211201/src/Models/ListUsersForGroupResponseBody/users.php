<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForGroupResponseBody;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $groupMemberRelationSourceId;

    /**
     * @var string
     */
    public $groupMemberRelationSourceType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'groupMemberRelationSourceId' => 'GroupMemberRelationSourceId',
        'groupMemberRelationSourceType' => 'GroupMemberRelationSourceType',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupMemberRelationSourceId) {
            $res['GroupMemberRelationSourceId'] = $this->groupMemberRelationSourceId;
        }

        if (null !== $this->groupMemberRelationSourceType) {
            $res['GroupMemberRelationSourceType'] = $this->groupMemberRelationSourceType;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['GroupMemberRelationSourceId'])) {
            $model->groupMemberRelationSourceId = $map['GroupMemberRelationSourceId'];
        }

        if (isset($map['GroupMemberRelationSourceType'])) {
            $model->groupMemberRelationSourceType = $map['GroupMemberRelationSourceType'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
