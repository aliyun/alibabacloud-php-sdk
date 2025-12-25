<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class OperateDisableWorkflowsRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int[]
     */
    public $workflowIds;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'workflowIds' => 'WorkflowIds',
    ];

    public function validate()
    {
        if (\is_array($this->workflowIds)) {
            Model::validateArray($this->workflowIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->workflowIds) {
            if (\is_array($this->workflowIds)) {
                $res['WorkflowIds'] = [];
                $n1 = 0;
                foreach ($this->workflowIds as $item1) {
                    $res['WorkflowIds'][$n1] = $item1;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['WorkflowIds'])) {
            if (!empty($map['WorkflowIds'])) {
                $model->workflowIds = [];
                $n1 = 0;
                foreach ($map['WorkflowIds'] as $item1) {
                    $model->workflowIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
