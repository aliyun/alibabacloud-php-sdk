<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos\rooms\rates;
use AlibabaCloud\Tea\Model;

class rooms extends Model
{
    /**
     * @example 32
     *
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $bed;

    /**
     * @var string
     */
    public $bedTypeString;

    /**
     * @example {\"bathtub\":true}
     *
     * @var string
     */
    public $facility;

    /**
     * @example 1,2,3,4,5,6
     *
     * @var string
     */
    public $floor;

    /**
     * @example 2
     *
     * @var int
     */
    public $maxOccupancy;

    /**
     * @example 0
     *
     * @var string
     */
    public $networkService;

    /**
     * @var string[]
     */
    public $pics;

    /**
     * @var rates[]
     */
    public $rates;

    /**
     * @example 64681618
     *
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $roomName;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var string
     */
    public $windowType;
    protected $_name = [
        'area'           => 'area',
        'bed'            => 'bed',
        'bedTypeString'  => 'bed_type_string',
        'facility'       => 'facility',
        'floor'          => 'floor',
        'maxOccupancy'   => 'max_occupancy',
        'networkService' => 'network_service',
        'pics'           => 'pics',
        'rates'          => 'rates',
        'roomId'         => 'room_id',
        'roomName'       => 'room_name',
        'status'         => 'status',
        'windowType'     => 'window_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['area'] = $this->area;
        }
        if (null !== $this->bed) {
            $res['bed'] = $this->bed;
        }
        if (null !== $this->bedTypeString) {
            $res['bed_type_string'] = $this->bedTypeString;
        }
        if (null !== $this->facility) {
            $res['facility'] = $this->facility;
        }
        if (null !== $this->floor) {
            $res['floor'] = $this->floor;
        }
        if (null !== $this->maxOccupancy) {
            $res['max_occupancy'] = $this->maxOccupancy;
        }
        if (null !== $this->networkService) {
            $res['network_service'] = $this->networkService;
        }
        if (null !== $this->pics) {
            $res['pics'] = $this->pics;
        }
        if (null !== $this->rates) {
            $res['rates'] = [];
            if (null !== $this->rates && \is_array($this->rates)) {
                $n = 0;
                foreach ($this->rates as $item) {
                    $res['rates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roomId) {
            $res['room_id'] = $this->roomId;
        }
        if (null !== $this->roomName) {
            $res['room_name'] = $this->roomName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->windowType) {
            $res['window_type'] = $this->windowType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rooms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['area'])) {
            $model->area = $map['area'];
        }
        if (isset($map['bed'])) {
            $model->bed = $map['bed'];
        }
        if (isset($map['bed_type_string'])) {
            $model->bedTypeString = $map['bed_type_string'];
        }
        if (isset($map['facility'])) {
            $model->facility = $map['facility'];
        }
        if (isset($map['floor'])) {
            $model->floor = $map['floor'];
        }
        if (isset($map['max_occupancy'])) {
            $model->maxOccupancy = $map['max_occupancy'];
        }
        if (isset($map['network_service'])) {
            $model->networkService = $map['network_service'];
        }
        if (isset($map['pics'])) {
            if (!empty($map['pics'])) {
                $model->pics = $map['pics'];
            }
        }
        if (isset($map['rates'])) {
            if (!empty($map['rates'])) {
                $model->rates = [];
                $n            = 0;
                foreach ($map['rates'] as $item) {
                    $model->rates[$n++] = null !== $item ? rates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['room_id'])) {
            $model->roomId = $map['room_id'];
        }
        if (isset($map['room_name'])) {
            $model->roomName = $map['room_name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['window_type'])) {
            $model->windowType = $map['window_type'];
        }

        return $model;
    }
}
