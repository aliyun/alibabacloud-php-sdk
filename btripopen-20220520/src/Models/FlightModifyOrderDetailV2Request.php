<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightModifyOrderDetailV2Request extends Model
{
    /**
     * @example name
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 1019195786853020
     *
     * @var string
     */
    public $modifyApplyId;

    /**
     * @example false
     *
     * @var bool
     */
    public $needQueryServiceFee;

    /**
     * @example 1017002195370467200
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'isvName'             => 'isv_name',
        'modifyApplyId'       => 'modify_apply_id',
        'needQueryServiceFee' => 'need_query_service_fee',
        'orderId'             => 'order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightModifyOrderDetailV2Request
     */
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

        return $model;
    }
}
