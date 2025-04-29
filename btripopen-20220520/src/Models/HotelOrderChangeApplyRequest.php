<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeApplyRequest\roomInfoList;

class HotelOrderChangeApplyRequest extends Model
{
    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var roomInfoList[]
     */
    public $roomInfoList;

    /**
     * @var string
     */
    public $saleOrderId;
    protected $_name = [
        'btripUserId' => 'btrip_user_id',
        'disOrderId' => 'dis_order_id',
        'reason' => 'reason',
        'roomInfoList' => 'room_info_list',
        'saleOrderId' => 'sale_order_id',
    ];

    public function validate()
    {
        if (\is_array($this->roomInfoList)) {
            Model::validateArray($this->roomInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->roomInfoList)) {
                $res['room_info_list'] = [];
                $n1 = 0;
                foreach ($this->roomInfoList as $item1) {
                    $res['room_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->saleOrderId) {
            $res['sale_order_id'] = $this->saleOrderId;
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
                $n1 = 0;
                foreach ($map['room_info_list'] as $item1) {
                    $model->roomInfoList[$n1++] = roomInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['sale_order_id'])) {
            $model->saleOrderId = $map['sale_order_id'];
        }

        return $model;
    }
}
