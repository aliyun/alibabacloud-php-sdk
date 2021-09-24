<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListManualDagInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $dagId;
    protected $_name = [
        'projectEnv'  => 'ProjectEnv',
        'projectName' => 'ProjectName',
        'dagId'       => 'DagId',
    ];

    public function validate()
    {
        Model::validateRequired('projectEnv', $this->projectEnv, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('dagId', $this->dagId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
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
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        return $model;
    }
}
