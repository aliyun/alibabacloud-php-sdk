<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task;

use AlibabaCloud\Tea\Model;

class dependencies extends Model
{
    /**
     * @description The dependency type. Valid values:
     *
     *   CrossCycleDependsOnChildren: cross-cycle dependency on level-1 descendant nodes
     *   CrossCycleDependsOnSelf: cross-cycle dependency on the current node
     *   CrossCycleDependsOnOtherNode: cross-cycle dependency on other nodes
     *   Normal: same-cycle scheduling dependency
     *
     * @example Normal
     *
     * @var string
     */
    public $type;

    /**
     * @description The identifier of the output of the ancestor task. This parameter is returned only if `same-cycle scheduling dependencies` and the node input are configured.
     *
     * @example pre.odps_sql_demo_0
     *
     * @var string
     */
    public $upstreamOutput;

    /**
     * @description The ancestor task ID. This parameter is returned only if `cross-cycle scheduling dependencies` or `same-cycle scheduling dependencies` and the node input are not configured.
     *
     * @example 1234
     *
     * @var string
     */
    public $upstreamTaskId;
    protected $_name = [
        'type' => 'Type',
        'upstreamOutput' => 'UpstreamOutput',
        'upstreamTaskId' => 'UpstreamTaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->upstreamOutput) {
            $res['UpstreamOutput'] = $this->upstreamOutput;
        }
        if (null !== $this->upstreamTaskId) {
            $res['UpstreamTaskId'] = $this->upstreamTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpstreamOutput'])) {
            $model->upstreamOutput = $map['UpstreamOutput'];
        }
        if (isset($map['UpstreamTaskId'])) {
            $model->upstreamTaskId = $map['UpstreamTaskId'];
        }

        return $model;
    }
}
