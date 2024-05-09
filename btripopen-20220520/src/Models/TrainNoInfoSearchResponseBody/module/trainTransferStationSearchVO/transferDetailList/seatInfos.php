<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainTransferStationSearchVO\transferDetailList;

use AlibabaCloud\Tea\Model;

class seatInfos extends Model
{
    /**
     * @example 67000
     *
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $seatName;

    /**
     * @example 14
     *
     * @var string
     */
    public $seatType;

    /**
     * @var string
     */
    public $stock;
    protected $_name = [
        'price'    => 'price',
        'seatName' => 'seat_name',
        'seatType' => 'seat_type',
        'stock'    => 'stock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->seatName) {
            $res['seat_name'] = $this->seatName;
        }
        if (null !== $this->seatType) {
            $res['seat_type'] = $this->seatType;
        }
        if (null !== $this->stock) {
            $res['stock'] = $this->stock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return seatInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['seat_name'])) {
            $model->seatName = $map['seat_name'];
        }
        if (isset($map['seat_type'])) {
            $model->seatType = $map['seat_type'];
        }
        if (isset($map['stock'])) {
            $model->stock = $map['stock'];
        }

        return $model;
    }
}
