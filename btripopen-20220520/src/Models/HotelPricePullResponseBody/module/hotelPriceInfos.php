<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos\rooms;

class hotelPriceInfos extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var rooms[]
     */
    public $rooms;

    /**
     * @var string
     */
    public $searchId;
    protected $_name = [
        'address' => 'address',
        'hotelId' => 'hotel_id',
        'hotelName' => 'hotel_name',
        'rooms' => 'rooms',
        'searchId' => 'search_id',
    ];

    public function validate()
    {
        if (\is_array($this->rooms)) {
            Model::validateArray($this->rooms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->hotelId) {
            $res['hotel_id'] = $this->hotelId;
        }

        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }

        if (null !== $this->rooms) {
            if (\is_array($this->rooms)) {
                $res['rooms'] = [];
                $n1 = 0;
                foreach ($this->rooms as $item1) {
                    $res['rooms'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->searchId) {
            $res['search_id'] = $this->searchId;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['hotel_id'])) {
            $model->hotelId = $map['hotel_id'];
        }

        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }

        if (isset($map['rooms'])) {
            if (!empty($map['rooms'])) {
                $model->rooms = [];
                $n1 = 0;
                foreach ($map['rooms'] as $item1) {
                    $model->rooms[$n1++] = rooms::fromMap($item1);
                }
            }
        }

        if (isset($map['search_id'])) {
            $model->searchId = $map['search_id'];
        }

        return $model;
    }
}
