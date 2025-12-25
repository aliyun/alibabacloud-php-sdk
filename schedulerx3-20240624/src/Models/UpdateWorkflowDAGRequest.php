<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGRequest\dag;

class UpdateWorkflowDAGRequest extends Model
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
     * @var dag
     */
    public $dag;

    /**
     * @var string
     */
    public $dagVersion;

    /**
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'dag' => 'Dag',
        'dagVersion' => 'DagVersion',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        if (null !== $this->dag) {
            $this->dag->validate();
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

        if (null !== $this->dag) {
            $res['Dag'] = null !== $this->dag ? $this->dag->toArray($noStream) : $this->dag;
        }

        if (null !== $this->dagVersion) {
            $res['DagVersion'] = $this->dagVersion;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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

        if (isset($map['Dag'])) {
            $model->dag = dag::fromMap($map['Dag']);
        }

        if (isset($map['DagVersion'])) {
            $model->dagVersion = $map['DagVersion'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
