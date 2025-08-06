<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersRequest\members;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersRequest\tenantContext;

class AddWorkspaceDocMembersRequest extends Model
{
    /**
     * @var members[]
     */
    public $members;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'members' => 'Members',
        'nodeId' => 'NodeId',
        'tenantContext' => 'TenantContext',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->members) {
            if (\is_array($this->members)) {
                $res['Members'] = [];
                $n1 = 0;
                foreach ($this->members as $item1) {
                    $res['Members'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n1 = 0;
                foreach ($map['Members'] as $item1) {
                    $model->members[$n1] = members::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
