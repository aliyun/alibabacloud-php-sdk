<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class MoveNodeRequest extends Model
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
     * @description The path to which you want to move the node. You do not need to specify a node name in the path.
     *
     * For example, if you want to move the test node to root/demo/test, you must set this parameter to root/demo.
     *
     * This parameter is required.
     *
     * @example root/demo
     *
     * @var string
     */
    public $path;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * You can use this parameter to specify the DataWorks workspace on which you want to perform the API operation.
     *
     * This parameter is required.
     *
     * @example 10000
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
     * @return MoveNodeRequest
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
