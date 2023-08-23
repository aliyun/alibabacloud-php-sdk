<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesRequest\locationDevices;
use AlibabaCloud\Tea\Model;

class ImportRoomControlDevicesRequest extends Model
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
     * @var locationDevices[]
     */
    public $locationDevices;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'enableInfraredDeviceImport' => 'EnableInfraredDeviceImport',
        'hotelId'                    => 'HotelId',
        'locationDevices'            => 'LocationDevices',
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
        if (null !== $this->locationDevices) {
            $res['LocationDevices'] = [];
            if (null !== $this->locationDevices && \is_array($this->locationDevices)) {
                $n = 0;
                foreach ($this->locationDevices as $item) {
                    $res['LocationDevices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportRoomControlDevicesRequest
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
            if (!empty($map['LocationDevices'])) {
                $model->locationDevices = [];
                $n                      = 0;
                foreach ($map['LocationDevices'] as $item) {
                    $model->locationDevices[$n++] = null !== $item ? locationDevices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        return $model;
    }
}
