<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetNodeResponseBody;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @description The time when the node was created. This value is a UNIX timestamp.
     *
     * @example 1700539206000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the node.
     *
     * @example 860438872620113XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the node was last modified. This value is a UNIX timestamp.
     *
     * @example 1700539206000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The name of the node.
     *
     * @example Node name
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the node.
     *
     * @example 196596664824XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The FlowSpec field information about this node. For more information, see [FlowSpec](https://github.com/aliyun/alibabacloud-dataworks-tool-dflow).
     *
     * @example {
     * "version": "1.1.0",
     * "kind": "Node",
     * "spec": {
     * "nodes": [
     * {
     * "recurrence": "Normal",
     * "id": "860438872620113XXXX",
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
     * "language": "odps-sql",
     * "path": "XX/OpenAPI_Test/ODPS_SQL_Test",
     * "runtime": {
     * "command": "ODPS_SQL",
     * "commandTypeId": 10
     * },
     * "content": "select now();",
     * "id": "853573334108680XXXX"
     * },
     * "trigger": {
     * "type": "Scheduler",
     * "id": "543680677872062XXXX",
     * "cron": "00 00 00 * * ?",
     * "startTime": "1970-01-01 00:00:00",
     * "endTime": "9999-01-01 00:00:00",
     * "timezone": "Asia/Shanghai",
     * "delaySeconds": 0
     * },
     * "runtimeResource": {
     * "resourceGroup": "S_res_group_XXXX_XXXX",
     * "id": "623731286945488XXXX",
     * "resourceGroupId": "7201XXXX"
     * },
     * "name": "ODPS_SQL_Test",
     * "owner": "110755000425XXXX",
     * "metadata": {
     * "owner": "110755000425XXXX",
     * "ownerName": "XXXXX@test.XXX.com",
     * "projectId": "307XXX"
     * },
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
     * "data": "860438872620113XXXX",
     * "artifactType": "NodeOutput",
     * "refTableName": "ODPS_SQL_Test",
     * "isDefault": true
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
     * "output": "lwttest_standard_root"
     * }
     * ]
     * }
     * ]
     * },
     * "metadata": {
     * "uuid": "860438872620113XXXX"
     * }
     * }
     *
     * @var string
     */
    public $spec;

    /**
     * @description The Id of the scheduled task after the node is published.
     *
     * @example 700006680527
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'spec' => 'Spec',
        'taskId' => 'TaskId',
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
