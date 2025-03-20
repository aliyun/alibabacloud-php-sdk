<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupResponseBody;

use AlibabaCloud\Tea\Model;

class stats extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $deviceNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $iedNum;

    /**
     * @example 100
     *
     * @var int
     */
    public $ipcNum;

    /**
     * @example 100
     *
     * @var int
     */
    public $platformNum;
    protected $_name = [
        'deviceNum' => 'DeviceNum',
        'iedNum' => 'IedNum',
        'ipcNum' => 'IpcNum',
        'platformNum' => 'PlatformNum',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return stats
     */
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
