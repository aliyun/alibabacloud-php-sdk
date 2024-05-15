<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudAssistantSettingsShrinkRequest extends Model
{
    /**
     * @description The configurations for upgrading Cloud Assistant Agent.
     *
     * @var string
     */
    public $agentUpgradeConfigShrink;

    /**
     * @description The configurations for delivering records to Object Storage Service (OSS).
     *
     * @var string
     */
    public $ossDeliveryConfigShrink;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
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
     * @description The Cloud Assistant feature. Valid values:
     *
     *   SessionManagerDelivery: the Session Record Delivery feature
     *   InvocationDelivery: the Operation Content and Result Delivery feature
     *
     * This parameter is required.
     * @example SessionManagerDelivery
     *
     * @var string
     */
    public $settingType;

    /**
     * @description The configurations for delivering records to Simple Log Service.
     *
     * @var string
     */
    public $slsDeliveryConfigShrink;
    protected $_name = [
        'agentUpgradeConfigShrink' => 'AgentUpgradeConfig',
        'ossDeliveryConfigShrink'  => 'OssDeliveryConfig',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'regionId'                 => 'RegionId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'settingType'              => 'SettingType',
        'slsDeliveryConfigShrink'  => 'SlsDeliveryConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentUpgradeConfigShrink) {
            $res['AgentUpgradeConfig'] = $this->agentUpgradeConfigShrink;
        }
        if (null !== $this->ossDeliveryConfigShrink) {
            $res['OssDeliveryConfig'] = $this->ossDeliveryConfigShrink;
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
        if (null !== $this->settingType) {
            $res['SettingType'] = $this->settingType;
        }
        if (null !== $this->slsDeliveryConfigShrink) {
            $res['SlsDeliveryConfig'] = $this->slsDeliveryConfigShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudAssistantSettingsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentUpgradeConfig'])) {
            $model->agentUpgradeConfigShrink = $map['AgentUpgradeConfig'];
        }
        if (isset($map['OssDeliveryConfig'])) {
            $model->ossDeliveryConfigShrink = $map['OssDeliveryConfig'];
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
        if (isset($map['SettingType'])) {
            $model->settingType = $map['SettingType'];
        }
        if (isset($map['SlsDeliveryConfig'])) {
            $model->slsDeliveryConfigShrink = $map['SlsDeliveryConfig'];
        }

        return $model;
    }
}
