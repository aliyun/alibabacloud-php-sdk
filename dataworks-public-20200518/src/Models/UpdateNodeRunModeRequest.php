<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateNodeRunModeRequest extends Model
{
    /**
     * @description The ID of the node. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The environment where the node runs. Valid values: DEV and PROD. The value DEV indicates the development environment. The value PROD indicates the production environment.
     *
     * This parameter is required.
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The operation that you want to perform on the node. Valid values:
     *
     *   0: indicates that you want to unfreeze the node.
     *   2: indicates that you want to freeze the node.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $schedulerType;
    protected $_name = [
        'nodeId'        => 'NodeId',
        'projectEnv'    => 'ProjectEnv',
        'schedulerType' => 'SchedulerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNodeRunModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        return $model;
    }
}
