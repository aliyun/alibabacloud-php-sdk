<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeResponseBody\nodeInfo\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeResponseBody\nodeInfo\modifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeResponseBody\nodeInfo\owner;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeResponseBody\nodeInfo\projectInfo;

class nodeInfo extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceSchema;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var modifier
     */
    public $modifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operatorType;

    /**
     * @var string[]
     */
    public $outputNameList;

    /**
     * @var owner
     */
    public $owner;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var projectInfo
     */
    public $projectInfo;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $triggerConfig;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'cronExpression' => 'CronExpression',
        'dataSourceId' => 'DataSourceId',
        'dataSourceSchema' => 'DataSourceSchema',
        'description' => 'Description',
        'from' => 'From',
        'id' => 'Id',
        'lastModifiedTime' => 'LastModifiedTime',
        'modifier' => 'Modifier',
        'name' => 'Name',
        'operatorType' => 'OperatorType',
        'outputNameList' => 'OutputNameList',
        'owner' => 'Owner',
        'priority' => 'Priority',
        'projectInfo' => 'ProjectInfo',
        'scheduleType' => 'ScheduleType',
        'status' => 'Status',
        'triggerConfig' => 'TriggerConfig',
    ];

    public function validate()
    {
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->modifier) {
            $this->modifier->validate();
        }
        if (\is_array($this->outputNameList)) {
            Model::validateArray($this->outputNameList);
        }
        if (null !== $this->owner) {
            $this->owner->validate();
        }
        if (null !== $this->projectInfo) {
            $this->projectInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceSchema) {
            $res['DataSourceSchema'] = $this->dataSourceSchema;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toArray($noStream) : $this->modifier;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        if (null !== $this->outputNameList) {
            if (\is_array($this->outputNameList)) {
                $res['OutputNameList'] = [];
                $n1 = 0;
                foreach ($this->outputNameList as $item1) {
                    $res['OutputNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toArray($noStream) : $this->owner;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->projectInfo) {
            $res['ProjectInfo'] = null !== $this->projectInfo ? $this->projectInfo->toArray($noStream) : $this->projectInfo;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->triggerConfig) {
            $res['TriggerConfig'] = $this->triggerConfig;
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

        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceSchema'])) {
            $model->dataSourceSchema = $map['DataSourceSchema'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = modifier::fromMap($map['Modifier']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        if (isset($map['OutputNameList'])) {
            if (!empty($map['OutputNameList'])) {
                $model->outputNameList = [];
                $n1 = 0;
                foreach ($map['OutputNameList'] as $item1) {
                    $model->outputNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Owner'])) {
            $model->owner = owner::fromMap($map['Owner']);
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ProjectInfo'])) {
            $model->projectInfo = projectInfo::fromMap($map['ProjectInfo']);
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TriggerConfig'])) {
            $model->triggerConfig = $map['TriggerConfig'];
        }

        return $model;
    }
}
