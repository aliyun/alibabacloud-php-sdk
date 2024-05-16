<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListManualDagInstancesRequest extends Model
{
    /**
     * @description The ID of the directed acyclic graph (DAG) for the manually triggered workflow. You can call the [RunManualDagNodes](https://help.aliyun.com/document_detail/212830.html) operation to obtain the ID.
     *
     * This parameter is required.
     * @example 7000001231241
     *
     * @var string
     */
    public $dagId;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV. A value of PROD indicates the production environment. A value of DEV indicates the development environment.
     *
     * This parameter is required.
     * @example RPOD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The name of the workspace to which the manually triggered workflow belongs. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to view the name.
     *
     * This parameter is required.
     * @example test_workspace
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'dagId'       => 'DagId',
        'projectEnv'  => 'ProjectEnv',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListManualDagInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
