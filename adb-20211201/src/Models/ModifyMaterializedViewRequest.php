<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyMaterializedViewRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $enableDelayAlert;

    /**
     * @var bool
     */
    public $enableFailureAlert;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $latencyTolerance;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var bool
     */
    public $queryWrite;

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
     * @var string
     */
    public $viewName;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'dbName' => 'DbName',
        'enableDelayAlert' => 'EnableDelayAlert',
        'enableFailureAlert' => 'EnableFailureAlert',
        'groupName' => 'GroupName',
        'latencyTolerance' => 'LatencyTolerance',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'queryWrite' => 'QueryWrite',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'viewName' => 'ViewName',
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

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->enableDelayAlert) {
            $res['EnableDelayAlert'] = $this->enableDelayAlert;
        }

        if (null !== $this->enableFailureAlert) {
            $res['EnableFailureAlert'] = $this->enableFailureAlert;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->latencyTolerance) {
            $res['LatencyTolerance'] = $this->latencyTolerance;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->queryWrite) {
            $res['QueryWrite'] = $this->queryWrite;
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

        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
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

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['EnableDelayAlert'])) {
            $model->enableDelayAlert = $map['EnableDelayAlert'];
        }

        if (isset($map['EnableFailureAlert'])) {
            $model->enableFailureAlert = $map['EnableFailureAlert'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['LatencyTolerance'])) {
            $model->latencyTolerance = $map['LatencyTolerance'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['QueryWrite'])) {
            $model->queryWrite = $map['QueryWrite'];
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

        if (isset($map['ViewName'])) {
            $model->viewName = $map['ViewName'];
        }

        return $model;
    }
}
