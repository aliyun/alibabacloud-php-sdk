<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListNodeInputOrOutputRequest extends Model
{
    /**
     * @description The type of node that you want to query. Valid values:
     *
     *   input: ancestor nodes
     *   output: descendant nodes
     *
     * This parameter is required.
     * @example output
     *
     * @var string
     */
    public $ioType;

    /**
     * @description The ID of the node. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the node ID.
     *
     * This parameter is required.
     * @example 12314567
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The environment of the workspace. Valid values: DEV and PROD. A value of DEV indicates the development environment. A value of PROD indicates the production environment.
     *
     * This parameter is required.
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
