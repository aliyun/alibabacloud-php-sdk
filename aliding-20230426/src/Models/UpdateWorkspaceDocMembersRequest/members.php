<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersRequest;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @example 012345
     *
     * @var string
     */
    public $memberId;

    /**
     * @example USER
     *
     * @var string
     */
    public $memberType;

    /**
     * @example ONLY_VIEWER
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'memberId'   => 'MemberId',
        'memberType' => 'MemberType',
        'roleType'   => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberType) {
            $res['MemberType'] = $this->memberType;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberType'])) {
            $model->memberType = $map['MemberType'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
