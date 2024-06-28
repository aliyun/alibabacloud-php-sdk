<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetResellerUserQuotaRequest extends Model
{
    /**
     * @description The quota of a quota ledger. Unit: CNY.
     *
     * This parameter is required.
     * @example 750
     *
     * @var string
     */
    public $amount;

    /**
     * @description You do not need to set the parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $currency;

    /**
     * @description The ID of the business.
     *
     * @example OD2022040818295234777795624764689
     *
     * @var string
     */
    public $outBizId;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'amount'   => 'Amount',
        'currency' => 'Currency',
        'outBizId' => 'OutBizId',
        'ownerId'  => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetResellerUserQuotaRequest
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
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
