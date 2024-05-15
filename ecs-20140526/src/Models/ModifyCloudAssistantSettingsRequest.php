<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest\agentUpgradeConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest\ossDeliveryConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest\slsDeliveryConfig;
use AlibabaCloud\Tea\Model;

class ModifyCloudAssistantSettingsRequest extends Model
{
    /**
     * @description The configurations for upgrading Cloud Assistant Agent.
     *
     * @var agentUpgradeConfig
     */
    public $agentUpgradeConfig;

    /**
     * @description The configurations for delivering records to Object Storage Service (OSS).
     *
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
     * @var slsDeliveryConfig
     */
    public $slsDeliveryConfig;
    protected $_name = [
        'agentUpgradeConfig'   => 'AgentUpgradeConfig',
        'ossDeliveryConfig'    => 'OssDeliveryConfig',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'settingType'          => 'SettingType',
        'slsDeliveryConfig'    => 'SlsDeliveryConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentUpgradeConfig) {
            $res['AgentUpgradeConfig'] = null !== $this->agentUpgradeConfig ? $this->agentUpgradeConfig->toMap() : null;
        }
        if (null !== $this->ossDeliveryConfig) {
            $res['OssDeliveryConfig'] = null !== $this->ossDeliveryConfig ? $this->ossDeliveryConfig->toMap() : null;
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
        if (null !== $this->slsDeliveryConfig) {
            $res['SlsDeliveryConfig'] = null !== $this->slsDeliveryConfig ? $this->slsDeliveryConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudAssistantSettingsRequest
     */
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
        if (isset($map['SettingType'])) {
            $model->settingType = $map['SettingType'];
        }
        if (isset($map['SlsDeliveryConfig'])) {
            $model->slsDeliveryConfig = slsDeliveryConfig::fromMap($map['SlsDeliveryConfig']);
        }

        return $model;
    }
}
