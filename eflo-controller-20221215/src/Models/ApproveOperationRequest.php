<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ApproveOperationRequest extends Model
{
    /**
     * @example e01-cn-zvp2tgykr08
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example RepairMachine
     *
     * @var string
     */
    public $operationType;
    protected $_name = [
        'nodeId'        => 'NodeId',
        'operationType' => 'OperationType',
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
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApproveOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        return $model;
    }
}
