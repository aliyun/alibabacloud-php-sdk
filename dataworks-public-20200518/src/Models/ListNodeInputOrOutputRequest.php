<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListNodeInputOrOutputRequest extends Model
{
    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var string
     */
    public $ioType;
    protected $_name = [
        'nodeId'     => 'NodeId',
        'projectEnv' => 'ProjectEnv',
        'ioType'     => 'IoType',
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
        if (null !== $this->ioType) {
            $res['IoType'] = $this->ioType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodeInputOrOutputRequest
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
        if (isset($map['IoType'])) {
            $model->ioType = $map['IoType'];
        }

        return $model;
    }
}
