<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetInspectionTaskResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetInspectionTaskResponseBody\inspectionTask\inspectionAlarmRules;
use AlibabaCloud\Tea\Model;

class inspectionTask extends Model
{
    /**
     * @example device output sample
     *
     * @var string
     */
    public $deviceDisplay;

    /**
     * @example device-ak0rnxtulk******
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example AGENT_LOGIN_FAIL
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 2020-12-23 03:18:22
     *
     * @var string
     */
    public $executionBeginTime;

    /**
     * @example 2020-12-23 03:18:22
     *
     * @var string
     */
    public $executionEndTime;

    /**
     * @example ASW-S-3F1-1.CD1
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $IP;

    /**
     * @var inspectionAlarmRules[]
     */
    public $inspectionAlarmRules;

    /**
     * @example {}
     *
     * @var string
     */
    public $inspectionResult;

    /**
     * @example INSPECTION_ITEM-sjds-23
     *
     * @var string
     */
    public $itemId;

    /**
     * @example config_backup
     *
     * @var string
     */
    public $itemName;

    /**
     * @example F101
     *
     * @var string[]
     */
    public $model;

    /**
     * @example INSPECTION_TEMPLATE-sdsld
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example XX门店
     *
     * @var string
     */
    public $space;

    /**
     * @example TASK-skd-32-sd
     *
     * @var string
     */
    public $taskId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example Alibaba
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'deviceDisplay'        => 'DeviceDisplay',
        'deviceId'             => 'DeviceId',
        'errorCode'            => 'ErrorCode',
        'executionBeginTime'   => 'ExecutionBeginTime',
        'executionEndTime'     => 'ExecutionEndTime',
        'hostName'             => 'HostName',
        'IP'                   => 'IP',
        'inspectionAlarmRules' => 'InspectionAlarmRules',
        'inspectionResult'     => 'InspectionResult',
        'itemId'               => 'ItemId',
        'itemName'             => 'ItemName',
        'model'                => 'Model',
        'scriptId'             => 'ScriptId',
        'space'                => 'Space',
        'taskId'               => 'TaskId',
        'taskStatus'           => 'TaskStatus',
        'vendor'               => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceDisplay) {
            $res['DeviceDisplay'] = $this->deviceDisplay;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->executionBeginTime) {
            $res['ExecutionBeginTime'] = $this->executionBeginTime;
        }
        if (null !== $this->executionEndTime) {
            $res['ExecutionEndTime'] = $this->executionEndTime;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->inspectionAlarmRules) {
            $res['InspectionAlarmRules'] = [];
            if (null !== $this->inspectionAlarmRules && \is_array($this->inspectionAlarmRules)) {
                $n = 0;
                foreach ($this->inspectionAlarmRules as $item) {
                    $res['InspectionAlarmRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inspectionResult) {
            $res['InspectionResult'] = $this->inspectionResult;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->space) {
            $res['Space'] = $this->space;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inspectionTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceDisplay'])) {
            $model->deviceDisplay = $map['DeviceDisplay'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ExecutionBeginTime'])) {
            $model->executionBeginTime = $map['ExecutionBeginTime'];
        }
        if (isset($map['ExecutionEndTime'])) {
            $model->executionEndTime = $map['ExecutionEndTime'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InspectionAlarmRules'])) {
            if (!empty($map['InspectionAlarmRules'])) {
                $model->inspectionAlarmRules = [];
                $n                           = 0;
                foreach ($map['InspectionAlarmRules'] as $item) {
                    $model->inspectionAlarmRules[$n++] = null !== $item ? inspectionAlarmRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InspectionResult'])) {
            $model->inspectionResult = $map['InspectionResult'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Model'])) {
            if (!empty($map['Model'])) {
                $model->model = $map['Model'];
            }
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['Space'])) {
            $model->space = $map['Space'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
