<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponseBody\module;

use AlibabaCloud\Dara\Model;

class multiRefundCalList extends Model
{
    /**
     * @var bool
     */
    public $canApplyRefund;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $preRefundMoney;

    /**
     * @var int
     */
    public $refundFee;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'canApplyRefund' => 'can_apply_refund',
        'name' => 'name',
        'preRefundMoney' => 'pre_refund_money',
        'refundFee' => 'refund_fee',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canApplyRefund) {
            $res['can_apply_refund'] = $this->canApplyRefund;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->preRefundMoney) {
            $res['pre_refund_money'] = $this->preRefundMoney;
        }

        if (null !== $this->refundFee) {
            $res['refund_fee'] = $this->refundFee;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['can_apply_refund'])) {
            $model->canApplyRefund = $map['can_apply_refund'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pre_refund_money'])) {
            $model->preRefundMoney = $map['pre_refund_money'];
        }

        if (isset($map['refund_fee'])) {
            $model->refundFee = $map['refund_fee'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
