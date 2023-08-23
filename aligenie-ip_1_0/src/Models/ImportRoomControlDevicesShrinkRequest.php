<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ImportRoomControlDevicesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $enableInfraredDeviceImport;

    /**
     * @example vdgrefds
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $locationDevicesShrink;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'enableInfraredDeviceImport' => 'EnableInfraredDeviceImport',
        'hotelId'                    => 'HotelId',
        'locationDevicesShrink'      => 'LocationDevices',
        'roomNo'                     => 'RoomNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableInfraredDeviceImport) {
            $res['EnableInfraredDeviceImport'] = $this->enableInfraredDeviceImport;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->locationDevicesShrink) {
            $res['LocationDevices'] = $this->locationDevicesShrink;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportRoomControlDevicesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableInfraredDeviceImport'])) {
            $model->enableInfraredDeviceImport = $map['EnableInfraredDeviceImport'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['LocationDevices'])) {
            $model->locationDevicesShrink = $map['LocationDevices'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        return $model;
    }
}
