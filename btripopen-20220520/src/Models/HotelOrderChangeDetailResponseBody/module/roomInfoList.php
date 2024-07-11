<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailResponseBody\module\roomInfoList\roomDailyRefundInfos;
use AlibabaCloud\Tea\Model;

class roomInfoList extends Model
{
    /**
     * @var string[]
     */
    public $cancelDate;

    /**
     * @var roomDailyRefundInfos[]
     */
    public $roomDailyRefundInfos;

    /**
     * @example 1
     *
     * @var int
     */
    public $roomNo;
    protected $_name = [
        'cancelDate'           => 'cancel_date',
        'roomDailyRefundInfos' => 'room_daily_refund_infos',
        'roomNo'               => 'room_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelDate) {
            $res['cancel_date'] = $this->cancelDate;
        }
        if (null !== $this->roomDailyRefundInfos) {
            $res['room_daily_refund_infos'] = [];
            if (null !== $this->roomDailyRefundInfos && \is_array($this->roomDailyRefundInfos)) {
                $n = 0;
                foreach ($this->roomDailyRefundInfos as $item) {
                    $res['room_daily_refund_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roomNo) {
            $res['room_no'] = $this->roomNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cancel_date'])) {
            if (!empty($map['cancel_date'])) {
                $model->cancelDate = $map['cancel_date'];
            }
        }
        if (isset($map['room_daily_refund_infos'])) {
            if (!empty($map['room_daily_refund_infos'])) {
                $model->roomDailyRefundInfos = [];
                $n                           = 0;
                foreach ($map['room_daily_refund_infos'] as $item) {
                    $model->roomDailyRefundInfos[$n++] = null !== $item ? roomDailyRefundInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['room_no'])) {
            $model->roomNo = $map['room_no'];
        }

        return $model;
    }
}
