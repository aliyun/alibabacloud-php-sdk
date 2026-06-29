<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanAccountDetailResponseBody\data\orgMemberships;

use AlibabaCloud\Dara\Model;

class workspaces extends Model
{
    /**
     * @var string
     */
    public $memberStatus;

    /**
     * @var string
     */
    public $roleCode;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'memberStatus' => 'MemberStatus',
        'roleCode' => 'RoleCode',
        'roleId' => 'RoleId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberStatus) {
            $res['MemberStatus'] = $this->memberStatus;
        }

        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['MemberStatus'])) {
            $model->memberStatus = $map['MemberStatus'];
        }

        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
