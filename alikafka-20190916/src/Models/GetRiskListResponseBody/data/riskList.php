<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetRiskListResponseBody\data;

use AlibabaCloud\Dara\Model;

class riskList extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $gradeType;

    /**
     * @var bool
     */
    public $health;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastAlarmTime;

    /**
     * @var int
     */
    public $levelType;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string[]
     */
    public $relationList;

    /**
     * @var string
     */
    public $reportTips;

    /**
     * @var string
     */
    public $reportType;

    /**
     * @var string
     */
    public $reportValue;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'createTime' => 'CreateTime',
        'gradeType' => 'GradeType',
        'health' => 'Health',
        'instanceId' => 'InstanceId',
        'lastAlarmTime' => 'LastAlarmTime',
        'levelType' => 'LevelType',
        'modifiedTime' => 'ModifiedTime',
        'name' => 'Name',
        'owner' => 'Owner',
        'relationList' => 'RelationList',
        'reportTips' => 'ReportTips',
        'reportType' => 'ReportType',
        'reportValue' => 'ReportValue',
        'status' => 'Status',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->relationList)) {
            Model::validateArray($this->relationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->gradeType) {
            $res['GradeType'] = $this->gradeType;
        }

        if (null !== $this->health) {
            $res['Health'] = $this->health;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lastAlarmTime) {
            $res['LastAlarmTime'] = $this->lastAlarmTime;
        }

        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->relationList) {
            if (\is_array($this->relationList)) {
                $res['RelationList'] = [];
                $n1 = 0;
                foreach ($this->relationList as $item1) {
                    $res['RelationList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reportTips) {
            $res['ReportTips'] = $this->reportTips;
        }

        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        if (null !== $this->reportValue) {
            $res['ReportValue'] = $this->reportValue;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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

        if (isset($map['GradeType'])) {
            $model->gradeType = $map['GradeType'];
        }

        if (isset($map['Health'])) {
            $model->health = $map['Health'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LastAlarmTime'])) {
            $model->lastAlarmTime = $map['LastAlarmTime'];
        }

        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RelationList'])) {
            if (!empty($map['RelationList'])) {
                $model->relationList = [];
                $n1 = 0;
                foreach ($map['RelationList'] as $item1) {
                    $model->relationList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReportTips'])) {
            $model->reportTips = $map['ReportTips'];
        }

        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        if (isset($map['ReportValue'])) {
            $model->reportValue = $map['ReportValue'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
