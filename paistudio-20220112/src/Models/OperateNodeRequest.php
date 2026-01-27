<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class OperateNodeRequest extends Model
{
    /**
     * @var string
     */
    public $operation;

    /**
     * @var NodeOperationParameters
     */
    public $operationParameters;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'operation' => 'Operation',
        'operationParameters' => 'OperationParameters',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        if (null !== $this->operationParameters) {
            $this->operationParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->operationParameters) {
            $res['OperationParameters'] = null !== $this->operationParameters ? $this->operationParameters->toArray($noStream) : $this->operationParameters;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['OperationParameters'])) {
            $model->operationParameters = NodeOperationParameters::fromMap($map['OperationParameters']);
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
