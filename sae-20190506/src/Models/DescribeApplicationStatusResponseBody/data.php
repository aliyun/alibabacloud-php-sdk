<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 0099b7be-5f5b-4512-a7fc-56049ef1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description Indicates whether Application Real-Time Monitoring Service (ARMS) advanced monitoring is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var string
     */
    public $armsAdvancedEnabled;

    /**
     * @description The metadata of the application in ARMS.
     *
     * @example {"appId":"0099b7be-5f5b-4512-a7fc-56049ef1****","licenseKey":"d5cgdt5pu0@7303f55292a****"}
     *
     * @var string
     */
    public $armsApmInfo;

    /**
     * @description The time when the application was created.
     *
     * @example 1563373372746
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The current state of the application. Valid values:
     *
     *   **RUNNING**
     *   **STOPPED**
     *   **UNKNOWN**
     *
     * @example RUNNING
     *
     * @var string
     */
    public $currentStatus;

    /**
     * @description Indicates whether SAE agent is enabled.
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $enableAgent;

    /**
     * @description The file size limit. Unit: KB. Valid values: 0 to 10240.
     *
     * @example 10240
     *
     * @var int
     */
    public $fileSizeLimit;

    /**
     * @description The ID of the latest change order that is executed. If no change orders have been executed or if change orders have expired, an empty parameter is returned.
     *
     * @example 1ccc2339-fc19-49aa-bda0-1e7b8497****
     *
     * @var string
     */
    public $lastChangeOrderId;

    /**
     * @description Indicates whether the latest change order is being executed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $lastChangeOrderRunning;

    /**
     * @description The state of the latest change order. Valid values:
     *
     *   **READY**: The change order is ready.
     *   **RUNNING**: The change order is being executed.
     *   **SUCCESS**: The change order was executed successfully.
     *   **FAIL**: The change order failed to be executed.
     *   **ABORT**: The change order is stopped.
     *   **WAIT_BATCH_CONFIRM**: The change order is pending execution. You must manually confirm the release batch.
     *   **AUTO_BATCH_WAIT**: The change order is pending execution. SAE will automatically confirm the release batch.
     *   **SYSTEM_FAIL**: A system exception occurred.
     *   **WAIT_APPROVAL**: The change order is pending approval.
     *   **APPROVED**: The change order is approved and is pending execution.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $lastChangeOrderStatus;

    /**
     * @description The number of running instances of the application.
     *
     * @example 1
     *
     * @var int
     */
    public $runningInstances;

    /**
     * @description Indicates whether an error occurred while the change order was being executed. Valid values:
     *
     *   **NORMAL**
     *   **RUNNING_BUT_HAS_ERROR** If an error occurs during a batch release, you must manually perform a rollback. In this case, the change order is still running because the task is not completed, but the state of the change order is RUNNING_BUT_HAS_ERROR.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $subStatus;
    protected $_name = [
        'appId'                  => 'AppId',
        'armsAdvancedEnabled'    => 'ArmsAdvancedEnabled',
        'armsApmInfo'            => 'ArmsApmInfo',
        'createTime'             => 'CreateTime',
        'currentStatus'          => 'CurrentStatus',
        'enableAgent'            => 'EnableAgent',
        'fileSizeLimit'          => 'FileSizeLimit',
        'lastChangeOrderId'      => 'LastChangeOrderId',
        'lastChangeOrderRunning' => 'LastChangeOrderRunning',
        'lastChangeOrderStatus'  => 'LastChangeOrderStatus',
        'runningInstances'       => 'RunningInstances',
        'subStatus'              => 'SubStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->armsAdvancedEnabled) {
            $res['ArmsAdvancedEnabled'] = $this->armsAdvancedEnabled;
        }
        if (null !== $this->armsApmInfo) {
            $res['ArmsApmInfo'] = $this->armsApmInfo;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentStatus) {
            $res['CurrentStatus'] = $this->currentStatus;
        }
        if (null !== $this->enableAgent) {
            $res['EnableAgent'] = $this->enableAgent;
        }
        if (null !== $this->fileSizeLimit) {
            $res['FileSizeLimit'] = $this->fileSizeLimit;
        }
        if (null !== $this->lastChangeOrderId) {
            $res['LastChangeOrderId'] = $this->lastChangeOrderId;
        }
        if (null !== $this->lastChangeOrderRunning) {
            $res['LastChangeOrderRunning'] = $this->lastChangeOrderRunning;
        }
        if (null !== $this->lastChangeOrderStatus) {
            $res['LastChangeOrderStatus'] = $this->lastChangeOrderStatus;
        }
        if (null !== $this->runningInstances) {
            $res['RunningInstances'] = $this->runningInstances;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ArmsAdvancedEnabled'])) {
            $model->armsAdvancedEnabled = $map['ArmsAdvancedEnabled'];
        }
        if (isset($map['ArmsApmInfo'])) {
            $model->armsApmInfo = $map['ArmsApmInfo'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentStatus'])) {
            $model->currentStatus = $map['CurrentStatus'];
        }
        if (isset($map['EnableAgent'])) {
            $model->enableAgent = $map['EnableAgent'];
        }
        if (isset($map['FileSizeLimit'])) {
            $model->fileSizeLimit = $map['FileSizeLimit'];
        }
        if (isset($map['LastChangeOrderId'])) {
            $model->lastChangeOrderId = $map['LastChangeOrderId'];
        }
        if (isset($map['LastChangeOrderRunning'])) {
            $model->lastChangeOrderRunning = $map['LastChangeOrderRunning'];
        }
        if (isset($map['LastChangeOrderStatus'])) {
            $model->lastChangeOrderStatus = $map['LastChangeOrderStatus'];
        }
        if (isset($map['RunningInstances'])) {
            $model->runningInstances = $map['RunningInstances'];
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }

        return $model;
    }
}
