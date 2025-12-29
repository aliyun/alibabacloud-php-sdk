<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result;

use AlibabaCloud\Dara\Model;

class roomServiceInfo extends Model
{
    /**
     * @var int
     */
    public $bookServiceCnt;

    /**
     * @var int
     */
    public $goodsServiceCnt;

    /**
     * @var int
     */
    public $repairServiceCnt;

    /**
     * @var int
     */
    public $roomServiceCnt;
    protected $_name = [
        'bookServiceCnt' => 'BookServiceCnt',
        'goodsServiceCnt' => 'GoodsServiceCnt',
        'repairServiceCnt' => 'RepairServiceCnt',
        'roomServiceCnt' => 'RoomServiceCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookServiceCnt) {
            $res['BookServiceCnt'] = $this->bookServiceCnt;
        }

        if (null !== $this->goodsServiceCnt) {
            $res['GoodsServiceCnt'] = $this->goodsServiceCnt;
        }

        if (null !== $this->repairServiceCnt) {
            $res['RepairServiceCnt'] = $this->repairServiceCnt;
        }

        if (null !== $this->roomServiceCnt) {
            $res['RoomServiceCnt'] = $this->roomServiceCnt;
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
        if (isset($map['BookServiceCnt'])) {
            $model->bookServiceCnt = $map['BookServiceCnt'];
        }

        if (isset($map['GoodsServiceCnt'])) {
            $model->goodsServiceCnt = $map['GoodsServiceCnt'];
        }

        if (isset($map['RepairServiceCnt'])) {
            $model->repairServiceCnt = $map['RepairServiceCnt'];
        }

        if (isset($map['RoomServiceCnt'])) {
            $model->roomServiceCnt = $map['RoomServiceCnt'];
        }

        return $model;
    }
}
