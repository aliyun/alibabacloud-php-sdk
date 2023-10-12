<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class resourceDevice extends Model
{
    /**
     * @example 杭州
     *
     * @var string
     */
    public $city;

    /**
     * @example 网络设备
     *
     * @var string
     */
    public $deviceForm;

    /**
     * @example CSW-HZ3.YT
     *
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $physicalSpace;
    protected $_name = [
        'city'          => 'City',
        'deviceForm'    => 'DeviceForm',
        'hostName'      => 'HostName',
        'physicalSpace' => 'PhysicalSpace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->deviceForm) {
            $res['DeviceForm'] = $this->deviceForm;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->physicalSpace) {
            $res['PhysicalSpace'] = $this->physicalSpace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['DeviceForm'])) {
            $model->deviceForm = $map['DeviceForm'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['PhysicalSpace'])) {
            $model->physicalSpace = $map['PhysicalSpace'];
        }

        return $model;
    }
}
