<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListOTATaskByJobRequest extends Model
{
    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * > The product of the value of the **CurrentPage** parameter and the value of the **PageSize** parameter must be less than or equal to 100,000.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example device1
     *
     * @var string[]
     */
    public $deviceNames;

    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * >*   If no **Overview** page or ID is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the update batch. This ID uniquely identifies the update batch. You can obtain the ID from the value of the **JobId** parameter that is returned after you call the [CreateOTAVerifyJob](~~147480~~), [CreateOTAStaticUpgradeJob](~~147496~~), or [CreateOTADynamicUpgradeJob](~~147887~~) operation. You can also view the batch ID on the **Firmware Details** page of the IoT Platform console.
     *
     * @example 7glPHmaDYLAYMD1HHutT02****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     *
     *
     * > The product of the value of the **CurrentPage** parameter and the value of the **PageSize** parameter must be less than or equal to 100,000.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description If you specify a value for this parameter, only the update tasks that are in the specified state are queried. Valid values:
     *
     *   **CONFIRM**: The update task is pending confirmation.
     *   **QUEUED**: The update notification is to be pushed.
     *   **NOTIFIED**: The update notification is pushed to the device.
     *   **IN_PROGRESS**: The update task is in progress.
     *   **SUCCEEDED**: The update is successful.
     *   **FAILED**: The update failed.
     *   **CANCELED**: The update batch is canceled.
     *
     * If you do not specify a value for this parameter, all update tasks of the specified batch are queried.
     * @example FAILED
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'deviceNames'   => 'DeviceNames',
        'iotInstanceId' => 'IotInstanceId',
        'jobId'         => 'JobId',
        'pageSize'      => 'PageSize',
        'taskStatus'    => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->deviceNames) {
            $res['DeviceNames'] = $this->deviceNames;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOTATaskByJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DeviceNames'])) {
            if (!empty($map['DeviceNames'])) {
                $model->deviceNames = $map['DeviceNames'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
