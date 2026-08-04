<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DeleteDataAgentMcpShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $mcpServerIdsShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'mcpServerIdsShrink' => 'McpServerIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServerIdsShrink) {
            $res['McpServerIds'] = $this->mcpServerIdsShrink;
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
        if (isset($map['McpServerIds'])) {
            $model->mcpServerIdsShrink = $map['McpServerIds'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
