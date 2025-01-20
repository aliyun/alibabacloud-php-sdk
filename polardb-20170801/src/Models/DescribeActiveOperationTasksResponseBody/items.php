<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeActiveOperationTasksResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $allowCancel;
    /**
     * @var int
     */
    public $allowChange;
    /**
     * @var string
     */
    public $changeLevel;
    /**
     * @var string
     */
    public $changeLevelEn;
    /**
     * @var string
     */
    public $changeLevelZh;
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var string
     */
    public $currentAVZ;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string[]
     */
    public $DBNodeIds;
    /**
     * @var string
     */
    public $DBType;
    /**
     * @var string
     */
    public $DBVersion;
    /**
     * @var string
     */
    public $deadline;
    /**
     * @var string
     */
    public $impact;
    /**
     * @var string
     */
    public $impactEn;
    /**
     * @var string
     */
    public $impactZh;
    /**
     * @var string
     */
    public $insComment;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var string
     */
    public $prepareInterval;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $resultInfo;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $switchTime;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskParams;
    /**
     * @var string
     */
    public $taskType;
    /**
     * @var string
     */
    public $taskTypeEn;
    /**
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
        'DBClusterId'     => 'DBClusterId',
        'DBNodeIds'       => 'DBNodeIds',
        'DBType'          => 'DBType',
        'DBVersion'       => 'DBVersion',
        'deadline'        => 'Deadline',
        'impact'          => 'Impact',
        'impactEn'        => 'ImpactEn',
        'impactZh'        => 'ImpactZh',
        'insComment'      => 'InsComment',
        'modifiedTime'    => 'ModifiedTime',
        'prepareInterval' => 'PrepareInterval',
        'region'          => 'Region',
        'resultInfo'      => 'ResultInfo',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'switchTime'      => 'SwitchTime',
        'taskId'          => 'TaskId',
        'taskParams'      => 'TaskParams',
        'taskType'        => 'TaskType',
        'taskTypeEn'      => 'TaskTypeEn',
        'taskTypeZh'      => 'TaskTypeZh',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodeIds)) {
            Model::validateArray($this->DBNodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBNodeIds) {
            if (\is_array($this->DBNodeIds)) {
                $res['DBNodeIds'] = [];
                $n1               = 0;
                foreach ($this->DBNodeIds as $item1) {
                    $res['DBNodeIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }

        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }

        if (null !== $this->impact) {
            $res['Impact'] = $this->impact;
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

        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBNodeIds'])) {
            if (!empty($map['DBNodeIds'])) {
                $model->DBNodeIds = [];
                $n1               = 0;
                foreach ($map['DBNodeIds'] as $item1) {
                    $model->DBNodeIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }

        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }

        if (isset($map['Impact'])) {
            $model->impact = $map['Impact'];
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

        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
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
