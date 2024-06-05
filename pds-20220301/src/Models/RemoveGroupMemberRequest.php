<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class RemoveGroupMemberRequest extends Model
{
    /**
     * @description The ID of the group from which you want to remove a member.
     *
     * This parameter is required.
     * @example 3e5***2c2
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the member. If member_type is set to user, set this parameter to the ID of the corresponding user.
     *
     * This parameter is required.
     * @example 2e4***1b1
     *
     * @var string
     */
    public $memberId;

    /**
     * @description The type of the member that you want to remove from the group. Only common users can be removed. If you want to remove all members from a group, you can directly delete the group. Valid value:
     *
     *   user
     *
     * This parameter is required.
     * @example user
     *
     * @var string
     */
    public $memberType;
    protected $_name = [
        'groupId'    => 'group_id',
        'memberId'   => 'member_id',
        'memberType' => 'member_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->memberId) {
            $res['member_id'] = $this->memberId;
        }
        if (null !== $this->memberType) {
            $res['member_type'] = $this->memberType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveGroupMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['group_id'])) {
            $model->groupId = $map['group_id'];
        }
        if (isset($map['member_id'])) {
            $model->memberId = $map['member_id'];
        }
        if (isset($map['member_type'])) {
            $model->memberType = $map['member_type'];
        }

        return $model;
    }
}
