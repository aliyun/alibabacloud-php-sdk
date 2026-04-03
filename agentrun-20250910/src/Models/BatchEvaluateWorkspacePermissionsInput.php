<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class BatchEvaluateWorkspacePermissionsInput extends Model
{
    /**
     * @var string[]
     */
    public $actions;

    /**
     * @var string[]
     */
    public $workspaceIds;
    protected $_name = [
        'actions' => 'actions',
        'workspaceIds' => 'workspaceIds',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (\is_array($this->workspaceIds)) {
            Model::validateArray($this->workspaceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceIds) {
            if (\is_array($this->workspaceIds)) {
                $res['workspaceIds'] = [];
                $n1 = 0;
                foreach ($this->workspaceIds as $item1) {
                    $res['workspaceIds'][$n1] = $item1;
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
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceIds'])) {
            if (!empty($map['workspaceIds'])) {
                $model->workspaceIds = [];
                $n1 = 0;
                foreach ($map['workspaceIds'] as $item1) {
                    $model->workspaceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
