<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class ExportWorkflowsRequest extends Model
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
    public $workflowId;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        if (\is_array($this->workflowId)) {
            Model::validateArray($this->workflowId);
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

        if (null !== $this->workflowId) {
            if (\is_array($this->workflowId)) {
                $res['WorkflowId'] = [];
                $n1 = 0;
                foreach ($this->workflowId as $item1) {
                    $res['WorkflowId'][$n1] = $item1;
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

        if (isset($map['WorkflowId'])) {
            if (!empty($map['WorkflowId'])) {
                $model->workflowId = [];
                $n1 = 0;
                foreach ($map['WorkflowId'] as $item1) {
                    $model->workflowId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
