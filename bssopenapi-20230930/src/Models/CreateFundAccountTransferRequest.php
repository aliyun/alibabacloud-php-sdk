<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateFundAccountTransferRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var string
     */
    public $amount;

    /**
     * @description This parameter is required.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description This parameter is required.
     *
     * @example cash
     *
     * @var string
     */
    public $financeType;

    /**
     * @description This parameter is required.
     *
     * @example 123212323
     *
     * @var int
     */
    public $fromFundAccountId;

    /**
     * @description This parameter is required.
     *
     * @example 转账的备注
     *
     * @var string
     */
    public $remark;

    /**
     * @description This parameter is required.
     *
     * @example 11112231
     *
     * @var int
     */
    public $toFundAccountId;

    /**
     * @description This parameter is required.
     *
     * @example grant
     *
     * @var string
     */
    public $transferType;
    protected $_name = [
        'amount' => 'Amount',
        'currency' => 'Currency',
        'financeType' => 'FinanceType',
        'fromFundAccountId' => 'FromFundAccountId',
        'remark' => 'Remark',
        'toFundAccountId' => 'ToFundAccountId',
        'transferType' => 'TransferType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->financeType) {
            $res['FinanceType'] = $this->financeType;
        }
        if (null !== $this->fromFundAccountId) {
            $res['FromFundAccountId'] = $this->fromFundAccountId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->toFundAccountId) {
            $res['ToFundAccountId'] = $this->toFundAccountId;
        }
        if (null !== $this->transferType) {
            $res['TransferType'] = $this->transferType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFundAccountTransferRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['FinanceType'])) {
            $model->financeType = $map['FinanceType'];
        }
        if (isset($map['FromFundAccountId'])) {
            $model->fromFundAccountId = $map['FromFundAccountId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ToFundAccountId'])) {
            $model->toFundAccountId = $map['ToFundAccountId'];
        }
        if (isset($map['TransferType'])) {
            $model->transferType = $map['TransferType'];
        }

        return $model;
    }
}
