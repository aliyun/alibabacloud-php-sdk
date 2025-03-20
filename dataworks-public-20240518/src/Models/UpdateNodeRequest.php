<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateNodeRequest extends Model
{
    /**
     * @description The ID of the node.
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
     * @example 10000
     *
     * @var int
     */
    public $projectId;

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
     * "name": "odps_test",
     * "type": "odps"
     * },
     * "script": {
     * "path": "XX/OpenAPI_Test/odpsSQL_Test",
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
     * "name": "odpsSQL_Test",
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
     * "refTableName": "odpsSQL_Test"
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
     * @return UpdateNodeRequest
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
