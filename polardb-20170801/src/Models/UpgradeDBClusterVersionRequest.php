<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpgradeDBClusterVersionRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $fromTimeService;

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
    public $plannedEndTime;

    /**
     * @var string
     */
    public $plannedStartTime;

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
    public $targetDBRevisionVersionCode;

    /**
     * @var string
     */
    public $targetProxyRevisionVersionCode;

    /**
     * @var string
     */
    public $upgradeLabel;

    /**
     * @var string
     */
    public $upgradePolicy;

    /**
     * @var string
     */
    public $upgradeType;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'fromTimeService' => 'FromTimeService',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'plannedEndTime' => 'PlannedEndTime',
        'plannedStartTime' => 'PlannedStartTime',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'targetDBRevisionVersionCode' => 'TargetDBRevisionVersionCode',
        'targetProxyRevisionVersionCode' => 'TargetProxyRevisionVersionCode',
        'upgradeLabel' => 'UpgradeLabel',
        'upgradePolicy' => 'UpgradePolicy',
        'upgradeType' => 'UpgradeType',
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

        if (null !== $this->fromTimeService) {
            $res['FromTimeService'] = $this->fromTimeService;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->plannedEndTime) {
            $res['PlannedEndTime'] = $this->plannedEndTime;
        }

        if (null !== $this->plannedStartTime) {
            $res['PlannedStartTime'] = $this->plannedStartTime;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->targetDBRevisionVersionCode) {
            $res['TargetDBRevisionVersionCode'] = $this->targetDBRevisionVersionCode;
        }

        if (null !== $this->targetProxyRevisionVersionCode) {
            $res['TargetProxyRevisionVersionCode'] = $this->targetProxyRevisionVersionCode;
        }

        if (null !== $this->upgradeLabel) {
            $res['UpgradeLabel'] = $this->upgradeLabel;
        }

        if (null !== $this->upgradePolicy) {
            $res['UpgradePolicy'] = $this->upgradePolicy;
        }

        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
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

        if (isset($map['FromTimeService'])) {
            $model->fromTimeService = $map['FromTimeService'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlannedEndTime'])) {
            $model->plannedEndTime = $map['PlannedEndTime'];
        }

        if (isset($map['PlannedStartTime'])) {
            $model->plannedStartTime = $map['PlannedStartTime'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TargetDBRevisionVersionCode'])) {
            $model->targetDBRevisionVersionCode = $map['TargetDBRevisionVersionCode'];
        }

        if (isset($map['TargetProxyRevisionVersionCode'])) {
            $model->targetProxyRevisionVersionCode = $map['TargetProxyRevisionVersionCode'];
        }

        if (isset($map['UpgradeLabel'])) {
            $model->upgradeLabel = $map['UpgradeLabel'];
        }

        if (isset($map['UpgradePolicy'])) {
            $model->upgradePolicy = $map['UpgradePolicy'];
        }

        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }

        return $model;
    }
}
