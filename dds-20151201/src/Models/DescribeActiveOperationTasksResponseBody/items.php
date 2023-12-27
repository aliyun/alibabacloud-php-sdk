<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description N/A
     *
     * @example ***
     *
     * @var string
     */
    public $allowCancel;

    /**
     * @description Indicates whether the time can be changed. Valid values:
     *
     *   **0**: The time cannot be changed.
     *   **1**: The time can be changed.
     *
     * @example 0
     *
     * @var string
     */
    public $allowChange;

    /**
     * @description The change type.
     *
     * @example ***
     *
     * @var string
     */
    public $changeLevel;

    /**
     * @description N/A
     *
     * @example ***
     *
     * @var string
     */
    public $changeLevelEn;

    /**
     * @description The change type in Chinese.
     *
     * @example ***
     *
     * @var string
     */
    public $changeLevelZh;

    /**
     * @description The time when the task was created.
     *
     * @example 2021-07-14 10:48:43
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description N/A
     *
     * @example ***
     *
     * @var string
     */
    public $currentAVZ;

    /**
     * @description The type of the database engine.
     *
     * @example mongoDb
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The version of the database engine.
     *
     * @example 5.6
     *
     * @var string
     */
    public $dbVersion;

    /**
     * @description The end time of the task.
     *
     * @example 1646014421633
     *
     * @var string
     */
    public $deadline;

    /**
     * @description The ID of the task.
     *
     * @example ***
     *
     * @var int
     */
    public $id;

    /**
     * @description N/A
     *
     * @example ***
     *
     * @var string
     */
    public $impactEn;

    /**
     * @description N/A
     *
     * @example ***
     *
     * @var string
     */
    public $impactZh;

    /**
     * @description The description of the task.
     *
     * @example ***
     *
     * @var string
     */
    public $insComment;

    /**
     * @description The ID of the node.
     *
     * @example ***
     *
     * @var string
     */
    public $insName;

    /**
     * @description The time when the task was modified. The time is displayed in the *yyyy-mm-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-12-24T09:48:01Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The required preparation period between the task start time and the switchover time. The time is displayed in the *HH:mm:ss* format.
     *
     * @example ***
     *
     * @var string
     */
    public $prepareInterval;

    /**
     * @description The region of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The result information. This parameter can be ignored.
     *
     * @example ***
     *
     * @var string
     */
    public $resultInfo;

    /**
     * @description The start time of the task. The time is displayed in the *yyyy-mm-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-12-24T06:01:05Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description N/A
     *
     * @example ***
     *
     * @var int
     */
    public $status;

    /**
     * @description The names of the subinstances.
     *
     * @var string[]
     */
    public $subInsNames;

    /**
     * @description The time when the task was interrupted. The time is displayed in the *yyyy-mm-dd*T*hh:mm:ss*Z format. The time is displayed in Coordinated Universal Time (UTC).
     *
     * @example 2022-11-24T11:20:00Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The type of the task.
     *
     * @example ***
     *
     * @var string
     */
    public $taskType;

    /**
     * @description N/A
     *
     * @example ***
     *
     * @var string
     */
    public $taskTypeEn;

    /**
     * @description The type of the task in Chinese.
     *
     * @example ***
     *
     * @var string
     */
    public $taskTypeZh;
    protected $_name = [
        'allowCancel'     => 'AllowCancel',
        'allowChange'     => 'AllowChange',
        'changeLevel'     => 'ChangeLevel',
        'changeLevelEn'   => 'ChangeLevelEn',
        'changeLevelZh'   => 'ChangeLevelZh',
        'createdTime'     => 'CreatedTime',
        'currentAVZ'      => 'CurrentAVZ',
        'dbType'          => 'DbType',
        'dbVersion'       => 'DbVersion',
        'deadline'        => 'Deadline',
        'id'              => 'Id',
        'impactEn'        => 'ImpactEn',
        'impactZh'        => 'ImpactZh',
        'insComment'      => 'InsComment',
        'insName'         => 'InsName',
        'modifiedTime'    => 'ModifiedTime',
        'prepareInterval' => 'PrepareInterval',
        'region'          => 'Region',
        'resultInfo'      => 'ResultInfo',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'subInsNames'     => 'SubInsNames',
        'switchTime'      => 'SwitchTime',
        'taskType'        => 'TaskType',
        'taskTypeEn'      => 'TaskTypeEn',
        'taskTypeZh'      => 'TaskTypeZh',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCancel) {
            $res['AllowCancel'] = $this->allowCancel;
        }
        if (null !== $this->allowChange) {
            $res['AllowChange'] = $this->allowChange;
        }
        if (null !== $this->changeLevel) {
            $res['ChangeLevel'] = $this->changeLevel;
        }
        if (null !== $this->changeLevelEn) {
            $res['ChangeLevelEn'] = $this->changeLevelEn;
        }
        if (null !== $this->changeLevelZh) {
            $res['ChangeLevelZh'] = $this->changeLevelZh;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->currentAVZ) {
            $res['CurrentAVZ'] = $this->currentAVZ;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->impactEn) {
            $res['ImpactEn'] = $this->impactEn;
        }
        if (null !== $this->impactZh) {
            $res['ImpactZh'] = $this->impactZh;
        }
        if (null !== $this->insComment) {
            $res['InsComment'] = $this->insComment;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->prepareInterval) {
            $res['PrepareInterval'] = $this->prepareInterval;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resultInfo) {
            $res['ResultInfo'] = $this->resultInfo;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subInsNames) {
            $res['SubInsNames'] = $this->subInsNames;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskTypeEn) {
            $res['TaskTypeEn'] = $this->taskTypeEn;
        }
        if (null !== $this->taskTypeZh) {
            $res['TaskTypeZh'] = $this->taskTypeZh;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCancel'])) {
            $model->allowCancel = $map['AllowCancel'];
        }
        if (isset($map['AllowChange'])) {
            $model->allowChange = $map['AllowChange'];
        }
        if (isset($map['ChangeLevel'])) {
            $model->changeLevel = $map['ChangeLevel'];
        }
        if (isset($map['ChangeLevelEn'])) {
            $model->changeLevelEn = $map['ChangeLevelEn'];
        }
        if (isset($map['ChangeLevelZh'])) {
            $model->changeLevelZh = $map['ChangeLevelZh'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CurrentAVZ'])) {
            $model->currentAVZ = $map['CurrentAVZ'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImpactEn'])) {
            $model->impactEn = $map['ImpactEn'];
        }
        if (isset($map['ImpactZh'])) {
            $model->impactZh = $map['ImpactZh'];
        }
        if (isset($map['InsComment'])) {
            $model->insComment = $map['InsComment'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PrepareInterval'])) {
            $model->prepareInterval = $map['PrepareInterval'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResultInfo'])) {
            $model->resultInfo = $map['ResultInfo'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubInsNames'])) {
            if (!empty($map['SubInsNames'])) {
                $model->subInsNames = $map['SubInsNames'];
            }
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskTypeEn'])) {
            $model->taskTypeEn = $map['TaskTypeEn'];
        }
        if (isset($map['TaskTypeZh'])) {
            $model->taskTypeZh = $map['TaskTypeZh'];
        }

        return $model;
    }
}
