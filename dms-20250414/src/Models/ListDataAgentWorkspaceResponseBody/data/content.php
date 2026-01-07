<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListDataAgentWorkspaceResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var int
     */
    public $totalMember;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;

    /**
     * @var string
     */
    public $workspaceStatus;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'description' => 'Description',
        'modifyTime' => 'ModifyTime',
        'roleName' => 'RoleName',
        'totalMember' => 'TotalMember',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
        'workspaceStatus' => 'WorkspaceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->totalMember) {
            $res['TotalMember'] = $this->totalMember;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        if (null !== $this->workspaceStatus) {
            $res['WorkspaceStatus'] = $this->workspaceStatus;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['TotalMember'])) {
            $model->totalMember = $map['TotalMember'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        if (isset($map['WorkspaceStatus'])) {
            $model->workspaceStatus = $map['WorkspaceStatus'];
        }

        return $model;
    }
}
