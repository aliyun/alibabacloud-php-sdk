<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowsByPageResponseBody\taskFlowList;

use AlibabaCloud\Tea\Model;

class taskFlow extends Model
{
    /**
     * @description The ID of the user who created the task flow.
     *
     * @example 51****
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The username of the user who created the task flow.
     *
     * @example Creator_NickName
     *
     * @var string
     */
    public $creatorNickName;

    /**
     * @var string
     */
    public $cronBeginDate;

    /**
     * @var string
     */
    public $cronEndDate;

    /**
     * @var string
     */
    public $cronStr;

    /**
     * @var bool
     */
    public $cronSwitch;

    /**
     * @var int
     */
    public $cronType;

    /**
     * @description The name of the task flow.
     *
     * @example poc_task_test
     *
     * @var string
     */
    public $dagName;

    /**
     * @var string
     */
    public $dagOwnerId;

    /**
     * @description The username of the owner of the task flow.
     *
     * @example Owner_NickName
     *
     * @var string
     */
    public $dagOwnerNickName;

    /**
     * @description The ID of the last deployment record of the task flow.
     *
     * @example 65***
     *
     * @var int
     */
    public $deployId;

    /**
     * @description The description of the task flow.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the task flow.
     *
     * @example 7***
     *
     * @var int
     */
    public $id;

    /**
     * @description The status of the last execution of the task flow. Valid values:
     *
     *   **0**: invalid
     *   **1**: scheduling disabled
     *   **2**: waiting to be scheduled
     *
     * @example 0
     *
     * @var int
     */
    public $latestInstanceStatus;

    /**
     * @description The time when the last execution record was created.
     *
     * @example 2022-04-13
     *
     * @var string
     */
    public $latestInstanceTime;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $scheduleParam;

    /**
     * @description The status of the task flow. Valid values:
     *
     *   **0**: invalid
     *   **1**: scheduling disabled
     *   **2**: waiting to be scheduled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $timeZoneId;

    /**
     * @var int
     */
    public $triggerType;
    protected $_name = [
        'creatorId'            => 'CreatorId',
        'creatorNickName'      => 'CreatorNickName',
        'cronBeginDate'        => 'CronBeginDate',
        'cronEndDate'          => 'CronEndDate',
        'cronStr'              => 'CronStr',
        'cronSwitch'           => 'CronSwitch',
        'cronType'             => 'CronType',
        'dagName'              => 'DagName',
        'dagOwnerId'           => 'DagOwnerId',
        'dagOwnerNickName'     => 'DagOwnerNickName',
        'deployId'             => 'DeployId',
        'description'          => 'Description',
        'id'                   => 'Id',
        'latestInstanceStatus' => 'LatestInstanceStatus',
        'latestInstanceTime'   => 'LatestInstanceTime',
        'scenarioId'           => 'ScenarioId',
        'scheduleParam'        => 'ScheduleParam',
        'status'               => 'Status',
        'timeZoneId'           => 'TimeZoneId',
        'triggerType'          => 'TriggerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorNickName) {
            $res['CreatorNickName'] = $this->creatorNickName;
        }
        if (null !== $this->cronBeginDate) {
            $res['CronBeginDate'] = $this->cronBeginDate;
        }
        if (null !== $this->cronEndDate) {
            $res['CronEndDate'] = $this->cronEndDate;
        }
        if (null !== $this->cronStr) {
            $res['CronStr'] = $this->cronStr;
        }
        if (null !== $this->cronSwitch) {
            $res['CronSwitch'] = $this->cronSwitch;
        }
        if (null !== $this->cronType) {
            $res['CronType'] = $this->cronType;
        }
        if (null !== $this->dagName) {
            $res['DagName'] = $this->dagName;
        }
        if (null !== $this->dagOwnerId) {
            $res['DagOwnerId'] = $this->dagOwnerId;
        }
        if (null !== $this->dagOwnerNickName) {
            $res['DagOwnerNickName'] = $this->dagOwnerNickName;
        }
        if (null !== $this->deployId) {
            $res['DeployId'] = $this->deployId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->latestInstanceStatus) {
            $res['LatestInstanceStatus'] = $this->latestInstanceStatus;
        }
        if (null !== $this->latestInstanceTime) {
            $res['LatestInstanceTime'] = $this->latestInstanceTime;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->scheduleParam) {
            $res['ScheduleParam'] = $this->scheduleParam;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return taskFlow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorNickName'])) {
            $model->creatorNickName = $map['CreatorNickName'];
        }
        if (isset($map['CronBeginDate'])) {
            $model->cronBeginDate = $map['CronBeginDate'];
        }
        if (isset($map['CronEndDate'])) {
            $model->cronEndDate = $map['CronEndDate'];
        }
        if (isset($map['CronStr'])) {
            $model->cronStr = $map['CronStr'];
        }
        if (isset($map['CronSwitch'])) {
            $model->cronSwitch = $map['CronSwitch'];
        }
        if (isset($map['CronType'])) {
            $model->cronType = $map['CronType'];
        }
        if (isset($map['DagName'])) {
            $model->dagName = $map['DagName'];
        }
        if (isset($map['DagOwnerId'])) {
            $model->dagOwnerId = $map['DagOwnerId'];
        }
        if (isset($map['DagOwnerNickName'])) {
            $model->dagOwnerNickName = $map['DagOwnerNickName'];
        }
        if (isset($map['DeployId'])) {
            $model->deployId = $map['DeployId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LatestInstanceStatus'])) {
            $model->latestInstanceStatus = $map['LatestInstanceStatus'];
        }
        if (isset($map['LatestInstanceTime'])) {
            $model->latestInstanceTime = $map['LatestInstanceTime'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['ScheduleParam'])) {
            $model->scheduleParam = $map['ScheduleParam'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
