<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationResponseBody\data;

use AlibabaCloud\Tea\Model;

class operations extends Model
{
    /**
     * @description Operation ID.
     *
     * @example op-xxx
     *
     * @var string
     */
    public $operationId;
    protected $_name = [
        'operationId' => 'operationId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
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
        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        return $model;
    }
}
