<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeRequest extends Model
{
    /**
     * @description The container ID. If you want to create a node in a container, you must configure this parameter to specify the container. The container can be a workflow or a node in a container.
     *
     * >  If you configure this parameter, the path field defined in FlowSpec becomes invalid.
     *
     * @example a7ef0634-20ec-4a7c-a214-54020f91XXXX
     *
     * @var int
     */
    public $containerId;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * You must configure this parameter to specify the DataWorks workspace to which the API operation is applied.
     *
     * This parameter is required.
     *
     * @example 123456
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The scene of the node. This parameter determines the location (the DataStudio pane or the Manual pane) of the node. You can set this parameter to DataworksManualWorkflow only if the ContainerId parameter is configured and the container specified by ContainerId is a manually triggered workflow.
     *
     * Valid values:
     *
     *   DataworksProject
     *   DataworksManualWorkflow
     *   DataworksManualTask
     *
     * This parameter is required.
     *
     * @example DATAWORKS_PROJECT
     *
     * @var string
     */
    public $scene;

    /**
     * @description The FlowSpec field information about the node. For more information, see [FlowSpec](https://github.com/aliyun/dataworks-spec/blob/master/README_zh_CN.md).
     *
     * This parameter is required.
     *
     * @example {
     * "version": "1.1.0",
     * "kind": "Node",
     * "spec": {
     * "nodes": [
     * {
     * "id": "860438872620113XXXX",
     * "recurrence": "Normal",
     * "timeout": 0,
     * "instanceMode": "T+1",
     * "rerunMode": "Allowed",
     * "rerunTimes": 3,
     * "rerunInterval": 180000,
     * "datasource": {
     * "name": "ODPS_test",
     * "type": "ODPS"
     * },
     * "script": {
     * "path": "XX/OpenAPI test/odpsSQL test",
     * "runtime": {
     * "command": "ODPS_SQL"
     * },
     * "content": "select now();"
     * },
     * "trigger": {
     * "type": "Scheduler",
     * "cron": "00 00 00 * * ?",
     * "startTime": "1970-01-01 00:00:00",
     * "endTime": "9999-01-01 00:00:00",
     * "timezone": "Asia/Shanghai",
     * "delaySeconds": 0
     * },
     * "runtimeResource": {
     * "resourceGroup": "S_res_group_XXXX_XXXX"
     * },
     * "name": "odpsSQL test",
     * "inputs": {
     * "nodeOutputs": [
     * {
     * "data": "lwttest_standard_root",
     * "artifactType": "NodeOutput"
     * }
     * ]
     * },
     * "outputs": {
     * "nodeOutputs": [
     * {
     * "data": "output_data",
     * "artifactType": "NodeOutput",
     * "refTableName": "odpsSQL test"
     * }
     * ]
     * }
     * }
     * ],
     * "flow": [
     * {
     * "nodeId": "860438872620113XXXX",
     * "depends": [
     * {
     * "type": "Normal",
     * "output": "project_root"
     * }
     * ]
     * }
     * ]
     * }
     * }
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'containerId' => 'ContainerId',
        'projectId' => 'ProjectId',
        'scene' => 'Scene',
        'spec' => 'Spec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
