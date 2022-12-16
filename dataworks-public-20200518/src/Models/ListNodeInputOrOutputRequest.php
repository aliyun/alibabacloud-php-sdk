<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListNodeInputOrOutputRequest extends Model
{
    /**
     * @example output
     *
     * @var string
     */
    public $ioType;

    /**
     * @example 12314567
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'ioType'     => 'IoType',
        'nodeId'     => 'NodeId',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ioType) {
            $res['IoType'] = $this->ioType;
        }
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
     * @return ListNodeInputOrOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoType'])) {
            $model->ioType = $map['IoType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
