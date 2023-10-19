<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos\rooms;
use AlibabaCloud\Tea\Model;

class hotelPriceInfos extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @example 64389015
     *
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
     * @example 9BCDD5DE-E6CB-5C25-93B9-9BE178A0AA56
     *
     * @var string
     */
    public $searchId;
    protected $_name = [
        'address'   => 'address',
        'hotelId'   => 'hotel_id',
        'hotelName' => 'hotel_name',
        'rooms'     => 'rooms',
        'searchId'  => 'search_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['rooms'] = [];
            if (null !== $this->rooms && \is_array($this->rooms)) {
                $n = 0;
                foreach ($this->rooms as $item) {
                    $res['rooms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchId) {
            $res['search_id'] = $this->searchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotelPriceInfos
     */
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
                $n            = 0;
                foreach ($map['rooms'] as $item) {
                    $model->rooms[$n++] = null !== $item ? rooms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['search_id'])) {
            $model->searchId = $map['search_id'];
        }

        return $model;
    }
}
