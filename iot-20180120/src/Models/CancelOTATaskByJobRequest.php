<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CancelOTATaskByJobRequest extends Model
{
    /**
     * @description Specifies whether to cancel the update tasks that are in the **IN_PROGRESS** state in an update batch. Default value: false. Valid values:
     *
     *   **true**: cancel the update tasks that are in the IN_PROGRESS state.
     *   **false**: do not cancel the update tasks that are in the IN_PROGRESS state.
     *
     * @example false
     *
     * @var bool
     */
    public $cancelInProgressTask;

    /**
     * @description Specifies whether to cancel the update tasks that are in the **NOTIFIED** state in an update batch. Default value: false. Valid values:
     *
     *   **true**: cancel the update tasks that are in the NOTIFIED state.
     *   **false**: do not cancel the update tasks that are in the NOTIFIED state.
     *
     * @example false
     *
     * @var bool
     */
    public $cancelNotifiedTask;

    /**
     * @description Specifies whether to cancel the update tasks that are in the **QUEUED** state in an update batch. Default value: false. Valid values:
     *
     *   **true**: cancel the update tasks that are in the NOTIFIED state.
     *   **false**: do not cancel the update tasks that are in the NOTIFIED state.
     *
     * > If you set this parameter to **true** and specify the **CancelUnconfirmedTask** parameter, only the update tasks that are in the QUEUED state are canceled. If you do not specify the **CancelUnconfirmedTask** parameter, the update tasks that are in the QUEUED or CONFIRM state are canceled.
     * @example false
     *
     * @var bool
     */
    public $cancelQueuedTask;

    /**
     * @description Specifies whether to cancel update tasks of a scheduled update batch. If you specify the **ScheduleTime** parameter when you call the [CreateOTAStaticUpgradeJob](~~147496~~) operation, a scheduled update batch is created. Default value: false. Valid values:
     *
     *   **true**: cancel update tasks of a scheduled update batch.
     *   **false**: do not cancel update tasks of a scheduled update batch.
     *
     * @example false
     *
     * @var bool
     */
    public $cancelScheduledTask;

    /**
     * @description Specifies whether to cancel the update tasks that are in the **CONFIRM** state in an update batch. Default value: false. Valid values:
     *
     *   **true**: cancel the update tasks that are in the CONFIRM state.
     *   **false**: do not cancel the update tasks that are in the CONFIRM state.
     *
     * This parameter is empty by default.
     *
     * > If you do not specify this parameter and set the **CancelQueuedTask** parameter to **true**, the update tasks that are in the CONFIRM state are canceled. If you set the **CancelQueuedTask** parameter to **false**, the update tasks that are in the CONFIRM state are not canceled.
     * @example false
     *
     * @var bool
     */
    public $cancelUnconfirmedTask;

    /**
     * @description The ID of the instance. You can obtain the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify this parameter. Otherwise, the call fails.
     * >*   If the **Overview** page or an instance ID is not displayed in the IoT Platform console, ignore this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the update batch.
     *
     * Use the value that is returned for the **JobId** parameter contained in the response of the [CreateOTAStaticUpgradeJob](~~147496~~) or [CreateOTADynamicUpgradeJob](~~147887~~) operation. You can also obtain the batch ID on the **Firmware Details** page of the IoT Platform console.
     * @example 7glPHmaDYLAYMD1HHutT02****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'cancelInProgressTask'  => 'CancelInProgressTask',
        'cancelNotifiedTask'    => 'CancelNotifiedTask',
        'cancelQueuedTask'      => 'CancelQueuedTask',
        'cancelScheduledTask'   => 'CancelScheduledTask',
        'cancelUnconfirmedTask' => 'CancelUnconfirmedTask',
        'iotInstanceId'         => 'IotInstanceId',
        'jobId'                 => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelInProgressTask) {
            $res['CancelInProgressTask'] = $this->cancelInProgressTask;
        }
        if (null !== $this->cancelNotifiedTask) {
            $res['CancelNotifiedTask'] = $this->cancelNotifiedTask;
        }
        if (null !== $this->cancelQueuedTask) {
            $res['CancelQueuedTask'] = $this->cancelQueuedTask;
        }
        if (null !== $this->cancelScheduledTask) {
            $res['CancelScheduledTask'] = $this->cancelScheduledTask;
        }
        if (null !== $this->cancelUnconfirmedTask) {
            $res['CancelUnconfirmedTask'] = $this->cancelUnconfirmedTask;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelOTATaskByJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CancelInProgressTask'])) {
            $model->cancelInProgressTask = $map['CancelInProgressTask'];
        }
        if (isset($map['CancelNotifiedTask'])) {
            $model->cancelNotifiedTask = $map['CancelNotifiedTask'];
        }
        if (isset($map['CancelQueuedTask'])) {
            $model->cancelQueuedTask = $map['CancelQueuedTask'];
        }
        if (isset($map['CancelScheduledTask'])) {
            $model->cancelScheduledTask = $map['CancelScheduledTask'];
        }
        if (isset($map['CancelUnconfirmedTask'])) {
            $model->cancelUnconfirmedTask = $map['CancelUnconfirmedTask'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
