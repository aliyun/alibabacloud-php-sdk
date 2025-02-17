<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class ModifyCloudAssistantSettingsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentUpgradeConfigShrink;
    /**
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
    public $settingType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
