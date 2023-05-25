<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowScheduleRequest extends Model
{
    /**
     * @description The start of the time range for scheduling.
     *
     * @example CronBeginDate_test
     *
     * @var string
     */
    public $cronBeginDate;

    /**
     * @description The end of the time range for scheduling.
     *
     * @example CronEndDate_test
     *
     * @var string
     */
    public $cronEndDate;

    /**
     * @description The cron expression for timed scheduling.
     *
     * @example CronStr_test
     *
     * @var string
     */
    public $cronStr;

    /**
     * @description The type of the scheduling cycle. Valid values:
     *
     *   **MINUTE**: scheduling by minute
     *   **HOUR**: scheduling by hour
     *   **DAY**: scheduling by day
     *   **WEEK**: scheduling by week
     *   **MONTH**: scheduling by month
     *
     * @example HOUR
     *
     * @var string
     */
    public $cronType;

    /**
     * @description The ID of the task flow.
     *
     * @example 7***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The event scheduling configuration. The value of this parameter is a JSON string.
     *
     * @example ScheduleParam_test
     *
     * @var string
     */
    public $scheduleParam;

    /**
     * @description Specifies whether to enable scheduling. Valid values:
     *
     *   **Enable**
     *   **Disable**
     *
     * @example Disable
     *
     * @var bool
     */
    public $scheduleSwitch;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](~~181330~~).
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The time zone. The default time zone is UTC+8 (Asia/Shanghai).
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZoneId;

    /**
     * @description The mode in which the task flow is triggered. Valid values:
     *
     *   **Cron**: The task flow is triggered based on timed scheduling.
     *   **Event**: The task flow is triggered by events.
     *
     * @example Event
     *
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'cronBeginDate'  => 'CronBeginDate',
        'cronEndDate'    => 'CronEndDate',
        'cronStr'        => 'CronStr',
        'cronType'       => 'CronType',
        'dagId'          => 'DagId',
        'scheduleParam'  => 'ScheduleParam',
        'scheduleSwitch' => 'ScheduleSwitch',
        'tid'            => 'Tid',
        'timeZoneId'     => 'TimeZoneId',
        'triggerType'    => 'TriggerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronBeginDate) {
            $res['CronBeginDate'] = $this->cronBeginDate;
        }
        if (null !== $this->cronEndDate) {
            $res['CronEndDate'] = $this->cronEndDate;
        }
        if (null !== $this->cronStr) {
            $res['CronStr'] = $this->cronStr;
        }
        if (null !== $this->cronType) {
            $res['CronType'] = $this->cronType;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->scheduleParam) {
            $res['ScheduleParam'] = $this->scheduleParam;
        }
        if (null !== $this->scheduleSwitch) {
            $res['ScheduleSwitch'] = $this->scheduleSwitch;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->timeZoneId) {
            $res['TimeZoneId'] = $this->timeZoneId;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronBeginDate'])) {
            $model->cronBeginDate = $map['CronBeginDate'];
        }
        if (isset($map['CronEndDate'])) {
            $model->cronEndDate = $map['CronEndDate'];
        }
        if (isset($map['CronStr'])) {
            $model->cronStr = $map['CronStr'];
        }
        if (isset($map['CronType'])) {
            $model->cronType = $map['CronType'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['ScheduleParam'])) {
            $model->scheduleParam = $map['ScheduleParam'];
        }
        if (isset($map['ScheduleSwitch'])) {
            $model->scheduleSwitch = $map['ScheduleSwitch'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['TimeZoneId'])) {
            $model->timeZoneId = $map['TimeZoneId'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
