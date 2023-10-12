<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetInspectionTaskRequest extends Model
{
    /**
     * @example device-ak0rnxtulk******
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example config_backup
     *
     * @var string
     */
    public $itemName;

    /**
     * @example Task-sdaldsd-3r-4234
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'deviceId'   => 'DeviceId',
        'instanceId' => 'InstanceId',
        'itemName'   => 'ItemName',
        'taskId'     => 'TaskId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInspectionTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
