<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectProgressRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @example BUILD、PLAN、CANCEL、FINISH、ROLLBACK
     *
     * @var string
     */
    public $progress;

    /**
     * @example xxxyyy
     *
     * @var string
     */
    public $setupProjectId;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'progress'       => 'Progress',
        'setupProjectId' => 'SetupProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }

        return $model;
    }
}
