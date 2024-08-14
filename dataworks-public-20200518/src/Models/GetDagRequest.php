<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetDagRequest extends Model
{
    /**
     * @description The ID of the DAG. You can use one of the following method to obtain the ID:
     *
     *   Call the [RunCycleDagNodes](https://help.aliyun.com/document_detail/2780209.html) operation and obtain the value of the **Data** response parameter.
     *   Call the [RunSmokeTest](https://help.aliyun.com/document_detail/2780210.html) operation and obtain the value of the **Data** response parameter.
     *   Call the [RunManualDagNodes](https://help.aliyun.com/document_detail/2780218.html) operation and obtain the value of the **DagId** response parameter.
     *
     * This parameter is required.
     * @example 123141452344525
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV.
     *
     * This parameter is required.
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'dagId'      => 'DagId',
        'projectEnv' => 'ProjectEnv',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDagRequest
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

        return $model;
    }
}
