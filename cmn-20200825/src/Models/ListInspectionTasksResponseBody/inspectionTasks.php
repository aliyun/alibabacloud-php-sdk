<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTasksResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTasksResponseBody\inspectionTasks\inspectionAlarmRules;
use AlibabaCloud\Tea\Model;

class inspectionTasks extends Model
{
    /**
     * @example WARNING
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example DEVICEsljwo234
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example NETWORK
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example AGENT_LOGIN_FAIL
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 2020-12-23 10:01:05
     *
     * @var string
     */
    public $executionBeginTime;

    /**
     * @example 2020-12-23 10:01:05
     *
     * @var string
     */
    public $executionEndTime;

    /**
     * @example 30.20.128.2
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 30.20.128.2
     *
     * @var string
     */
    public $IP;

    /**
     * @var inspectionAlarmRules[]
     */
    public $inspectionAlarmRules;

    /**
     * @example error: Telnet Login failed
     *
     * @var string
     */
    public $inspectionMessage;

    /**
     * @example {}
     *
     * @var string
     */
    public $inspectionResult;

    /**
     * @example true
     *
     * @var bool
     */
    public $isInspectionResultTruncation;

    /**
     * @example ITEMsjie22342
     *
     * @var string
     */
    public $itemId;

    /**
     * @example get_status
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
     * @example ASW
     *
     * @var string
     */
    public $role;

    /**
     * @example TEMPLATEsdjlsa2334-2343-23
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 武汉光谷国际店
     *
     * @var string
     */
    public $space;

    /**
     * @example TASK-swe-23-sds
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
        'alarmStatus'                  => 'AlarmStatus',
        'deviceId'                     => 'DeviceId',
        'deviceType'                   => 'DeviceType',
        'errorCode'                    => 'ErrorCode',
        'executionBeginTime'           => 'ExecutionBeginTime',
        'executionEndTime'             => 'ExecutionEndTime',
        'hostName'                     => 'HostName',
        'IP'                           => 'IP',
        'inspectionAlarmRules'         => 'InspectionAlarmRules',
        'inspectionMessage'            => 'InspectionMessage',
        'inspectionResult'             => 'InspectionResult',
        'isInspectionResultTruncation' => 'IsInspectionResultTruncation',
        'itemId'                       => 'ItemId',
        'itemName'                     => 'ItemName',
        'model'                        => 'Model',
        'role'                         => 'Role',
        'scriptId'                     => 'ScriptId',
        'space'                        => 'Space',
        'taskId'                       => 'TaskId',
        'taskStatus'                   => 'TaskStatus',
        'vendor'                       => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
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
        if (null !== $this->inspectionMessage) {
            $res['InspectionMessage'] = $this->inspectionMessage;
        }
        if (null !== $this->inspectionResult) {
            $res['InspectionResult'] = $this->inspectionResult;
        }
        if (null !== $this->isInspectionResultTruncation) {
            $res['IsInspectionResultTruncation'] = $this->isInspectionResultTruncation;
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
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
     * @return inspectionTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
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
        if (isset($map['InspectionMessage'])) {
            $model->inspectionMessage = $map['InspectionMessage'];
        }
        if (isset($map['InspectionResult'])) {
            $model->inspectionResult = $map['InspectionResult'];
        }
        if (isset($map['IsInspectionResultTruncation'])) {
            $model->isInspectionResultTruncation = $map['IsInspectionResultTruncation'];
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
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
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
