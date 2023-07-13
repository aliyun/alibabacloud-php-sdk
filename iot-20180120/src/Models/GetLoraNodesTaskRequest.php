<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetLoraNodesTaskRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * You can obtain the **ID** of the instance on the **Overview** page in the IoT Platform console. If your instance has an ID, you must specify this parameter. Otherwise, the request fails.
     *
     * > The ID of a public instance may not be displayed on the Overview page. For more information about how to obtain the instance ID, see [How do I obtain an instance ID?](~~267533~~)
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the task for creating the LoRaWAN devices. You can call the [CreateLoRaNodesTask](~~109299~~) operation and obtain the task ID from the value of the **TaskId** response parameter.
     *
     * @example 623***
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoraNodesTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
