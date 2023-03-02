<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example 876055554040****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 183329761572****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example 1606379090866
     *
     * @var int
     */
    public $lastSaveTime;

    /**
     * @example AUTHORIZED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'deviceId'     => 'DeviceId',
        'iotId'        => 'IotId',
        'lastSaveTime' => 'LastSaveTime',
        'status'       => 'Status',
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
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->lastSaveTime) {
            $res['LastSaveTime'] = $this->lastSaveTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['LastSaveTime'])) {
            $model->lastSaveTime = $map['LastSaveTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
