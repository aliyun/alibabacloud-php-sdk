<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\roomInfos\bedInfoGroupList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\roomInfos\bedInfos;

class roomInfos extends Model
{
    /**
     * @var bedInfoGroupList[]
     */
    public $bedInfoGroupList;

    /**
     * @var bedInfos[]
     */
    public $bedInfos;

    /**
     * @var int
     */
    public $extraBed;

    /**
     * @var string
     */
    public $extraBedDesc;

    /**
     * @var string
     */
    public $floor;

    /**
     * @var string
     */
    public $internetWay;

    /**
     * @var int
     */
    public $maxOccupancy;

    /**
     * @var string
     */
    public $roomFacilities;

    /**
     * @var string[]
     */
    public $roomFacilityList;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $roomImage;

    /**
     * @var string[]
     */
    public $roomImages;

    /**
     * @var string
     */
    public $roomName;

    /**
     * @var int
     */
    public $roomType;

    /**
     * @var string
     */
    public $roomarea;

    /**
     * @var int
     */
    public $rooms;

    /**
     * @var string
     */
    public $window;

    /**
     * @var string
     */
    public $windowBad;

    /**
     * @var string
     */
    public $windowView;
    protected $_name = [
        'bedInfoGroupList' => 'bed_info_group_list',
        'bedInfos' => 'bed_infos',
        'extraBed' => 'extra_bed',
        'extraBedDesc' => 'extra_bed_desc',
        'floor' => 'floor',
        'internetWay' => 'internet_way',
        'maxOccupancy' => 'max_occupancy',
        'roomFacilities' => 'room_facilities',
        'roomFacilityList' => 'room_facility_list',
        'roomId' => 'room_id',
        'roomImage' => 'room_image',
        'roomImages' => 'room_images',
        'roomName' => 'room_name',
        'roomType' => 'room_type',
        'roomarea' => 'roomarea',
        'rooms' => 'rooms',
        'window' => 'window',
        'windowBad' => 'window_bad',
        'windowView' => 'window_view',
    ];

    public function validate()
    {
        if (\is_array($this->bedInfoGroupList)) {
            Model::validateArray($this->bedInfoGroupList);
        }
        if (\is_array($this->bedInfos)) {
            Model::validateArray($this->bedInfos);
        }
        if (\is_array($this->roomFacilityList)) {
            Model::validateArray($this->roomFacilityList);
        }
        if (\is_array($this->roomImages)) {
            Model::validateArray($this->roomImages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bedInfoGroupList) {
            if (\is_array($this->bedInfoGroupList)) {
                $res['bed_info_group_list'] = [];
                $n1 = 0;
                foreach ($this->bedInfoGroupList as $item1) {
                    $res['bed_info_group_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bedInfos) {
            if (\is_array($this->bedInfos)) {
                $res['bed_infos'] = [];
                $n1 = 0;
                foreach ($this->bedInfos as $item1) {
                    $res['bed_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extraBed) {
            $res['extra_bed'] = $this->extraBed;
        }

        if (null !== $this->extraBedDesc) {
            $res['extra_bed_desc'] = $this->extraBedDesc;
        }

        if (null !== $this->floor) {
            $res['floor'] = $this->floor;
        }

        if (null !== $this->internetWay) {
            $res['internet_way'] = $this->internetWay;
        }

        if (null !== $this->maxOccupancy) {
            $res['max_occupancy'] = $this->maxOccupancy;
        }

        if (null !== $this->roomFacilities) {
            $res['room_facilities'] = $this->roomFacilities;
        }

        if (null !== $this->roomFacilityList) {
            if (\is_array($this->roomFacilityList)) {
                $res['room_facility_list'] = [];
                $n1 = 0;
                foreach ($this->roomFacilityList as $item1) {
                    $res['room_facility_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roomId) {
            $res['room_id'] = $this->roomId;
        }

        if (null !== $this->roomImage) {
            $res['room_image'] = $this->roomImage;
        }

        if (null !== $this->roomImages) {
            if (\is_array($this->roomImages)) {
                $res['room_images'] = [];
                $n1 = 0;
                foreach ($this->roomImages as $item1) {
                    $res['room_images'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roomName) {
            $res['room_name'] = $this->roomName;
        }

        if (null !== $this->roomType) {
            $res['room_type'] = $this->roomType;
        }

        if (null !== $this->roomarea) {
            $res['roomarea'] = $this->roomarea;
        }

        if (null !== $this->rooms) {
            $res['rooms'] = $this->rooms;
        }

        if (null !== $this->window) {
            $res['window'] = $this->window;
        }

        if (null !== $this->windowBad) {
            $res['window_bad'] = $this->windowBad;
        }

        if (null !== $this->windowView) {
            $res['window_view'] = $this->windowView;
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
        if (isset($map['bed_info_group_list'])) {
            if (!empty($map['bed_info_group_list'])) {
                $model->bedInfoGroupList = [];
                $n1 = 0;
                foreach ($map['bed_info_group_list'] as $item1) {
                    $model->bedInfoGroupList[$n1] = bedInfoGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['bed_infos'])) {
            if (!empty($map['bed_infos'])) {
                $model->bedInfos = [];
                $n1 = 0;
                foreach ($map['bed_infos'] as $item1) {
                    $model->bedInfos[$n1] = bedInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['extra_bed'])) {
            $model->extraBed = $map['extra_bed'];
        }

        if (isset($map['extra_bed_desc'])) {
            $model->extraBedDesc = $map['extra_bed_desc'];
        }

        if (isset($map['floor'])) {
            $model->floor = $map['floor'];
        }

        if (isset($map['internet_way'])) {
            $model->internetWay = $map['internet_way'];
        }

        if (isset($map['max_occupancy'])) {
            $model->maxOccupancy = $map['max_occupancy'];
        }

        if (isset($map['room_facilities'])) {
            $model->roomFacilities = $map['room_facilities'];
        }

        if (isset($map['room_facility_list'])) {
            if (!empty($map['room_facility_list'])) {
                $model->roomFacilityList = [];
                $n1 = 0;
                foreach ($map['room_facility_list'] as $item1) {
                    $model->roomFacilityList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['room_id'])) {
            $model->roomId = $map['room_id'];
        }

        if (isset($map['room_image'])) {
            $model->roomImage = $map['room_image'];
        }

        if (isset($map['room_images'])) {
            if (!empty($map['room_images'])) {
                $model->roomImages = [];
                $n1 = 0;
                foreach ($map['room_images'] as $item1) {
                    $model->roomImages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['room_name'])) {
            $model->roomName = $map['room_name'];
        }

        if (isset($map['room_type'])) {
            $model->roomType = $map['room_type'];
        }

        if (isset($map['roomarea'])) {
            $model->roomarea = $map['roomarea'];
        }

        if (isset($map['rooms'])) {
            $model->rooms = $map['rooms'];
        }

        if (isset($map['window'])) {
            $model->window = $map['window'];
        }

        if (isset($map['window_bad'])) {
            $model->windowBad = $map['window_bad'];
        }

        if (isset($map['window_view'])) {
            $model->windowView = $map['window_view'];
        }

        return $model;
    }
}
