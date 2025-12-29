<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesRequest\locationDevices;

class ImportRoomControlDevicesRequest extends Model
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
     * @var locationDevices[]
     */
    public $locationDevices;

    /**
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'enableInfraredDeviceImport' => 'EnableInfraredDeviceImport',
        'enableMeshDeviceImport' => 'EnableMeshDeviceImport',
        'hotelId' => 'HotelId',
        'locationDevices' => 'LocationDevices',
        'roomNo' => 'RoomNo',
    ];

    public function validate()
    {
        if (\is_array($this->locationDevices)) {
            Model::validateArray($this->locationDevices);
        }
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

        if (null !== $this->locationDevices) {
            if (\is_array($this->locationDevices)) {
                $res['LocationDevices'] = [];
                $n1 = 0;
                foreach ($this->locationDevices as $item1) {
                    $res['LocationDevices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['LocationDevices'])) {
                $model->locationDevices = [];
                $n1 = 0;
                foreach ($map['LocationDevices'] as $item1) {
                    $model->locationDevices[$n1] = locationDevices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        return $model;
    }
}
