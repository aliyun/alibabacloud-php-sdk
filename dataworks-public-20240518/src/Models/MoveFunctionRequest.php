<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class MoveFunctionRequest extends Model
{
    /**
     * @description The ID of the UDF.
     *
     * This parameter is required.
     *
     * @example 543217824470354XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The path to which you want to move the UDF. You do not need to specify a UDF name in the path.
     *
     * For example, if you want to move the test UDF to root/demo/test, you must set this parameter to root/demo.
     *
     * This parameter is required.
     *
     * @example root/demo
     *
     * @var string
     */
    public $path;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to obtain the ID.
     *
     * This parameter indicates the DataWorks workspace to which the API operation is applied.
     *
     * This parameter is required.
     *
     * @example 12345
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'id' => 'Id',
        'path' => 'Path',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
