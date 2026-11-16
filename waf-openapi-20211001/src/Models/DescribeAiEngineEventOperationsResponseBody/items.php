<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEventOperationsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $fromStatus;

    /**
     * @var int
     */
    public $operatedAt;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $toStatus;
    protected $_name = [
        'fromStatus' => 'FromStatus',
        'operatedAt' => 'OperatedAt',
        'operationId' => 'OperationId',
        'toStatus' => 'ToStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromStatus) {
            $res['FromStatus'] = $this->fromStatus;
        }

        if (null !== $this->operatedAt) {
            $res['OperatedAt'] = $this->operatedAt;
        }

        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }

        if (null !== $this->toStatus) {
            $res['ToStatus'] = $this->toStatus;
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
        if (isset($map['FromStatus'])) {
            $model->fromStatus = $map['FromStatus'];
        }

        if (isset($map['OperatedAt'])) {
            $model->operatedAt = $map['OperatedAt'];
        }

        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }

        if (isset($map['ToStatus'])) {
            $model->toStatus = $map['ToStatus'];
        }

        return $model;
    }
}
