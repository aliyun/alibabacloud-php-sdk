<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class AddWorkspaceUserRequest extends Model
{
    /**
     * @var string
     */
    public $dmsUserIds;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleSource;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'dmsUserIds' => 'DmsUserIds',
        'roleId' => 'RoleId',
        'roleSource' => 'RoleSource',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dmsUserIds) {
            $res['DmsUserIds'] = $this->dmsUserIds;
        }

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        if (null !== $this->roleSource) {
            $res['RoleSource'] = $this->roleSource;
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
        if (isset($map['DmsUserIds'])) {
            $model->dmsUserIds = $map['DmsUserIds'];
        }

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        if (isset($map['RoleSource'])) {
            $model->roleSource = $map['RoleSource'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
