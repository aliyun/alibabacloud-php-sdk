<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;

class ModifyAutoScalingConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $effectiveTimeEnd;

    /**
     * @var string
     */
    public $effectiveTimeStart;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $nodesMax;

    /**
     * @var int
     */
    public $nodesMin;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $scaleRuleListShrink;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $specId;

    /**
     * @var int
     */
    public $storageCapacityMax;
    protected $_name = [
        'configId' => 'ConfigId',
        'configName' => 'ConfigName',
        'effectiveTimeEnd' => 'EffectiveTimeEnd',
        'effectiveTimeStart' => 'EffectiveTimeStart',
        'enabled' => 'Enabled',
        'engine' => 'Engine',
        'instanceId' => 'InstanceId',
        'nodesMax' => 'NodesMax',
        'nodesMin' => 'NodesMin',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scaleRuleListShrink' => 'ScaleRuleList',
        'scaleType' => 'ScaleType',
        'securityToken' => 'SecurityToken',
        'specId' => 'SpecId',
        'storageCapacityMax' => 'StorageCapacityMax',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }

        if (null !== $this->effectiveTimeEnd) {
            $res['EffectiveTimeEnd'] = $this->effectiveTimeEnd;
        }

        if (null !== $this->effectiveTimeStart) {
            $res['EffectiveTimeStart'] = $this->effectiveTimeStart;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodesMax) {
            $res['NodesMax'] = $this->nodesMax;
        }

        if (null !== $this->nodesMin) {
            $res['NodesMin'] = $this->nodesMin;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scaleRuleListShrink) {
            $res['ScaleRuleList'] = $this->scaleRuleListShrink;
        }

        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }

        if (null !== $this->storageCapacityMax) {
            $res['StorageCapacityMax'] = $this->storageCapacityMax;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }

        if (isset($map['EffectiveTimeEnd'])) {
            $model->effectiveTimeEnd = $map['EffectiveTimeEnd'];
        }

        if (isset($map['EffectiveTimeStart'])) {
            $model->effectiveTimeStart = $map['EffectiveTimeStart'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodesMax'])) {
            $model->nodesMax = $map['NodesMax'];
        }

        if (isset($map['NodesMin'])) {
            $model->nodesMin = $map['NodesMin'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScaleRuleList'])) {
            $model->scaleRuleListShrink = $map['ScaleRuleList'];
        }

        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }

        if (isset($map['StorageCapacityMax'])) {
            $model->storageCapacityMax = $map['StorageCapacityMax'];
        }

        return $model;
    }
}
