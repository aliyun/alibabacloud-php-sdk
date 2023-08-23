<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesRequest;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomControlDevicesRequest\locationDevices\devices;
use AlibabaCloud\Tea\Model;

class locationDevices extends Model
{
    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @example room
     *
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $locationName;
    protected $_name = [
        'devices'      => 'Devices',
        'location'     => 'Location',
        'locationName' => 'LocationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devices) {
            $res['Devices'] = [];
            if (null !== $this->devices && \is_array($this->devices)) {
                $n = 0;
                foreach ($this->devices as $item) {
                    $res['Devices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return locationDevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n              = 0;
                foreach ($map['Devices'] as $item) {
                    $model->devices[$n++] = null !== $item ? devices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }

        return $model;
    }
}
