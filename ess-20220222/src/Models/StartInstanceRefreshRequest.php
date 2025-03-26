<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\StartInstanceRefreshRequest\desiredConfiguration;

class StartInstanceRefreshRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var desiredConfiguration
     */
    public $desiredConfiguration;

    /**
     * @var int
     */
    public $maxHealthyPercentage;

    /**
     * @var int
     */
    public $minHealthyPercentage;

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
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var bool
     */
    public $skipMatching;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'desiredConfiguration' => 'DesiredConfiguration',
        'maxHealthyPercentage' => 'MaxHealthyPercentage',
        'minHealthyPercentage' => 'MinHealthyPercentage',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
        'skipMatching' => 'SkipMatching',
    ];

    public function validate()
    {
        if (null !== $this->desiredConfiguration) {
            $this->desiredConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->desiredConfiguration) {
            $res['DesiredConfiguration'] = null !== $this->desiredConfiguration ? $this->desiredConfiguration->toArray($noStream) : $this->desiredConfiguration;
        }

        if (null !== $this->maxHealthyPercentage) {
            $res['MaxHealthyPercentage'] = $this->maxHealthyPercentage;
        }

        if (null !== $this->minHealthyPercentage) {
            $res['MinHealthyPercentage'] = $this->minHealthyPercentage;
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

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        if (null !== $this->skipMatching) {
            $res['SkipMatching'] = $this->skipMatching;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DesiredConfiguration'])) {
            $model->desiredConfiguration = desiredConfiguration::fromMap($map['DesiredConfiguration']);
        }

        if (isset($map['MaxHealthyPercentage'])) {
            $model->maxHealthyPercentage = $map['MaxHealthyPercentage'];
        }

        if (isset($map['MinHealthyPercentage'])) {
            $model->minHealthyPercentage = $map['MinHealthyPercentage'];
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

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        if (isset($map['SkipMatching'])) {
            $model->skipMatching = $map['SkipMatching'];
        }

        return $model;
    }
}
