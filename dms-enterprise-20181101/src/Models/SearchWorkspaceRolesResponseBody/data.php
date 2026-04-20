<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchWorkspaceRolesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleSource;

    /**
     * @var string
     */
    public $roleSourceName;
    protected $_name = [
        'roleId' => 'RoleId',
        'roleName' => 'RoleName',
        'roleSource' => 'RoleSource',
        'roleSourceName' => 'RoleSourceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->roleSource) {
            $res['RoleSource'] = $this->roleSource;
        }

        if (null !== $this->roleSourceName) {
            $res['RoleSourceName'] = $this->roleSourceName;
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
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['RoleSource'])) {
            $model->roleSource = $map['RoleSource'];
        }

        if (isset($map['RoleSourceName'])) {
            $model->roleSourceName = $map['RoleSourceName'];
        }

        return $model;
    }
}
