<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UpdateHttpApiOperationRequest extends Model
{
    /**
     * @description operation definition.
     *
     * @var HttpApiOperation
     */
    public $operation;
    protected $_name = [
        'operation' => 'operation',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operation) {
            $res['operation'] = null !== $this->operation ? $this->operation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHttpApiOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operation'])) {
            $model->operation = HttpApiOperation::fromMap($map['operation']);
        }

        return $model;
    }
}
