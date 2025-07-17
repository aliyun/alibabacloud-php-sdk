<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFunctionResponseBody;

use AlibabaCloud\Tea\Model;

class function_ extends Model
{
    /**
     * @description The time when the UDF was created. This value is a UNIX timestamp.
     *
     * @example 1724505917000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the UDF.
     *
     * @example 860438872620113XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the UDF was last modified. This value is a UNIX timestamp.
     *
     * @example 1724506661000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The name of the UDF.
     *
     * @example Function name
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the UDF.
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the DataWorks workspace to which the UDF belongs.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The FlowSpec field information about the UDF. For more information, see [FlowSpec](https://github.com/aliyun/dataworks-spec/blob/master/README_zh_CN.md).
     *
     * @example {
     * "version": "1.1.0",
     * "kind": "Function",
     * "spec": {
     * "functions": [
     * {
     * "name": "Function_Name",
     * "id": "580667964888595XXXX",
     * "script": {
     * "content": "{  \\"uuid\\": \\"580667964888595XXXX\\",  \\"name\\": \\"Function_Name\\",  \\"datasource\\": {    \\"type\\": \\"odps\\",    \\"name\\": \\"odps_first\\"  },  \\"runtimeResource\\": {    \\"resourceGroup\\": \\"S_res_group_XXXX_XXXX\\",    \\"resourceGroupId\\": 6591XXXX  }}",
     * "path": "XXX/OpenAPI/Function/Function_Name",
     * "runtime": {
     * "command": "ODPS_FUNCTION"
     * }
     * },
     * "datasource": {
     * "name": "odps_first",
     * "type": "odps"
     * },
     * "runtimeResource": {
     * "resourceGroup": "S_res_group_XXXX_XXXX",
     * "id": "723932906364267XXXX",
     * "resourceGroupId": "6591XXXX"
     * },
     * "metadata": {
     * "owner": "110755000425XXXX"
     * }
     * }
     * ]
     * }
     * }
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'spec' => 'Spec',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return function_
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

        return $model;
    }
}
