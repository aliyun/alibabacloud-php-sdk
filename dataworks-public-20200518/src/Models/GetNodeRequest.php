<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetNodeRequest extends Model
{
    /**
     * @description The interval at which the node is rerun after the node fails to run.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The priority of the node. Valid values: 1, 3, 5, 7, and 8.
     *
     * This parameter is required.
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'nodeId'     => 'NodeId',
        'projectEnv' => 'ProjectEnv',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeRequest
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

        return $model;
    }
}
