<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupsResponseBody\groups;

use AlibabaCloud\Dara\Model;

class stats extends Model
{
    /**
     * @var int
     */
    public $deviceNum;

    /**
     * @var int
     */
    public $iedNum;

    /**
     * @var int
     */
    public $ipcNum;

    /**
     * @var int
     */
    public $platformNum;
    protected $_name = [
        'deviceNum' => 'DeviceNum',
        'iedNum' => 'IedNum',
        'ipcNum' => 'IpcNum',
        'platformNum' => 'PlatformNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceNum) {
            $res['DeviceNum'] = $this->deviceNum;
        }

        if (null !== $this->iedNum) {
            $res['IedNum'] = $this->iedNum;
        }

        if (null !== $this->ipcNum) {
            $res['IpcNum'] = $this->ipcNum;
        }

        if (null !== $this->platformNum) {
            $res['PlatformNum'] = $this->platformNum;
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
        if (isset($map['DeviceNum'])) {
            $model->deviceNum = $map['DeviceNum'];
        }

        if (isset($map['IedNum'])) {
            $model->iedNum = $map['IedNum'];
        }

        if (isset($map['IpcNum'])) {
            $model->ipcNum = $map['IpcNum'];
        }

        if (isset($map['PlatformNum'])) {
            $model->platformNum = $map['PlatformNum'];
        }

        return $model;
    }
}
