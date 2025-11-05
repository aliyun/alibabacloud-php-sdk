<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\QueryReversedDeductionHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $offsetAmount;

    /**
     * @var string
     */
    public $operationSubmitType;

    /**
     * @var string
     */
    public $operationTime;

    /**
     * @var string
     */
    public $operationUid;
    protected $_name = [
        'offsetAmount' => 'OffsetAmount',
        'operationSubmitType' => 'OperationSubmitType',
        'operationTime' => 'OperationTime',
        'operationUid' => 'OperationUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offsetAmount) {
            $res['OffsetAmount'] = $this->offsetAmount;
        }

        if (null !== $this->operationSubmitType) {
            $res['OperationSubmitType'] = $this->operationSubmitType;
        }

        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }

        if (null !== $this->operationUid) {
            $res['OperationUid'] = $this->operationUid;
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
        if (isset($map['OffsetAmount'])) {
            $model->offsetAmount = $map['OffsetAmount'];
        }

        if (isset($map['OperationSubmitType'])) {
            $model->operationSubmitType = $map['OperationSubmitType'];
        }

        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }

        if (isset($map['OperationUid'])) {
            $model->operationUid = $map['OperationUid'];
        }

        return $model;
    }
}
