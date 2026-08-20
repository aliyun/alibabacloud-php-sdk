<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInspectionSchedulesResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var string
     */
    public $inspectionItems;

    /**
     * @var string
     */
    public $inspectionWindow;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $nextFireTime;

    /**
     * @var string
     */
    public $notifyConfig;

    /**
     * @var string
     */
    public $reportLanguage;

    /**
     * @var string
     */
    public $scheduleId;

    /**
     * @var string
     */
    public $scheduleName;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'cronExpression' => 'CronExpression',
        'enabled' => 'Enabled',
        'inspectionItems' => 'InspectionItems',
        'inspectionWindow' => 'InspectionWindow',
        'instanceIds' => 'InstanceIds',
        'nextFireTime' => 'NextFireTime',
        'notifyConfig' => 'NotifyConfig',
        'reportLanguage' => 'ReportLanguage',
        'scheduleId' => 'ScheduleId',
        'scheduleName' => 'ScheduleName',
        'timezone' => 'Timezone',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->inspectionItems) {
            $res['InspectionItems'] = $this->inspectionItems;
        }

        if (null !== $this->inspectionWindow) {
            $res['InspectionWindow'] = $this->inspectionWindow;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->nextFireTime) {
            $res['NextFireTime'] = $this->nextFireTime;
        }

        if (null !== $this->notifyConfig) {
            $res['NotifyConfig'] = $this->notifyConfig;
        }

        if (null !== $this->reportLanguage) {
            $res['ReportLanguage'] = $this->reportLanguage;
        }

        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }

        if (null !== $this->scheduleName) {
            $res['ScheduleName'] = $this->scheduleName;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['InspectionItems'])) {
            $model->inspectionItems = $map['InspectionItems'];
        }

        if (isset($map['InspectionWindow'])) {
            $model->inspectionWindow = $map['InspectionWindow'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['NextFireTime'])) {
            $model->nextFireTime = $map['NextFireTime'];
        }

        if (isset($map['NotifyConfig'])) {
            $model->notifyConfig = $map['NotifyConfig'];
        }

        if (isset($map['ReportLanguage'])) {
            $model->reportLanguage = $map['ReportLanguage'];
        }

        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }

        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
