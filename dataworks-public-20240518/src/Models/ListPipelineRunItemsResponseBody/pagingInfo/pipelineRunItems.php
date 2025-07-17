<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPipelineRunItemsResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class pipelineRunItems extends Model
{
    /**
     * @description 发布包创建时间戳
     *
     * @example 1724984066000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 860438872620113XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description 创建人
     *
     * @example Error Message
     *
     * @var string
     */
    public $message;

    /**
     * @description 修改时间
     *
     * @example 1724984066000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example { "version": "1.1.0", "kind": "Node", "spec": { "nodes": [ { "recurrence": "Normal", "id": "860438872620113XXXX", "timeout": 0, "instanceMode": "T+1", "rerunMode": "Allowed", "rerunTimes": 3, "rerunInterval": 180000, "datasource": { "name": "odps_test", "type": "odps" }, "script": { "language": "odps-sql", "path": "XX/OpenAPI_Test/ODPS_SQL_Test", "runtime": { "command": "ODPS_SQL", "commandTypeId": 10 }, "content": "select now();", "id": "853573334108680XXXX" }, "trigger": { "type": "Scheduler", "id": "543680677872062XXXX", "cron": "00 00 00 * * ?", "startTime": "1970-01-01 00:00:00", "endTime": "9999-01-01 00:00:00", "timezone": "Asia/Shanghai", "delaySeconds": 0 }, "runtimeResource": { "resourceGroup": "S_res_group_XXXX_XXXX", "id": "623731286945488XXXX", "resourceGroupId": "7201XXXX" }, "name": "ODPS_SQL_Test", "owner": "110755000425XXXX", "metadata": { "owner": "110755000425XXXX", "ownerName": "XXXXX@test.XXX.com", "projectId": "307XXX" }, "inputs": { "nodeOutputs": [ { "data": "lwttest_standard_root", "artifactType": "NodeOutput" } ] }, "outputs": { "nodeOutputs": [ { "data": "860438872620113XXXX", "artifactType": "NodeOutput", "refTableName": "ODPS_SQL_Test", "isDefault": true } ] } } ], "flow": [ { "nodeId": "860438872620113XXXX", "depends": [ { "type": "Normal", "output": "lwttest_standard_root" } ] } ] }, "metadata": { "uuid": "860438872620113XXXX" } }
     *
     * @var string
     */
    public $spec;

    /**
     * @description 发布流程状态
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example Node
     *
     * @var string
     */
    public $type;

    /**
     * @description 项目Id
     *
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'message' => 'Message',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'spec' => 'Spec',
        'status' => 'Status',
        'type' => 'Type',
        'version' => 'Version',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineRunItems
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
