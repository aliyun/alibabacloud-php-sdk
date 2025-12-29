<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class ImportRoomControlDevicesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $enableInfraredDeviceImport;

    /**
     * @var string
     */
    public $enableMeshDeviceImport;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $locationDevicesShrink;

    /**
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'enableInfraredDeviceImport' => 'EnableInfraredDeviceImport',
        'enableMeshDeviceImport' => 'EnableMeshDeviceImport',
        'hotelId' => 'HotelId',
        'locationDevicesShrink' => 'LocationDevices',
        'roomNo' => 'RoomNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableInfraredDeviceImport) {
            $res['EnableInfraredDeviceImport'] = $this->enableInfraredDeviceImport;
        }

        if (null !== $this->enableMeshDeviceImport) {
            $res['EnableMeshDeviceImport'] = $this->enableMeshDeviceImport;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableInfraredDeviceImport'])) {
            $model->enableInfraredDeviceImport = $map['EnableInfraredDeviceImport'];
        }

        if (isset($map['EnableMeshDeviceImport'])) {
            $model->enableMeshDeviceImport = $map['EnableMeshDeviceImport'];
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
