<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListGroupsForUserResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'groupId' => 'groupId',
        'groupMemberRelationSourceId' => 'groupMemberRelationSourceId',
        'groupMemberRelationSourceType' => 'groupMemberRelationSourceType',
        'instanceId' => 'instanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->groupMemberRelationSourceId) {
            $res['groupMemberRelationSourceId'] = $this->groupMemberRelationSourceId;
        }

        if (null !== $this->groupMemberRelationSourceType) {
            $res['groupMemberRelationSourceType'] = $this->groupMemberRelationSourceType;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['groupMemberRelationSourceId'])) {
            $model->groupMemberRelationSourceId = $map['groupMemberRelationSourceId'];
        }

        if (isset($map['groupMemberRelationSourceType'])) {
            $model->groupMemberRelationSourceType = $map['groupMemberRelationSourceType'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
