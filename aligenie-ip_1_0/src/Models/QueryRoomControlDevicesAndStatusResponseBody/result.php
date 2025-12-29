<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesAndStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesAndStatusResponseBody\result\devices;

class result extends Model
{
    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'devices' => 'Devices',
        'location' => 'Location',
        'locationName' => 'LocationName',
        'roomNo' => 'RoomNo',
    ];

    public function validate()
    {
        if (\is_array($this->devices)) {
            Model::validateArray($this->devices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devices) {
            if (\is_array($this->devices)) {
                $res['Devices'] = [];
                $n1 = 0;
                foreach ($this->devices as $item1) {
                    $res['Devices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
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
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n1 = 0;
                foreach ($map['Devices'] as $item1) {
                    $model->devices[$n1] = devices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }

        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        return $model;
    }
}
