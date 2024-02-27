<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\CustomerQuotaRecordListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The way to submit the quota adjustment operation. API/ACPN
     *
     * @example ACPN
     *
     * @var string
     */
    public $operationSubmitType;

    /**
     * @description The time of submit the quota adjustment operation.
     *
     * @example 2023-12-15 10:34:36 UTC+8
     *
     * @var string
     */
    public $operationTime;

    /**
     * @description Operation Type Enum</br>
     * quota_amount_adjust Adjust the amount of quota</br>
     * @example quota_amount_adjust
     *
     * @var string
     */
    public $operationTypeCode;

    /**
     * @description The description of submitted quota adjustment operation.
     *
     * @example Quota Adjustment
     *
     * @var string
     */
    public $operationTypeDesc;

    /**
     * @description The UID of operator(Partner\"s UID).
     *
     * @example 5113766248601929
     *
     * @var string
     */
    public $operationUid;

    /**
     * @description Updated quota amount
     *
     * @example 121.00
     *
     * @var string
     */
    public $updateAfterAmount;

    /**
     * @description The difference amount between updated quota and original quota.
     *
     * @example -100.00
     *
     * @var string
     */
    public $updateAmount;

    /**
     * @description Original quota amount
     *
     * @example 221.00
     *
     * @var string
     */
    public $updateBeforeAmount;
    protected $_name = [
        'operationSubmitType' => 'OperationSubmitType',
        'operationTime'       => 'OperationTime',
        'operationTypeCode'   => 'OperationTypeCode',
        'operationTypeDesc'   => 'OperationTypeDesc',
        'operationUid'        => 'OperationUid',
        'updateAfterAmount'   => 'UpdateAfterAmount',
        'updateAmount'        => 'UpdateAmount',
        'updateBeforeAmount'  => 'UpdateBeforeAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
