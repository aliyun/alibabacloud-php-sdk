<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanAccountDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanAccountDetailResponseBody\data\orgMemberships\workspaces;

class orgMemberships extends Model
{
    /**
     * @var string
     */
    public $memberStatus;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $roleCode;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var workspaces[]
     */
    public $workspaces;
    protected $_name = [
        'memberStatus' => 'MemberStatus',
        'orgId' => 'OrgId',
        'roleCode' => 'RoleCode',
        'roleId' => 'RoleId',
        'workspaces' => 'Workspaces',
    ];

    public function validate()
    {
        if (\is_array($this->workspaces)) {
            Model::validateArray($this->workspaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberStatus) {
            $res['MemberStatus'] = $this->memberStatus;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        if (null !== $this->workspaces) {
            if (\is_array($this->workspaces)) {
                $res['Workspaces'] = [];
                $n1 = 0;
                foreach ($this->workspaces as $item1) {
                    $res['Workspaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        if (isset($map['Workspaces'])) {
            if (!empty($map['Workspaces'])) {
                $model->workspaces = [];
                $n1 = 0;
                foreach ($map['Workspaces'] as $item1) {
                    $model->workspaces[$n1] = workspaces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
