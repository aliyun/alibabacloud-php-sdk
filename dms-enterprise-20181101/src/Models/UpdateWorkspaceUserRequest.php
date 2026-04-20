<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class UpdateWorkspaceUserRequest extends Model
{
    /**
     * @var string
     */
    public $dmsUserId;

    /**
     * @var string
     */
    public $roleIds;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'dmsUserId' => 'DmsUserId',
        'roleIds' => 'RoleIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dmsUserId) {
            $res['DmsUserId'] = $this->dmsUserId;
        }

        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
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
        if (isset($map['DmsUserId'])) {
            $model->dmsUserId = $map['DmsUserId'];
        }

        if (isset($map['RoleIds'])) {
            $model->roleIds = $map['RoleIds'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
