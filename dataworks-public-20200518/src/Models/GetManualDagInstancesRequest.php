<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetManualDagInstancesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 7000001231241
     *
     * @var string
     */
    public $dagId;

    /**
     * @description This parameter is required.
     *
     * @example RPOD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description This parameter is required.
     *
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
     * @return GetManualDagInstancesRequest
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
