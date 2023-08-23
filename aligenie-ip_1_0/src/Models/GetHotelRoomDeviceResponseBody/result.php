<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelRoomDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1.0.0-release
     *
     * @var string
     */
    public $firmwareVersion;

    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example aa:aa:aa:aa:aa:aa
     *
     * @var string
     */
    public $mac;

    /**
     * @example 1
     *
     * @var int
     */
    public $onlineStatus;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;

    /**
     * @example dsfdsfrgreg
     *
     * @var string
     */
    public $sn;
    protected $_name = [
        'firmwareVersion' => 'FirmwareVersion',
        'hotelId'         => 'HotelId',
        'mac'             => 'Mac',
        'onlineStatus'    => 'OnlineStatus',
        'roomNo'          => 'RoomNo',
        'sn'              => 'Sn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}
