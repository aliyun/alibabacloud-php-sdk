<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkflowDefinitionRequest extends Model
{
    /**
     * @description The ID of the workflow.
     *
     * This parameter is required.
     *
     * @example 652567824470354XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     *
     * @example 10001
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The FlowSpec field information about the workflow. For more information, see [FlowSpec](https://github.com/aliyun/dataworks-spec/blob/master/README_zh_CN.md).
     *
     * This parameter is required.
     *
     * @example {
     * "kind": "CycleWorkflow",
     * "version": "1.1.0",
     * "spec": {
     * "name": "OpenAPI Test Workflow Demo",
     * "type": "CycleWorkflow",
     * "id": "652567824470354XXXX",
     * "workflows": [
     * {
     * "id": "652567824470354XXXX",
     * "script": {
     * "path": "XX/OpenAPI_Test/Workflow_Test/OpenAPI_Test_Workflow_Demo",
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
     * "name": "OpenAPI Test Workflow Demo",
     * "inputs": {},
     * "outputs": {
     * "nodeOutputs": [
     * {
     * "data": "workflow_output",
     * "artifactType": "NodeOutput",
     * "refTableName": "OpenAPI_Test_Workflow_Demo"
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
        'id' => 'Id',
        'projectId' => 'ProjectId',
        'spec' => 'Spec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
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
     * @return UpdateWorkflowDefinitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
