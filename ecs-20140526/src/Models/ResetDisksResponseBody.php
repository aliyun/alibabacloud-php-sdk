<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody\operationProgressSet;

class ResetDisksResponseBody extends Model
{
    /**
     * @var operationProgressSet
     */
    public $operationProgressSet;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operationProgressSet' => 'OperationProgressSet',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->operationProgressSet) {
            $this->operationProgressSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationProgressSet) {
            $res['OperationProgressSet'] = null !== $this->operationProgressSet ? $this->operationProgressSet->toArray($noStream) : $this->operationProgressSet;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OperationProgressSet'])) {
            $model->operationProgressSet = operationProgressSet::fromMap($map['OperationProgressSet']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
