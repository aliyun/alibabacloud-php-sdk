<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersRequest;

use AlibabaCloud\Dara\Model;

class members extends Model
{
    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberType;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'memberId' => 'MemberId',
        'memberType' => 'MemberType',
        'roleType' => 'RoleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
