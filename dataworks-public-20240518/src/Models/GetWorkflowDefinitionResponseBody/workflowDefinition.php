<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowDefinitionResponseBody;

use AlibabaCloud\Tea\Model;

class workflowDefinition extends Model
{
    /**
     * @description The time when the workflow was created. This value is a UNIX timestamp.
     *
     * @example 1708481905000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the workflow.
     *
     * @example 463497880880954XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the workflow was last modified. This value is a UNIX timestamp.
     *
     * @example 1708481905000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The name of the workflow.
     *
     * @example OpenAPI test workflow Demo
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the workflow.
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the workspace to which the workflow belongs.
     *
     * @example 307XXX
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The FlowSpec field information about the workflow. For more information, see [FlowSpec](https://github.com/aliyun/alibabacloud-dataworks-tool-dflow/).
     *
     * @example {
     * "metadata": {
     * "tenantId": "52425742456XXXX",
     * "projectId": "307XXXX",
     * "uuid": "463497880880954XXXX"
     * },
     * "kind": "CycleWorkflow",
     * "version": "1.1.0",
     * "spec": {
     * "name": "OpenAPI_Test_Workflow_Demo",
     * "id": "463497880880954XXXX",
     * "type": "CycleWorkflow",
     * "owner": "110755000425XXXX",
     * "workflows": [
     * {
     * "script": {
     * "path": "XX/OpenAPI_Test/Workflow_Test/OpenAPI_Test_Workflow_Demo",
     * "runtime": {
     * "command": "WORKFLOW"
     * },
     * "id": "698002781368644XXXX"
     * },
     * "id": "463497880880954XXXX",
     * "trigger": {
     * "type": "Scheduler",
     * "id": "652567824470354XXXX",
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
     * "name": "OpenAPI_Test_Workflow_Demo",
     * "owner": "110755000425XXXX",
     * "metadata": {
     * "owner": "110755000425XXXX",
     * "ownerName": "XXXX@test.XXXX.com",
     * "tenantId": "52425742456XXXX",
     * "project": {
     * "mode": "STANDARD",
     * "projectId": "307303",
     * "projectIdentifier": "lwttest_standard",
     * "projectName": "XXXX",
     * "projectOwnerId": "110755000425XXXX",
     * "simple": false,
     * "tenantId": "52425742456XXXX"
     * },
     * "projectId": "307XXXX"
     * },
     * "inputs": {},
     * "outputs": {
     * "nodeOutputs": [
     * {
     * "data": "463497880880954XXXX",
     * "artifactType": "NodeOutput",
     * "refTableName": "OpenAPI_Test_Workflow_Demo",
     * "isDefault": true
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

    /**
     * @description The ID of the workflow on the scheduling side after publishing.
     *
     * @example 700006657495
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'spec' => 'Spec',
        'workflowId' => 'WorkflowId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflowDefinition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
