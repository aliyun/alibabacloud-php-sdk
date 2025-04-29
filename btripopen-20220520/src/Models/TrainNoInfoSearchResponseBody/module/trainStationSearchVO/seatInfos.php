<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoInfoSearchResponseBody\module\trainStationSearchVO;

use AlibabaCloud\Dara\Model;

class seatInfos extends Model
{
    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $seatName;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @var string
     */
    public $stock;
    protected $_name = [
        'price' => 'price',
        'seatName' => 'seat_name',
        'seatType' => 'seat_type',
        'stock' => 'stock',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
