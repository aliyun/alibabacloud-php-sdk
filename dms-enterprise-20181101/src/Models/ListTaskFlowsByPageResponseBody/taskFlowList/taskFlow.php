<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowsByPageResponseBody\taskFlowList;

use AlibabaCloud\Dara\Model;

class taskFlow extends Model
{
    /**
     * @var string
     */
    public $creatorId;
    /**
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
     * @var string
     */
    public $dagName;
    /**
     * @var string
     */
    public $dagOwnerId;
    /**
     * @var string
     */
    public $dagOwnerNickName;
    /**
     * @var int
     */
    public $deployId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $latestInstanceStatus;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
