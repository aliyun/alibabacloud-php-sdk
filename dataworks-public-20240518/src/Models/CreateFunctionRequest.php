<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateFunctionRequest extends Model
{
    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     *
     * @example 12345
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The FlowSpec field information about the UDF. For more information, see [FlowSpec](https://github.com/aliyun/dataworks-spec/blob/master/README_zh_CN.md).
     *
     * This parameter is required.
     *
     * @example {
     * "version": "1.1.0",
     * "kind": "Function",
     * "spec": {
     * "functions": [
     * {
     * "name": "function name",
     * "script": {
     * "content": "{\\"name\\": \\"function name\\", \\"datasource\\": {\\"type\\": \\"ODPS\\", \\"name\\": \\"ODPS_first\\"}, \\"runtimeResource\\": {\\"resourceGroup\\": \\"s_res_group_xx_xxxx\\"}}",
     * "path": "XXX/OpenAPI/function/function name",
     * "runtime": {
     * "command": "ODPS_FUNCTION"
     * }
     * },
     * "datasource": {
     * "name": "ODPS_first",
     * "type": "ODPS"
     * },
     * "runtimeResource": {
     * "resourceGroup": "S_res_group_XXXX_XXXX"
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
     * @return CreateFunctionRequest
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
