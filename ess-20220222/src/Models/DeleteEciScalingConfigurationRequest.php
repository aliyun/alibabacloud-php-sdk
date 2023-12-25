<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DeleteEciScalingConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the scaling group.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The ID of the scaling configuration that you want to delete.
     *
     * @example asc-bp1bx8mzur534edp****
     *
     * @var string
     */
    public $scalingConfigurationId;
    protected $_name = [
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'scalingConfigurationId' => 'ScalingConfigurationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEciScalingConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }

        return $model;
    }
}
