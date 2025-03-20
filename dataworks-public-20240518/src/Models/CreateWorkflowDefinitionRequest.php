<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkflowDefinitionRequest extends Model
{
    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The FlowSpec field information about the workflow. For more information, see [FlowSpec](https://github.com/aliyun/alibabacloud-dataworks-tool-dflow/).
     *
     * This parameter is required.
     *
     * @example {
     * "kind": "CycleWorkflow",
     * "version": "1.1.0",
     * "spec": {
     * "name": "OpenAPITestWorkflowDemo",
     * "type": "CycleWorkflow",
     * "workflows": [
     * {
     * "script": {
     * "path": "XX/OpenAPITest/WorkflowTest/OpenAPITestWorkflowDemo",
     * "runtime": {
     * "command": "WORKFLOW"
     * }
     * },
     * "trigger": {
     * "type": "Scheduler",
     * "cron": "00 02 00 * * ?",
     * "startTime": "1970-01-01 00:00:00",
     * "endTime": "9999-01-01 00:00:00",
     * "timezone": "Asia/Shanghai",
     * "delaySeconds": 0
     * },
     * "strategy": {
     * "timeout": 0,
     * "instanceMode": "T+1",
     * "rerunMode": "Allowed",
     * "rerunTimes": 3,
     * "rerunInterval": 180000,
     * "failureStrategy": "Break"
     * },
     * "name": "OpenAPITestWorkflowDemo",
     * "inputs": {},
     * "outputs": {
     * "nodeOutputs": [
     * {
     * "data": "workflow_output",
     * "artifactType": "NodeOutput",
     * "refTableName": "OpenAPITestWorkflowDemo"
     * }
     * ]
     * },
     * "nodes": [],
     * "dependencies": []
     * }
     * ]
     * }
     * }
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'projectId' => 'ProjectId',
        'spec' => 'Spec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkflowDefinitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
