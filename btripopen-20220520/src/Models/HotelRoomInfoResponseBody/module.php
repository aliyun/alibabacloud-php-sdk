<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoResponseBody\module\bedInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoResponseBody\module\roomImages;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var bedInfos[]
     */
    public $bedInfos;

    /**
     * @example 1
     *
     * @var int
     */
    public $extraBed;

    /**
     * @example demo
     *
     * @var string
     */
    public $extraBedDesc;

    /**
     * @example 2
     *
     * @var string
     */
    public $floor;

    /**
     * @example 0
     *
     * @var string
     */
    public $internetWay;

    /**
     * @example 3
     *
     * @var int
     */
    public $maxOccupancy;

    /**
     * @var string
     */
    public $roomDesc;

    /**
     * @var string
     */
    public $roomFacilities;

    /**
     * @var string[]
     */
    public $roomFacilityList;

    /**
     * @example 84536009
     *
     * @var string
     */
    public $roomId;

    /**
     * @example //img.alicdn.com/imgextra/i2/6000000007493/O1CN010Vmxaz25DqUblX82A_!!6000000007493-2-hotel.png
     *
     * @var string
     */
    public $roomImage;

    /**
     * @var roomImages[]
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
     * @example 3
     *
     * @var int
     */
    public $rooms;

    /**
     * @example 2
     *
     * @var string
     */
    public $window;

    /**
     * @example 0
     *
     * @var string
     */
    public $windowBad;

    /**
     * @example demo
     *
     * @var string
     */
    public $windowView;
    protected $_name = [
        'bedInfos'         => 'bed_infos',
        'extraBed'         => 'extra_bed',
        'extraBedDesc'     => 'extra_bed_desc',
        'floor'            => 'floor',
        'internetWay'      => 'internet_way',
        'maxOccupancy'     => 'max_occupancy',
        'roomDesc'         => 'room_desc',
        'roomFacilities'   => 'room_facilities',
        'roomFacilityList' => 'room_facility_list',
        'roomId'           => 'room_id',
        'roomImage'        => 'room_image',
        'roomImages'       => 'room_images',
        'roomName'         => 'room_name',
        'roomType'         => 'room_type',
        'roomarea'         => 'roomarea',
        'rooms'            => 'rooms',
        'window'           => 'window',
        'windowBad'        => 'window_bad',
        'windowView'       => 'window_view',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bedInfos) {
            $res['bed_infos'] = [];
            if (null !== $this->bedInfos && \is_array($this->bedInfos)) {
                $n = 0;
                foreach ($this->bedInfos as $item) {
                    $res['bed_infos'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->roomDesc) {
            $res['room_desc'] = $this->roomDesc;
        }
        if (null !== $this->roomFacilities) {
            $res['room_facilities'] = $this->roomFacilities;
        }
        if (null !== $this->roomFacilityList) {
            $res['room_facility_list'] = $this->roomFacilityList;
        }
        if (null !== $this->roomId) {
            $res['room_id'] = $this->roomId;
        }
        if (null !== $this->roomImage) {
            $res['room_image'] = $this->roomImage;
        }
        if (null !== $this->roomImages) {
            $res['room_images'] = [];
            if (null !== $this->roomImages && \is_array($this->roomImages)) {
                $n = 0;
                foreach ($this->roomImages as $item) {
                    $res['room_images'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bed_infos'])) {
            if (!empty($map['bed_infos'])) {
                $model->bedInfos = [];
                $n               = 0;
                foreach ($map['bed_infos'] as $item) {
                    $model->bedInfos[$n++] = null !== $item ? bedInfos::fromMap($item) : $item;
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
        if (isset($map['room_desc'])) {
            $model->roomDesc = $map['room_desc'];
        }
        if (isset($map['room_facilities'])) {
            $model->roomFacilities = $map['room_facilities'];
        }
        if (isset($map['room_facility_list'])) {
            if (!empty($map['room_facility_list'])) {
                $model->roomFacilityList = $map['room_facility_list'];
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
                $n                 = 0;
                foreach ($map['room_images'] as $item) {
                    $model->roomImages[$n++] = null !== $item ? roomImages::fromMap($item) : $item;
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
