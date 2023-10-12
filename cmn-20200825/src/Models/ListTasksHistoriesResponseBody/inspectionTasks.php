<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListTasksHistoriesResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListTasksHistoriesResponseBody\inspectionTasks\inspectionAlarmRules;
use AlibabaCloud\Tea\Model;

class inspectionTasks extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $deviceDisplay;

    /**
     * @example OK
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 2020-10-22 02:00:02
     *
     * @var string
     */
    public $executionBeginTime;

    /**
     * @example 2020-10-22 02:00:02
     *
     * @var string
     */
    public $executionEndTime;

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
     * @example TASK-wews-nosa
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'deviceDisplay'        => 'DeviceDisplay',
        'errorCode'            => 'ErrorCode',
        'executionBeginTime'   => 'ExecutionBeginTime',
        'executionEndTime'     => 'ExecutionEndTime',
        'inspectionAlarmRules' => 'InspectionAlarmRules',
        'inspectionResult'     => 'InspectionResult',
        'taskId'               => 'TaskId',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->executionBeginTime) {
            $res['ExecutionBeginTime'] = $this->executionBeginTime;
        }
        if (null !== $this->executionEndTime) {
            $res['ExecutionEndTime'] = $this->executionEndTime;
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['DeviceDisplay'])) {
            $model->deviceDisplay = $map['DeviceDisplay'];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
