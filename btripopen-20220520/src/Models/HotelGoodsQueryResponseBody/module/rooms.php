<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\roomService;

class rooms extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $bedTypeString;

    /**
     * @var bool
     */
    public $extraBed;

    /**
     * @var string
     */
    public $facility;

    /**
     * @var string
     */
    public $floor;

    /**
     * @var int
     */
    public $maxOccupancy;

    /**
     * @var string
     */
    public $name;

    /**
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
     * @var int
     */
    public $srid;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $windowType;
    protected $_name = [
        'area' => 'area',
        'bedTypeString' => 'bed_type_string',
        'extraBed' => 'extra_bed',
        'facility' => 'facility',
        'floor' => 'floor',
        'maxOccupancy' => 'max_occupancy',
        'name' => 'name',
        'networkService' => 'network_service',
        'pics' => 'pics',
        'rates' => 'rates',
        'roomDasc' => 'room_dasc',
        'roomFacility' => 'room_facility',
        'roomService' => 'room_service',
        'srid' => 'srid',
        'status' => 'status',
        'windowType' => 'window_type',
    ];

    public function validate()
    {
        if (\is_array($this->rates)) {
            Model::validateArray($this->rates);
        }
        if (\is_array($this->roomFacility)) {
            Model::validateArray($this->roomFacility);
        }
        if (\is_array($this->roomService)) {
            Model::validateArray($this->roomService);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->rates)) {
                $res['rates'] = [];
                $n1 = 0;
                foreach ($this->rates as $item1) {
                    $res['rates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->roomDasc) {
            $res['room_dasc'] = $this->roomDasc;
        }

        if (null !== $this->roomFacility) {
            if (\is_array($this->roomFacility)) {
                $res['room_facility'] = [];
                $n1 = 0;
                foreach ($this->roomFacility as $item1) {
                    $res['room_facility'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->roomService) {
            if (\is_array($this->roomService)) {
                $res['room_service'] = [];
                $n1 = 0;
                foreach ($this->roomService as $item1) {
                    $res['room_service'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['rates'] as $item1) {
                    $model->rates[$n1++] = rates::fromMap($item1);
                }
            }
        }

        if (isset($map['room_dasc'])) {
            $model->roomDasc = $map['room_dasc'];
        }

        if (isset($map['room_facility'])) {
            if (!empty($map['room_facility'])) {
                $model->roomFacility = [];
                $n1 = 0;
                foreach ($map['room_facility'] as $item1) {
                    $model->roomFacility[$n1++] = $item1;
                }
            }
        }

        if (isset($map['room_service'])) {
            if (!empty($map['room_service'])) {
                $model->roomService = [];
                $n1 = 0;
                foreach ($map['room_service'] as $item1) {
                    $model->roomService[$n1++] = roomService::fromMap($item1);
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
