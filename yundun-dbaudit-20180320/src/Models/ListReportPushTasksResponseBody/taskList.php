<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListReportPushTasksResponseBody;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var string
     */
    public $scheduleTime;

    /**
     * @var int
     */
    public $jobStatus;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string[]
     */
    public $dbList;

    /**
     * @var string[]
     */
    public $reportType;

    /**
     * @var string[]
     */
    public $emailList;
    protected $_name = [
        'scheduleTime' => 'ScheduleTime',
        'jobStatus'    => 'JobStatus',
        'jobId'        => 'JobId',
        'scheduleType' => 'ScheduleType',
        'dbList'       => 'DbList',
        'reportType'   => 'ReportType',
        'emailList'    => 'EmailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }
        if (null !== $this->emailList) {
            $res['EmailList'] = $this->emailList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }
        if (isset($map['DbList'])) {
            if (!empty($map['DbList'])) {
                $model->dbList = $map['DbList'];
            }
        }
        if (isset($map['ReportType'])) {
            if (!empty($map['ReportType'])) {
                $model->reportType = $map['ReportType'];
            }
        }
        if (isset($map['EmailList'])) {
            if (!empty($map['EmailList'])) {
                $model->emailList = $map['EmailList'];
            }
        }

        return $model;
    }
}
