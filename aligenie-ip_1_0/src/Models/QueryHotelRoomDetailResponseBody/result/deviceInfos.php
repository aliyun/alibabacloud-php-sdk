<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class deviceInfos extends Model
{
    /**
     * @example 2023-01-01 12:00:00
     *
     * @var string
     */
    public $activeTime;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @example 6.1.8-RS-20230425.1806
     *
     * @var string
     */
    public $firmwareVersion;

    /**
     * @example fa:03:23:58:c3:00
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
     * @example sag42dlz4qf
     *
     * @var string
     */
    public $sn;

    /**
     * @example 41c95c18a0a643bcb58edf438877def5
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'activeTime'      => 'ActiveTime',
        'deviceName'      => 'DeviceName',
        'firmwareVersion' => 'FirmwareVersion',
        'mac'             => 'Mac',
        'onlineStatus'    => 'OnlineStatus',
        'sn'              => 'Sn',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
