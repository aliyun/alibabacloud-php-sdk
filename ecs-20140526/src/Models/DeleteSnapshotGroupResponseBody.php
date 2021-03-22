<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotGroupResponseBody\operationProgressSet;
use AlibabaCloud\Tea\Model;

class DeleteSnapshotGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var operationProgressSet
     */
    public $operationProgressSet;
    protected $_name = [
        'requestId'            => 'RequestId',
        'operationProgressSet' => 'OperationProgressSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->operationProgressSet) {
            $res['OperationProgressSet'] = null !== $this->operationProgressSet ? $this->operationProgressSet->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OperationProgressSet'])) {
            $model->operationProgressSet = operationProgressSet::fromMap($map['OperationProgressSet']);
        }

        return $model;
    }
}
