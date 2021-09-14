<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\DbfsRecordResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $batchStrategyNo;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $dbfsId;

    /**
     * @var string
     */
    public $ecsId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $targetVersion;

    /**
     * @var int
     */
    public $upgradeStartTime;

    /**
     * @var int
     */
    public $upgradeEndTime;

    /**
     * @var int
     */
    public $taskExecutionCounts;

    /**
     * @var string
     */
    public $taskErrorReason;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $isDel;
    protected $_name = [
        'id'                  => 'Id',
        'batchStrategyNo'     => 'BatchStrategyNo',
        'accountId'           => 'AccountId',
        'dbfsId'              => 'DbfsId',
        'ecsId'               => 'EcsId',
        'taskId'              => 'TaskId',
        'regionId'            => 'RegionId',
        'zoneId'              => 'ZoneId',
        'state'               => 'State',
        'currentVersion'      => 'CurrentVersion',
        'targetVersion'       => 'TargetVersion',
        'upgradeStartTime'    => 'UpgradeStartTime',
        'upgradeEndTime'      => 'UpgradeEndTime',
        'taskExecutionCounts' => 'TaskExecutionCounts',
        'taskErrorReason'     => 'TaskErrorReason',
        'createTime'          => 'CreateTime',
        'updateTime'          => 'UpdateTime',
        'isDel'               => 'IsDel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->batchStrategyNo) {
            $res['BatchStrategyNo'] = $this->batchStrategyNo;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->dbfsId) {
            $res['DbfsId'] = $this->dbfsId;
        }
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->targetVersion) {
            $res['TargetVersion'] = $this->targetVersion;
        }
        if (null !== $this->upgradeStartTime) {
            $res['UpgradeStartTime'] = $this->upgradeStartTime;
        }
        if (null !== $this->upgradeEndTime) {
            $res['UpgradeEndTime'] = $this->upgradeEndTime;
        }
        if (null !== $this->taskExecutionCounts) {
            $res['TaskExecutionCounts'] = $this->taskExecutionCounts;
        }
        if (null !== $this->taskErrorReason) {
            $res['TaskErrorReason'] = $this->taskErrorReason;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->isDel) {
            $res['IsDel'] = $this->isDel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['BatchStrategyNo'])) {
            $model->batchStrategyNo = $map['BatchStrategyNo'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DbfsId'])) {
            $model->dbfsId = $map['DbfsId'];
        }
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['TargetVersion'])) {
            $model->targetVersion = $map['TargetVersion'];
        }
        if (isset($map['UpgradeStartTime'])) {
            $model->upgradeStartTime = $map['UpgradeStartTime'];
        }
        if (isset($map['UpgradeEndTime'])) {
            $model->upgradeEndTime = $map['UpgradeEndTime'];
        }
        if (isset($map['TaskExecutionCounts'])) {
            $model->taskExecutionCounts = $map['TaskExecutionCounts'];
        }
        if (isset($map['TaskErrorReason'])) {
            $model->taskErrorReason = $map['TaskErrorReason'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['IsDel'])) {
            $model->isDel = $map['IsDel'];
        }

        return $model;
    }
}
