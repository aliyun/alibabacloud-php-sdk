<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class WorkspacePermissionEvaluateResult extends Model
{
    /**
     * @var WorkspacePermissionItem[]
     */
    public $permissions;

    /**
     * @var bool
     */
    public $workspaceFound;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'permissions' => 'permissions',
        'workspaceFound' => 'workspaceFound',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissions) {
            if (\is_array($this->permissions)) {
                $res['permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['permissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceFound) {
            $res['workspaceFound'] = $this->workspaceFound;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = [];
                $n1 = 0;
                foreach ($map['permissions'] as $item1) {
                    $model->permissions[$n1] = WorkspacePermissionItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceFound'])) {
            $model->workspaceFound = $map['workspaceFound'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
