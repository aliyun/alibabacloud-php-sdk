<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class RunNodeOperationRequest extends Model
{
    /**
     * @var string
     */
    public $operationAction;

    /**
     * @var string[]
     */
    public $operationArgs;
    protected $_name = [
        'operationAction' => 'operationAction',
        'operationArgs' => 'operationArgs',
    ];

    public function validate()
    {
        if (\is_array($this->operationArgs)) {
            Model::validateArray($this->operationArgs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationAction) {
            $res['operationAction'] = $this->operationAction;
        }

        if (null !== $this->operationArgs) {
            if (\is_array($this->operationArgs)) {
                $res['operationArgs'] = [];
                $n1 = 0;
                foreach ($this->operationArgs as $item1) {
                    $res['operationArgs'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['operationAction'])) {
            $model->operationAction = $map['operationAction'];
        }

        if (isset($map['operationArgs'])) {
            if (!empty($map['operationArgs'])) {
                $model->operationArgs = [];
                $n1 = 0;
                foreach ($map['operationArgs'] as $item1) {
                    $model->operationArgs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
