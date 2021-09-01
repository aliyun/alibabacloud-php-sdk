<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetNodeChildrenRequest extends Model
{
    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'projectEnv' => 'ProjectEnv',
        'nodeId'     => 'NodeId',
    ];

    public function validate()
    {
        Model::validateRequired('projectEnv', $this->projectEnv, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeChildrenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
