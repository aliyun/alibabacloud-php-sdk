<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class ApproveOperationRequest extends Model
{
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $operationType;
    protected $_name = [
        'nodeId'        => 'NodeId',
        'operationType' => 'OperationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
