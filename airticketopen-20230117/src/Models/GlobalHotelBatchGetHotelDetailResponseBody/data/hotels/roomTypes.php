<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailResponseBody\data\hotels;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailResponseBody\data\hotels\roomTypes\bedType;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailResponseBody\data\hotels\roomTypes\pictures;

class roomTypes extends Model
{
    /**
     * @var bedType[]
     */
    public $bedType;

    /**
     * @var pictures[]
     */
    public $pictures;

    /**
     * @var string
     */
    public $roomName;

    /**
     * @var string
     */
    public $roomNameCn;

    /**
     * @var string
     */
    public $roomSize;

    /**
     * @var string
     */
    public $roomSizeUnit;

    /**
     * @var string
     */
    public $standardRoomId;

    /**
     * @var string
     */
    public $windowType;

    /**
     * @var string
     */
    public $windowTypeDefect;
    protected $_name = [
        'bedType' => 'BedType',
        'pictures' => 'Pictures',
        'roomName' => 'RoomName',
        'roomNameCn' => 'RoomNameCn',
        'roomSize' => 'RoomSize',
        'roomSizeUnit' => 'RoomSizeUnit',
        'standardRoomId' => 'StandardRoomId',
        'windowType' => 'WindowType',
        'windowTypeDefect' => 'WindowTypeDefect',
    ];

    public function validate()
    {
        if (\is_array($this->bedType)) {
            Model::validateArray($this->bedType);
        }
        if (\is_array($this->pictures)) {
            Model::validateArray($this->pictures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bedType) {
            if (\is_array($this->bedType)) {
                $res['BedType'] = [];
                $n1 = 0;
                foreach ($this->bedType as $item1) {
                    $res['BedType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pictures) {
            if (\is_array($this->pictures)) {
                $res['Pictures'] = [];
                $n1 = 0;
                foreach ($this->pictures as $item1) {
                    $res['Pictures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roomName) {
            $res['RoomName'] = $this->roomName;
        }

        if (null !== $this->roomNameCn) {
            $res['RoomNameCn'] = $this->roomNameCn;
        }

        if (null !== $this->roomSize) {
            $res['RoomSize'] = $this->roomSize;
        }

        if (null !== $this->roomSizeUnit) {
            $res['RoomSizeUnit'] = $this->roomSizeUnit;
        }

        if (null !== $this->standardRoomId) {
            $res['StandardRoomId'] = $this->standardRoomId;
        }

        if (null !== $this->windowType) {
            $res['WindowType'] = $this->windowType;
        }

        if (null !== $this->windowTypeDefect) {
            $res['WindowTypeDefect'] = $this->windowTypeDefect;
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
        if (isset($map['BedType'])) {
            if (!empty($map['BedType'])) {
                $model->bedType = [];
                $n1 = 0;
                foreach ($map['BedType'] as $item1) {
                    $model->bedType[$n1] = bedType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Pictures'])) {
            if (!empty($map['Pictures'])) {
                $model->pictures = [];
                $n1 = 0;
                foreach ($map['Pictures'] as $item1) {
                    $model->pictures[$n1] = pictures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RoomName'])) {
            $model->roomName = $map['RoomName'];
        }

        if (isset($map['RoomNameCn'])) {
            $model->roomNameCn = $map['RoomNameCn'];
        }

        if (isset($map['RoomSize'])) {
            $model->roomSize = $map['RoomSize'];
        }

        if (isset($map['RoomSizeUnit'])) {
            $model->roomSizeUnit = $map['RoomSizeUnit'];
        }

        if (isset($map['StandardRoomId'])) {
            $model->standardRoomId = $map['StandardRoomId'];
        }

        if (isset($map['WindowType'])) {
            $model->windowType = $map['WindowType'];
        }

        if (isset($map['WindowTypeDefect'])) {
            $model->windowTypeDefect = $map['WindowTypeDefect'];
        }

        return $model;
    }
}
