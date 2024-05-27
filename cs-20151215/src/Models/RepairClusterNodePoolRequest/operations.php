<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\RepairClusterNodePoolRequest;

use AlibabaCloud\Tea\Model;

class operations extends Model
{
    /**
     * @var string[]
     */
    public $args;

    /**
     * @var string
     */
    public $operationId;
    protected $_name = [
        'args'        => 'args',
        'operationId' => 'operation_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['args'] = $this->args;
        }
        if (null !== $this->operationId) {
            $res['operation_id'] = $this->operationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['args'])) {
            if (!empty($map['args'])) {
                $model->args = $map['args'];
            }
        }
        if (isset($map['operation_id'])) {
            $model->operationId = $map['operation_id'];
        }

        return $model;
    }
}
