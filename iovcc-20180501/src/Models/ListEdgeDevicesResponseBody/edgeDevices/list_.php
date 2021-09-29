<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListEdgeDevicesResponseBody\edgeDevices;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $edgeDeviceId;

    /**
     * @var int
     */
    public $edgeDeviceType;

    /**
     * @var string
     */
    public $edgeDeviceName;

    /**
     * @var int
     */
    public $onlineStatus;

    /**
     * @var int
     */
    public $activateTime;

    /**
     * @var int
     */
    public $lastOnlineTime;
    protected $_name = [
        'edgeDeviceId'   => 'EdgeDeviceId',
        'edgeDeviceType' => 'EdgeDeviceType',
        'edgeDeviceName' => 'EdgeDeviceName',
        'onlineStatus'   => 'OnlineStatus',
        'activateTime'   => 'ActivateTime',
        'lastOnlineTime' => 'LastOnlineTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edgeDeviceId) {
            $res['EdgeDeviceId'] = $this->edgeDeviceId;
        }
        if (null !== $this->edgeDeviceType) {
            $res['EdgeDeviceType'] = $this->edgeDeviceType;
        }
        if (null !== $this->edgeDeviceName) {
            $res['EdgeDeviceName'] = $this->edgeDeviceName;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->activateTime) {
            $res['ActivateTime'] = $this->activateTime;
        }
        if (null !== $this->lastOnlineTime) {
            $res['LastOnlineTime'] = $this->lastOnlineTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeDeviceId'])) {
            $model->edgeDeviceId = $map['EdgeDeviceId'];
        }
        if (isset($map['EdgeDeviceType'])) {
            $model->edgeDeviceType = $map['EdgeDeviceType'];
        }
        if (isset($map['EdgeDeviceName'])) {
            $model->edgeDeviceName = $map['EdgeDeviceName'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['ActivateTime'])) {
            $model->activateTime = $map['ActivateTime'];
        }
        if (isset($map['LastOnlineTime'])) {
            $model->lastOnlineTime = $map['LastOnlineTime'];
        }

        return $model;
    }
}
