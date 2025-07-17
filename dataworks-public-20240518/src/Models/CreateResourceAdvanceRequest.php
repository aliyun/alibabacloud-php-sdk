<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateResourceAdvanceRequest extends Model
{
    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     *
     * @example 123456
     *
     * @var int
     */
    public $projectId;

    /**
     * @var Stream
     */
    public $resourceFileObject;

    /**
     * @description The FlowSpec field information about the file resource. For more information, see [FlowSpec](https://github.com/aliyun/dataworks-spec/blob/master/README_zh_CN.md).
     *
     * This parameter is required.
     *
     * @example {
     * "version": "1.1.0",
     * "kind": "Resource",
     * "spec": {
     * "fileResources": [
     * {
     * "name": "OpenAPITestResource.py",
     * "script": {
     * "content": "",
     * "path": "XX/OpenAPITest/ResourcesTest/OpenAPITestResource.py",
     * "runtime": {
     * "command": "ODPS_PYTHON"
     * }
     * },
     * "type": "python",
     * "file": {
     * "storage": {}
     * },
     * "datasource": {
     * "name": "odps_first",
     * "type": "odps"
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
        'resourceFileObject' => 'ResourceFile',
        'spec' => 'Spec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceFileObject) {
            $res['ResourceFile'] = $this->resourceFileObject;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceFile'])) {
            $model->resourceFileObject = $map['ResourceFile'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
