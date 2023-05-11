<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ReupgradeOTATaskRequest extends Model
{
    /**
     * @description The ID of the instance. You can view the ID of an instance on the **Overview** page in the IoT Platform console.****
     *
     * >*   If the instance has an ID, you must specify the **IotInstanceId** parameter. If you do not specify this parameter, the call fails.
     * >*   If the instance does not have an **ID** or no **Overview** page is displayed for the instance, you do not need to specify this parameter.
     *
     * For more information, see [Instance overview](~~356505~~).
     * @example iot-v64***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the update batch.
     *
     * After you call the [CreateOTAStaticUpgradeJob](~~147496~~) or [CreateOTADynamicUpgradeJob](~~147887~~) operation to create an update batch, the **JobId** parameter is returned.
     *
     * You can also view the **batch ID** on the **Firmware Details** page in the IoT Platform console.
     * @example 7glPHmaDYLAYMD1HHutT02****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example y3tOmCDNgpR8F9jnVEzC01****
     *
     * @var string[]
     */
    public $taskId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'jobId'         => 'JobId',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReupgradeOTATaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['TaskId'])) {
            if (!empty($map['TaskId'])) {
                $model->taskId = $map['TaskId'];
            }
        }

        return $model;
    }
}
