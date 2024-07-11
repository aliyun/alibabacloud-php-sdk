<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeApplyRequest\roomInfoList;
use AlibabaCloud\Tea\Model;

class HotelOrderChangeApplyRequest extends Model
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
     * @var roomInfoList[]
     */
    public $roomInfoList;

    /**
     * @description This parameter is required.
     *
     * @example 1402002197440511306
     *
     * @var string
     */
    public $saleOrderId;
    protected $_name = [
        'btripUserId'  => 'btrip_user_id',
        'disOrderId'   => 'dis_order_id',
        'reason'       => 'reason',
        'roomInfoList' => 'room_info_list',
        'saleOrderId'  => 'sale_order_id',
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
        if (null !== $this->roomInfoList) {
            $res['room_info_list'] = [];
            if (null !== $this->roomInfoList && \is_array($this->roomInfoList)) {
                $n = 0;
                foreach ($this->roomInfoList as $item) {
                    $res['room_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->saleOrderId) {
            $res['sale_order_id'] = $this->saleOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelOrderChangeApplyRequest
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
            if (!empty($map['room_info_list'])) {
                $model->roomInfoList = [];
                $n                   = 0;
                foreach ($map['room_info_list'] as $item) {
                    $model->roomInfoList[$n++] = null !== $item ? roomInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sale_order_id'])) {
            $model->saleOrderId = $map['sale_order_id'];
        }

        return $model;
    }
}
