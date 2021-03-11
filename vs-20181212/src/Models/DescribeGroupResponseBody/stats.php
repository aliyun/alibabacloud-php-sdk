<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupResponseBody;

use AlibabaCloud\Tea\Model;

class stats extends Model
{
    /**
     * @var int
     */
    public $platformNum;

    /**
     * @var int
     */
    public $deviceNum;

    /**
     * @var int
     */
    public $ipcNum;

    /**
     * @var int
     */
    public $iedNum;
    protected $_name = [
        'platformNum' => 'PlatformNum',
        'deviceNum'   => 'DeviceNum',
        'ipcNum'      => 'IpcNum',
        'iedNum'      => 'IedNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platformNum) {
            $res['PlatformNum'] = $this->platformNum;
        }
        if (null !== $this->deviceNum) {
            $res['DeviceNum'] = $this->deviceNum;
        }
        if (null !== $this->ipcNum) {
            $res['IpcNum'] = $this->ipcNum;
        }
        if (null !== $this->iedNum) {
            $res['IedNum'] = $this->iedNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlatformNum'])) {
            $model->platformNum = $map['PlatformNum'];
        }
        if (isset($map['DeviceNum'])) {
            $model->deviceNum = $map['DeviceNum'];
        }
        if (isset($map['IpcNum'])) {
            $model->ipcNum = $map['IpcNum'];
        }
        if (isset($map['IedNum'])) {
            $model->iedNum = $map['IedNum'];
        }

        return $model;
    }
}
