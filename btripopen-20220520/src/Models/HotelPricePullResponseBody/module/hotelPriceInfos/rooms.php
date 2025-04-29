<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos\rooms\rates;

class rooms extends Model
{
    /**
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
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $roomName;

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
        'bed' => 'bed',
        'bedTypeString' => 'bed_type_string',
        'facility' => 'facility',
        'floor' => 'floor',
        'maxOccupancy' => 'max_occupancy',
        'networkService' => 'network_service',
        'pics' => 'pics',
        'rates' => 'rates',
        'roomId' => 'room_id',
        'roomName' => 'room_name',
        'status' => 'status',
        'windowType' => 'window_type',
    ];

    public function validate()
    {
        if (\is_array($this->pics)) {
            Model::validateArray($this->pics);
        }
        if (\is_array($this->rates)) {
            Model::validateArray($this->rates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->pics)) {
                $res['pics'] = [];
                $n1 = 0;
                foreach ($this->pics as $item1) {
                    $res['pics'][$n1++] = $item1;
                }
            }
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
                $model->pics = [];
                $n1 = 0;
                foreach ($map['pics'] as $item1) {
                    $model->pics[$n1++] = $item1;
                }
            }
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
