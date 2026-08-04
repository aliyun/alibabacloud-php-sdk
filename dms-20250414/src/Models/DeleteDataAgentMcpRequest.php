<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DeleteDataAgentMcpRequest extends Model
{
    /**
     * @var string[]
     */
    public $mcpServerIds;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'mcpServerIds' => 'McpServerIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->mcpServerIds)) {
            Model::validateArray($this->mcpServerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServerIds) {
            if (\is_array($this->mcpServerIds)) {
                $res['McpServerIds'] = [];
                $n1 = 0;
                foreach ($this->mcpServerIds as $item1) {
                    $res['McpServerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['McpServerIds'])) {
                $model->mcpServerIds = [];
                $n1 = 0;
                foreach ($map['McpServerIds'] as $item1) {
                    $model->mcpServerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
