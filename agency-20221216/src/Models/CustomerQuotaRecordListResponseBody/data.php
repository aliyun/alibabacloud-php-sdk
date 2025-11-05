<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\CustomerQuotaRecordListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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
    public $operationTypeCode;

    /**
     * @var string
     */
    public $operationTypeDesc;

    /**
     * @var string
     */
    public $operationUid;

    /**
     * @var string
     */
    public $updateAfterAmount;

    /**
     * @var string
     */
    public $updateAmount;

    /**
     * @var string
     */
    public $updateBeforeAmount;
    protected $_name = [
        'operationSubmitType' => 'OperationSubmitType',
        'operationTime' => 'OperationTime',
        'operationTypeCode' => 'OperationTypeCode',
        'operationTypeDesc' => 'OperationTypeDesc',
        'operationUid' => 'OperationUid',
        'updateAfterAmount' => 'UpdateAfterAmount',
        'updateAmount' => 'UpdateAmount',
        'updateBeforeAmount' => 'UpdateBeforeAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationSubmitType) {
            $res['OperationSubmitType'] = $this->operationSubmitType;
        }

        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }

        if (null !== $this->operationTypeCode) {
            $res['OperationTypeCode'] = $this->operationTypeCode;
        }

        if (null !== $this->operationTypeDesc) {
            $res['OperationTypeDesc'] = $this->operationTypeDesc;
        }

        if (null !== $this->operationUid) {
            $res['OperationUid'] = $this->operationUid;
        }

        if (null !== $this->updateAfterAmount) {
            $res['UpdateAfterAmount'] = $this->updateAfterAmount;
        }

        if (null !== $this->updateAmount) {
            $res['UpdateAmount'] = $this->updateAmount;
        }

        if (null !== $this->updateBeforeAmount) {
            $res['UpdateBeforeAmount'] = $this->updateBeforeAmount;
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
        if (isset($map['OperationSubmitType'])) {
            $model->operationSubmitType = $map['OperationSubmitType'];
        }

        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }

        if (isset($map['OperationTypeCode'])) {
            $model->operationTypeCode = $map['OperationTypeCode'];
        }

        if (isset($map['OperationTypeDesc'])) {
            $model->operationTypeDesc = $map['OperationTypeDesc'];
        }

        if (isset($map['OperationUid'])) {
            $model->operationUid = $map['OperationUid'];
        }

        if (isset($map['UpdateAfterAmount'])) {
            $model->updateAfterAmount = $map['UpdateAfterAmount'];
        }

        if (isset($map['UpdateAmount'])) {
            $model->updateAmount = $map['UpdateAmount'];
        }

        if (isset($map['UpdateBeforeAmount'])) {
            $model->updateBeforeAmount = $map['UpdateBeforeAmount'];
        }

        return $model;
    }
}
