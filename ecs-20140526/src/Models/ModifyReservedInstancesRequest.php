<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesRequest\configuration;
use AlibabaCloud\Tea\Model;

class ModifyReservedInstancesRequest extends Model
{
    /**
     * @var configuration[]
     */
    public $configuration;

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
     * @var string[]
     */
    public $reservedInstanceId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'configuration'        => 'Configuration',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'reservedInstanceId'   => 'ReservedInstanceId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = [];
            if (null !== $this->configuration && \is_array($this->configuration)) {
                $n = 0;
                foreach ($this->configuration as $item) {
                    $res['Configuration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyReservedInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            if (!empty($map['Configuration'])) {
                $model->configuration = [];
                $n                    = 0;
                foreach ($map['Configuration'] as $item) {
                    $model->configuration[$n++] = null !== $item ? configuration::fromMap($item) : $item;
                }
            }
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
        if (isset($map['ReservedInstanceId'])) {
            if (!empty($map['ReservedInstanceId'])) {
                $model->reservedInstanceId = $map['ReservedInstanceId'];
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
