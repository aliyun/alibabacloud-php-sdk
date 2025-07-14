<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class StopNodesRequest extends Model
{
    /**
     * @description Specifies whether to allow skipping failed nodes. Default value: False.
     *
     * @example False
     *
     * @var bool
     */
    public $ignoreFailedNodeTasks;

    /**
     * @description The nodes.
     *
     * @var string[]
     */
    public $nodes;
    protected $_name = [
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'nodes' => 'Nodes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IgnoreFailedNodeTasks'])) {
            $model->ignoreFailedNodeTasks = $map['IgnoreFailedNodeTasks'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = $map['Nodes'];
            }
        }

        return $model;
    }
}
