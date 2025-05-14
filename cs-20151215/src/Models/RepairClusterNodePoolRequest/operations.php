<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\RepairClusterNodePoolRequest;

use AlibabaCloud\Dara\Model;

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
        'args' => 'args',
        'operationId' => 'operation_id',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['args'] = [];
                $n1 = 0;
                foreach ($this->args as $item1) {
                    $res['args'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->operationId) {
            $res['operation_id'] = $this->operationId;
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
        if (isset($map['args'])) {
            if (!empty($map['args'])) {
                $model->args = [];
                $n1 = 0;
                foreach ($map['args'] as $item1) {
                    $model->args[$n1++] = $item1;
                }
            }
        }

        if (isset($map['operation_id'])) {
            $model->operationId = $map['operation_id'];
        }

        return $model;
    }
}
