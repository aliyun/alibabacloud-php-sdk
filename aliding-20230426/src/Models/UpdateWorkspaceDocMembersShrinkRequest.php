<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UpdateWorkspaceDocMembersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $membersShrink;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'membersShrink'       => 'Members',
        'nodeId'              => 'NodeId',
        'tenantContextShrink' => 'TenantContext',
        'workspaceId'         => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->membersShrink) {
            $res['Members'] = $this->membersShrink;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
            $model->membersShrink = $map['Members'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
