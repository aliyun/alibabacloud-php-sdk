<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models;

use AlibabaCloud\Dara\Model;

class HandleSimilarSecurityEventsRequest extends Model
{
    /**
     * @var string
     */
    public $markMissParam;

    /**
     * @var string
     */
    public $operationCode;

    /**
     * @var string
     */
    public $operationParams;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'markMissParam' => 'MarkMissParam',
        'operationCode' => 'OperationCode',
        'operationParams' => 'OperationParams',
        'remark' => 'Remark',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->markMissParam) {
            $res['MarkMissParam'] = $this->markMissParam;
        }

        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }

        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['MarkMissParam'])) {
            $model->markMissParam = $map['MarkMissParam'];
        }

        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }

        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
