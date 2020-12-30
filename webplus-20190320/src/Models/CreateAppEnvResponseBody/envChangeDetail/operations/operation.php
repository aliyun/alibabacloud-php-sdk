<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateAppEnvResponseBody\envChangeDetail\operations;

use AlibabaCloud\Tea\Model;

class operation extends Model
{
    /**
     * @var string
     */
    public $operationDescription;

    /**
     * @var string
     */
    public $operationType;
    protected $_name = [
        'operationDescription' => 'OperationDescription',
        'operationType'        => 'OperationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        return $model;
    }
}
