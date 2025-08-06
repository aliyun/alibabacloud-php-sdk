<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest\agentUpgradeConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest\ossDeliveryConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest\sessionManagerConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest\slsDeliveryConfig;

class ModifyCloudAssistantSettingsRequest extends Model
{
    /**
     * @var agentUpgradeConfig
     */
    public $agentUpgradeConfig;

    /**
     * @var ossDeliveryConfig
     */
    public $ossDeliveryConfig;

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
     * @var sessionManagerConfig
     */
    public $sessionManagerConfig;

    /**
     * @var string
     */
    public $settingType;

    /**
     * @var slsDeliveryConfig
     */
    public $slsDeliveryConfig;
    protected $_name = [
        'agentUpgradeConfig' => 'AgentUpgradeConfig',
        'ossDeliveryConfig' => 'OssDeliveryConfig',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sessionManagerConfig' => 'SessionManagerConfig',
        'settingType' => 'SettingType',
        'slsDeliveryConfig' => 'SlsDeliveryConfig',
    ];

    public function validate()
    {
        if (null !== $this->agentUpgradeConfig) {
            $this->agentUpgradeConfig->validate();
        }
        if (null !== $this->ossDeliveryConfig) {
            $this->ossDeliveryConfig->validate();
        }
        if (null !== $this->sessionManagerConfig) {
            $this->sessionManagerConfig->validate();
        }
        if (null !== $this->slsDeliveryConfig) {
            $this->slsDeliveryConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentUpgradeConfig) {
            $res['AgentUpgradeConfig'] = null !== $this->agentUpgradeConfig ? $this->agentUpgradeConfig->toArray($noStream) : $this->agentUpgradeConfig;
        }

        if (null !== $this->ossDeliveryConfig) {
            $res['OssDeliveryConfig'] = null !== $this->ossDeliveryConfig ? $this->ossDeliveryConfig->toArray($noStream) : $this->ossDeliveryConfig;
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

        if (null !== $this->sessionManagerConfig) {
            $res['SessionManagerConfig'] = null !== $this->sessionManagerConfig ? $this->sessionManagerConfig->toArray($noStream) : $this->sessionManagerConfig;
        }

        if (null !== $this->settingType) {
            $res['SettingType'] = $this->settingType;
        }

        if (null !== $this->slsDeliveryConfig) {
            $res['SlsDeliveryConfig'] = null !== $this->slsDeliveryConfig ? $this->slsDeliveryConfig->toArray($noStream) : $this->slsDeliveryConfig;
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
        if (isset($map['AgentUpgradeConfig'])) {
            $model->agentUpgradeConfig = agentUpgradeConfig::fromMap($map['AgentUpgradeConfig']);
        }

        if (isset($map['OssDeliveryConfig'])) {
            $model->ossDeliveryConfig = ossDeliveryConfig::fromMap($map['OssDeliveryConfig']);
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

        if (isset($map['SessionManagerConfig'])) {
            $model->sessionManagerConfig = sessionManagerConfig::fromMap($map['SessionManagerConfig']);
        }

        if (isset($map['SettingType'])) {
            $model->settingType = $map['SettingType'];
        }

        if (isset($map['SlsDeliveryConfig'])) {
            $model->slsDeliveryConfig = slsDeliveryConfig::fromMap($map['SlsDeliveryConfig']);
        }

        return $model;
    }
}
