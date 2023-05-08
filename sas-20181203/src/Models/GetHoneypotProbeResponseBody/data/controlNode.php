<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data;

use AlibabaCloud\Tea\Model;

class controlNode extends Model
{
    /**
     * @example i-bp19ijepxytwtzrk****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @example 37a15ff1-3475-4897-aa6c-f7fd9122****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example online-honeypot
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
