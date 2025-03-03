<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateFundAccountTransferRequest extends Model
{
    /**
     * @var string
     */
    public $amount;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var string
     */
    public $financeType;
    /**
     * @var int
     */
    public $fromFundAccountId;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var int
     */
    public $toFundAccountId;
    /**
     * @var string
     */
    public $transferType;
    protected $_name = [
        'amount'            => 'Amount',
        'currency'          => 'Currency',
        'financeType'       => 'FinanceType',
        'fromFundAccountId' => 'FromFundAccountId',
        'remark'            => 'Remark',
        'toFundAccountId'   => 'ToFundAccountId',
        'transferType'      => 'TransferType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
