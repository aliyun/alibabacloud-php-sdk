<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $allowCancel;

    /**
     * @example 1
     *
     * @var string
     */
    public $allowChange;

    /**
     * @example S1
     *
     * @var string
     */
    public $changeLevel;

    /**
     * @example System maintenance
     *
     * @var string
     */
    public $changeLevelEn;

    /**
     * @var string
     */
    public $changeLevelZh;

    /**
     * @example 2018-05-30T14:30:00Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example cn-beijing-h
     *
     * @var string
     */
    public $currentAVZ;

    /**
     * @example redis
     *
     * @var string
     */
    public $dbType;

    /**
     * @example 5.0
     *
     * @var string
     */
    public $dbVersion;

    /**
     * @example 2018-05-30T23:59:59Z
     *
     * @var string
     */
    public $deadline;

    /**
     * @example 11111
     *
     * @var int
     */
    public $id;

    /**
     * @example TransientDisconnection
     *
     * @var string
     */
    public $impact;

    /**
     * @example Transient instance disconnection
     *
     * @var string
     */
    public $impactEn;

    /**
     * @var string
     */
    public $impactZh;

    /**
     * @example test
     *
     * @var string
     */
    public $insComment;

    /**
     * @example r-bp1lgal1sdvxrz****
     *
     * @var string
     */
    public $insName;

    /**
     * @example 2018-05-30T14:30:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 04:00:00
     *
     * @var string
     */
    public $prepareInterval;

    /**
     * @example cn-hanghzou
     *
     * @var string
     */
    public $region;

    /**
     * @example userCancel
     *
     * @var string
     */
    public $resultInfo;

    /**
     * @example 2018-05-30T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $status;

    /**
     * @var string[]
     */
    public $subInsNames;

    /**
     * @example 2018-05-30T14:30:00Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @example {
     * }
     * @var string
     */
    public $taskParams;

    /**
     * @example rds_apsaradb_transfer
     *
     * @var string
     */
    public $taskType;

    /**
     * @example Minor version update
     *
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
        'dbType'          => 'DbType',
        'dbVersion'       => 'DbVersion',
        'deadline'        => 'Deadline',
        'id'              => 'Id',
        'impact'          => 'Impact',
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
        'taskParams'      => 'TaskParams',
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
