<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class CreateInspectionScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

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
    public $instanceId;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $reportLanguage;

    /**
     * @var string
     */
    public $scheduleName;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'inspectionItems' => 'InspectionItems',
        'inspectionWindow' => 'InspectionWindow',
        'instanceId' => 'InstanceId',
        'instanceIds' => 'InstanceIds',
        'reportLanguage' => 'ReportLanguage',
        'scheduleName' => 'ScheduleName',
        'securityToken' => 'SecurityToken',
        'timezone' => 'Timezone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->inspectionItems) {
            $res['InspectionItems'] = $this->inspectionItems;
        }

        if (null !== $this->inspectionWindow) {
            $res['InspectionWindow'] = $this->inspectionWindow;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->reportLanguage) {
            $res['ReportLanguage'] = $this->reportLanguage;
        }

        if (null !== $this->scheduleName) {
            $res['ScheduleName'] = $this->scheduleName;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
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
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['InspectionItems'])) {
            $model->inspectionItems = $map['InspectionItems'];
        }

        if (isset($map['InspectionWindow'])) {
            $model->inspectionWindow = $map['InspectionWindow'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['ReportLanguage'])) {
            $model->reportLanguage = $map['ReportLanguage'];
        }

        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}
