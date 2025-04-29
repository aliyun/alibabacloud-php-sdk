<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightModifyOrderDetailV2Request extends Model
{
    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $modifyApplyId;

    /**
     * @var bool
     */
    public $needQueryServiceFee;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outModifyApplyId;

    /**
     * @var string
     */
    public $outOrderId;
    protected $_name = [
        'isvName' => 'isv_name',
        'modifyApplyId' => 'modify_apply_id',
        'needQueryServiceFee' => 'need_query_service_fee',
        'orderId' => 'order_id',
        'outModifyApplyId' => 'out_modify_apply_id',
        'outOrderId' => 'out_order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->modifyApplyId) {
            $res['modify_apply_id'] = $this->modifyApplyId;
        }

        if (null !== $this->needQueryServiceFee) {
            $res['need_query_service_fee'] = $this->needQueryServiceFee;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outModifyApplyId) {
            $res['out_modify_apply_id'] = $this->outModifyApplyId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
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
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['modify_apply_id'])) {
            $model->modifyApplyId = $map['modify_apply_id'];
        }

        if (isset($map['need_query_service_fee'])) {
            $model->needQueryServiceFee = $map['need_query_service_fee'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_modify_apply_id'])) {
            $model->outModifyApplyId = $map['out_modify_apply_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        return $model;
    }
}
