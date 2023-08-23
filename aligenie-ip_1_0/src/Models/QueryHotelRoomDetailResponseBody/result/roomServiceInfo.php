<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomServiceInfo extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $bookServiceCnt;

    /**
     * @example 10
     *
     * @var int
     */
    public $goodsServiceCnt;

    /**
     * @example 10
     *
     * @var int
     */
    public $repairServiceCnt;

    /**
     * @example 12
     *
     * @var int
     */
    public $roomServiceCnt;
    protected $_name = [
        'bookServiceCnt'   => 'BookServiceCnt',
        'goodsServiceCnt'  => 'GoodsServiceCnt',
        'repairServiceCnt' => 'RepairServiceCnt',
        'roomServiceCnt'   => 'RoomServiceCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return roomServiceInfo
     */
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
