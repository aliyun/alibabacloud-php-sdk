<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody\nodeInfo\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody\nodeInfo\modifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody\nodeInfo\owner;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody\nodeInfo\projectInfo;

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
        'description' => 'Description',
        'from' => 'From',
        'id' => 'Id',
        'lastModifiedTime' => 'LastModifiedTime',
        'modifier' => 'Modifier',
        'name' => 'Name',
        'operatorType' => 'OperatorType',
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
