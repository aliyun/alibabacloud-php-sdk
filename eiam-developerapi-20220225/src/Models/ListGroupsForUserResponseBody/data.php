<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListGroupsForUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $groupMemberRelationSourceId;

    /**
     * @example build_in
     *
     * @var string
     */
    public $groupMemberRelationSourceType;

    /**
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'groupId' => 'groupId',
        'groupMemberRelationSourceId' => 'groupMemberRelationSourceId',
        'groupMemberRelationSourceType' => 'groupMemberRelationSourceType',
        'instanceId' => 'instanceId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
