<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowScheduleRequest extends Model
{
    /**
     * @example CronBeginDate_test
     *
     * @var string
     */
    public $cronBeginDate;

    /**
     * @example CronEndDate_test
     *
     * @var string
     */
    public $cronEndDate;

    /**
     * @example CronStr_test
     *
     * @var string
     */
    public $cronStr;

    /**
     * @example HOUR
     *
     * @var string
     */
    public $cronType;

    /**
     * @example 7***
     *
     * @var int
     */
    public $dagId;

    /**
     * @example ScheduleParam_test
     *
     * @var string
     */
    public $scheduleParam;

    /**
     * @var bool
     */
    public $scheduleSwitch;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZoneId;

    /**
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
