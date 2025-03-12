<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotProbeResponseBody\list_;

use AlibabaCloud\Tea\Model;

class controlNode extends Model
{
    /**
     * @description The ID of the Elastic Compute Service (ECS) instance.
     *
     * @example i-uf6eq0rlvu1mkh0p****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The ID of the node.
     *
     * @example 8ec9da17-c0e7-4642-aad6-defc9722****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example HoneypotNode1
     *
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'ecsInstanceId' => 'EcsInstanceId',
        'nodeId'        => 'NodeId',
        'nodeName'      => 'NodeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return controlNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
