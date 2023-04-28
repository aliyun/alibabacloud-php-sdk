<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\roomService;
use AlibabaCloud\Tea\Model;

class rooms extends Model
{
    /**
     * @example 27
     *
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $bedTypeString;

    /**
     * @example true
     *
     * @var bool
     */
    public $extraBed;

    /**
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
     * @example 1
     *
     * @var int
     */
    public $maxOccupancy;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var string
     */
    public $networkService;

    /**
     * @var string
     */
    public $pics;

    /**
     * @var rates[]
     */
    public $rates;

    /**
     * @example demo
     *
     * @var string
     */
    public $roomDasc;

    /**
     * @var string[]
     */
    public $roomFacility;

    /**
     * @var roomService[]
     */
    public $roomService;

    /**
     * @example 100929
     *
     * @var int
     */
    public $srid;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $windowType;
    protected $_name = [
        'area'           => 'area',
        'bedTypeString'  => 'bed_type_string',
        'extraBed'       => 'extra_bed',
        'facility'       => 'facility',
        'floor'          => 'floor',
        'maxOccupancy'   => 'max_occupancy',
        'name'           => 'name',
        'networkService' => 'network_service',
        'pics'           => 'pics',
        'rates'          => 'rates',
        'roomDasc'       => 'room_dasc',
        'roomFacility'   => 'room_facility',
        'roomService'    => 'room_service',
        'srid'           => 'srid',
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
        if (null !== $this->bedTypeString) {
            $res['bed_type_string'] = $this->bedTypeString;
        }
        if (null !== $this->extraBed) {
            $res['extra_bed'] = $this->extraBed;
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (null !== $this->roomDasc) {
            $res['room_dasc'] = $this->roomDasc;
        }
        if (null !== $this->roomFacility) {
            $res['room_facility'] = $this->roomFacility;
        }
        if (null !== $this->roomService) {
            $res['room_service'] = [];
            if (null !== $this->roomService && \is_array($this->roomService)) {
                $n = 0;
                foreach ($this->roomService as $item) {
                    $res['room_service'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->srid) {
            $res['srid'] = $this->srid;
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
        if (isset($map['bed_type_string'])) {
            $model->bedTypeString = $map['bed_type_string'];
        }
        if (isset($map['extra_bed'])) {
            $model->extraBed = $map['extra_bed'];
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['network_service'])) {
            $model->networkService = $map['network_service'];
        }
        if (isset($map['pics'])) {
            $model->pics = $map['pics'];
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
        if (isset($map['room_dasc'])) {
            $model->roomDasc = $map['room_dasc'];
        }
        if (isset($map['room_facility'])) {
            if (!empty($map['room_facility'])) {
                $model->roomFacility = $map['room_facility'];
            }
        }
        if (isset($map['room_service'])) {
            if (!empty($map['room_service'])) {
                $model->roomService = [];
                $n                  = 0;
                foreach ($map['room_service'] as $item) {
                    $model->roomService[$n++] = null !== $item ? roomService::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['srid'])) {
            $model->srid = $map['srid'];
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
