<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeRequest\changeTrainInfoS;
use AlibabaCloud\Tea\Model;

class TrainApplyChangeRequest extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $acceptNoSeat;

    /**
     * @description This parameter is required.
     *
     * @var changeTrainInfoS[]
     */
    public $changeTrainInfoS;

    /**
     * @example 0
     *
     * @var string
     */
    public $forceMatch;

    /**
     * @example false
     *
     * @var bool
     */
    public $isPayNow;

    /**
     * @description This parameter is required.
     *
     * @example 1017028198411054446
     *
     * @var string
     */
    public $orderId;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $outChangeApplyId;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $outOrderId;
    protected $_name = [
        'acceptNoSeat'     => 'accept_no_seat',
        'changeTrainInfoS' => 'change_train_info_s',
        'forceMatch'       => 'force_match',
        'isPayNow'         => 'is_pay_now',
        'orderId'          => 'order_id',
        'outChangeApplyId' => 'out_change_apply_id',
        'outOrderId'       => 'out_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptNoSeat) {
            $res['accept_no_seat'] = $this->acceptNoSeat;
        }
        if (null !== $this->changeTrainInfoS) {
            $res['change_train_info_s'] = [];
            if (null !== $this->changeTrainInfoS && \is_array($this->changeTrainInfoS)) {
                $n = 0;
                foreach ($this->changeTrainInfoS as $item) {
                    $res['change_train_info_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->forceMatch) {
            $res['force_match'] = $this->forceMatch;
        }
        if (null !== $this->isPayNow) {
            $res['is_pay_now'] = $this->isPayNow;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outChangeApplyId) {
            $res['out_change_apply_id'] = $this->outChangeApplyId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainApplyChangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accept_no_seat'])) {
            $model->acceptNoSeat = $map['accept_no_seat'];
        }
        if (isset($map['change_train_info_s'])) {
            if (!empty($map['change_train_info_s'])) {
                $model->changeTrainInfoS = [];
                $n                       = 0;
                foreach ($map['change_train_info_s'] as $item) {
                    $model->changeTrainInfoS[$n++] = null !== $item ? changeTrainInfoS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['force_match'])) {
            $model->forceMatch = $map['force_match'];
        }
        if (isset($map['is_pay_now'])) {
            $model->isPayNow = $map['is_pay_now'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_change_apply_id'])) {
            $model->outChangeApplyId = $map['out_change_apply_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        return $model;
    }
}
