<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody\nodeInfo\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody\nodeInfo\modifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody\nodeInfo\owner;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponseBody\nodeInfo\projectInfo;
use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @example 1717343597000
     *
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
     * @example DATA_PROCESS
     *
     * @var string
     */
    public $from;

    /**
     * @example n_2321
     *
     * @var string
     */
    public $id;

    /**
     * @example 1717343597000
     *
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
     * @example SHELL
     *
     * @var string
     */
    public $operatorType;

    /**
     * @var owner
     */
    public $owner;

    /**
     * @example MIDDLE
     *
     * @var string
     */
    public $priority;

    /**
     * @var projectInfo
     */
    public $projectInfo;

    /**
     * @example DAILY
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example {"expression":"any_success"}
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toMap() : null;
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
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->projectInfo) {
            $res['ProjectInfo'] = null !== $this->projectInfo ? $this->projectInfo->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return nodeInfo
     */
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
