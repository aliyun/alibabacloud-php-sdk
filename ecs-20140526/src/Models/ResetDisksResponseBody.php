<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody\operationProgressSet;
use AlibabaCloud\Tea\Model;

class ResetDisksResponseBody extends Model
{
    /**
     * @description The information about the rollback operations on one or more disks.
     *
     * @var operationProgressSet
     */
    public $operationProgressSet;

    /**
     * @description The ID of the request.
     *
     * @example 3D66C85C-AA97-4A00-B0ED-2D9A80FE782C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operationProgressSet' => 'OperationProgressSet',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationProgressSet) {
            $res['OperationProgressSet'] = null !== $this->operationProgressSet ? $this->operationProgressSet->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetDisksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationProgressSet'])) {
            $model->operationProgressSet = operationProgressSet::fromMap($map['OperationProgressSet']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
