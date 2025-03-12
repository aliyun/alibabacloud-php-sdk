<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotGroupResponseBody\operationProgressSet;
use AlibabaCloud\Tea\Model;

class DeleteSnapshotGroupResponseBody extends Model
{
    /**
     * @description Details about the delete operation.
     *
     * @var operationProgressSet
     */
    public $operationProgressSet;

    /**
     * @description The ID of the request.
     *
     * @example 6EDE885A-FDC1-4FAE-BC44-6EACAEA6CC6E
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
     * @return DeleteSnapshotGroupResponseBody
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
