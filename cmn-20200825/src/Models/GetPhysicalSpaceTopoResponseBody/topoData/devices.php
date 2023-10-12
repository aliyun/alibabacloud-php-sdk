<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceTopoResponseBody\topoData;

use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @example device-9i8867jzljw12345
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example ASW
     *
     * @var string
     */
    public $deviceRole;

    /**
     * @example TEST-xxxx3
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 127.0.xxx.xxx
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'deviceId'   => 'DeviceId',
        'deviceRole' => 'DeviceRole',
        'hostName'   => 'HostName',
        'ip'         => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceRole) {
            $res['DeviceRole'] = $this->deviceRole;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceRole'])) {
            $model->deviceRole = $map['DeviceRole'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
