<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class CreateReportPushTaskRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $scheduleTime;

    /**
     * @var int
     */
    public $jobStatus;

    /**
     * @var string[]
     */
    public $reportType;

    /**
     * @var string[]
     */
    public $dbList;

    /**
     * @var string[]
     */
    public $emailList;
    protected $_name = [
        'regionId'     => 'RegionId',
        'instanceId'   => 'InstanceId',
        'scheduleType' => 'ScheduleType',
        'scheduleTime' => 'ScheduleTime',
        'jobStatus'    => 'JobStatus',
        'reportType'   => 'ReportType',
        'dbList'       => 'DbList',
        'emailList'    => 'EmailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->emailList) {
            $res['EmailList'] = $this->emailList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReportPushTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['ReportType'])) {
            if (!empty($map['ReportType'])) {
                $model->reportType = $map['ReportType'];
            }
        }
        if (isset($map['DbList'])) {
            if (!empty($map['DbList'])) {
                $model->dbList = $map['DbList'];
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
