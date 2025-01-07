<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\OrderRefundDetailQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class refundDetails extends Model
{
    /**
     * @example ALIPAY
     *
     * @var string
     */
    public $personPayChannel;

    /**
     * @example 2025010223001423691442474885
     *
     * @var string
     */
    public $personRefundId;

    /**
     * @example 5000
     *
     * @var int
     */
    public $refundAmount;

    /**
     * @example 4800
     *
     * @var int
     */
    public $refundAmountCorp;

    /**
     * @example 200
     *
     * @var int
     */
    public $refundAmountPerson;

    /**
     * @example ZLJD12241231000002
     *
     * @var string
     */
    public $supplierRefundId;
    protected $_name = [
        'personPayChannel'   => 'person_pay_channel',
        'personRefundId'     => 'person_refund_id',
        'refundAmount'       => 'refund_amount',
        'refundAmountCorp'   => 'refund_amount_corp',
        'refundAmountPerson' => 'refund_amount_person',
        'supplierRefundId'   => 'supplier_refund_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->personPayChannel) {
            $res['person_pay_channel'] = $this->personPayChannel;
        }
        if (null !== $this->personRefundId) {
            $res['person_refund_id'] = $this->personRefundId;
        }
        if (null !== $this->refundAmount) {
            $res['refund_amount'] = $this->refundAmount;
        }
        if (null !== $this->refundAmountCorp) {
            $res['refund_amount_corp'] = $this->refundAmountCorp;
        }
        if (null !== $this->refundAmountPerson) {
            $res['refund_amount_person'] = $this->refundAmountPerson;
        }
        if (null !== $this->supplierRefundId) {
            $res['supplier_refund_id'] = $this->supplierRefundId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['person_pay_channel'])) {
            $model->personPayChannel = $map['person_pay_channel'];
        }
        if (isset($map['person_refund_id'])) {
            $model->personRefundId = $map['person_refund_id'];
        }
        if (isset($map['refund_amount'])) {
            $model->refundAmount = $map['refund_amount'];
        }
        if (isset($map['refund_amount_corp'])) {
            $model->refundAmountCorp = $map['refund_amount_corp'];
        }
        if (isset($map['refund_amount_person'])) {
            $model->refundAmountPerson = $map['refund_amount_person'];
        }
        if (isset($map['supplier_refund_id'])) {
            $model->supplierRefundId = $map['supplier_refund_id'];
        }

        return $model;
    }
}
