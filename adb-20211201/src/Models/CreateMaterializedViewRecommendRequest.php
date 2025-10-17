<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateMaterializedViewRecommendRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $minRewriteQueryCount;

    /**
     * @var int
     */
    public $minRewriteQueryPattern;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $scanQueriesRange;

    /**
     * @var string
     */
    public $schedulingDay;

    /**
     * @var string
     */
    public $schedulingPolicy;

    /**
     * @var int
     */
    public $slowQueryThreshold;

    /**
     * @var string
     */
    public $specifiedTime;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'description' => 'Description',
        'minRewriteQueryCount' => 'MinRewriteQueryCount',
        'minRewriteQueryPattern' => 'MinRewriteQueryPattern',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scanQueriesRange' => 'ScanQueriesRange',
        'schedulingDay' => 'SchedulingDay',
        'schedulingPolicy' => 'SchedulingPolicy',
        'slowQueryThreshold' => 'SlowQueryThreshold',
        'specifiedTime' => 'SpecifiedTime',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->minRewriteQueryCount) {
            $res['MinRewriteQueryCount'] = $this->minRewriteQueryCount;
        }

        if (null !== $this->minRewriteQueryPattern) {
            $res['MinRewriteQueryPattern'] = $this->minRewriteQueryPattern;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scanQueriesRange) {
            $res['ScanQueriesRange'] = $this->scanQueriesRange;
        }

        if (null !== $this->schedulingDay) {
            $res['SchedulingDay'] = $this->schedulingDay;
        }

        if (null !== $this->schedulingPolicy) {
            $res['SchedulingPolicy'] = $this->schedulingPolicy;
        }

        if (null !== $this->slowQueryThreshold) {
            $res['SlowQueryThreshold'] = $this->slowQueryThreshold;
        }

        if (null !== $this->specifiedTime) {
            $res['SpecifiedTime'] = $this->specifiedTime;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MinRewriteQueryCount'])) {
            $model->minRewriteQueryCount = $map['MinRewriteQueryCount'];
        }

        if (isset($map['MinRewriteQueryPattern'])) {
            $model->minRewriteQueryPattern = $map['MinRewriteQueryPattern'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScanQueriesRange'])) {
            $model->scanQueriesRange = $map['ScanQueriesRange'];
        }

        if (isset($map['SchedulingDay'])) {
            $model->schedulingDay = $map['SchedulingDay'];
        }

        if (isset($map['SchedulingPolicy'])) {
            $model->schedulingPolicy = $map['SchedulingPolicy'];
        }

        if (isset($map['SlowQueryThreshold'])) {
            $model->slowQueryThreshold = $map['SlowQueryThreshold'];
        }

        if (isset($map['SpecifiedTime'])) {
            $model->specifiedTime = $map['SpecifiedTime'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
