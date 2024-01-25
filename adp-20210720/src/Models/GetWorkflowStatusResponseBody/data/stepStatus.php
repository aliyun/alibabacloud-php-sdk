<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetWorkflowStatusResponseBody\data;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetWorkflowStatusResponseBody\data\stepStatus\workflowTasks;
use AlibabaCloud\Tea\Model;

class stepStatus extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var workflowTasks[]
     */
    public $workflowTasks;
    protected $_name = [
        'name'          => 'name',
        'status'        => 'status',
        'workflowTasks' => 'workflowTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->workflowTasks) {
            $res['workflowTasks'] = [];
            if (null !== $this->workflowTasks && \is_array($this->workflowTasks)) {
                $n = 0;
                foreach ($this->workflowTasks as $item) {
                    $res['workflowTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['workflowTasks'])) {
            if (!empty($map['workflowTasks'])) {
                $model->workflowTasks = [];
                $n                    = 0;
                foreach ($map['workflowTasks'] as $item) {
                    $model->workflowTasks[$n++] = null !== $item ? workflowTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
