<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelOrderChangeApplyShrinkRequest extends Model
{
    /**
     * @example 123122
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @description This parameter is required.
     *
     * @example 3685792244476194816
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $reason;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $roomInfoListShrink;

    /**
     * @description This parameter is required.
     *
     * @example 1402002197440511306
     *
     * @var string
     */
    public $saleOrderId;
    protected $_name = [
        'btripUserId'        => 'btrip_user_id',
        'disOrderId'         => 'dis_order_id',
        'reason'             => 'reason',
        'roomInfoListShrink' => 'room_info_list',
        'saleOrderId'        => 'sale_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->roomInfoListShrink) {
            $res['room_info_list'] = $this->roomInfoListShrink;
        }
        if (null !== $this->saleOrderId) {
            $res['sale_order_id'] = $this->saleOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelOrderChangeApplyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['room_info_list'])) {
            $model->roomInfoListShrink = $map['room_info_list'];
        }
        if (isset($map['sale_order_id'])) {
            $model->saleOrderId = $map['sale_order_id'];
        }

        return $model;
    }
}
