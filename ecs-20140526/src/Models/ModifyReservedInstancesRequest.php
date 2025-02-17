<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesRequest\configuration;

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
        if (\is_array($this->configuration)) {
            Model::validateArray($this->configuration);
        }
        if (\is_array($this->reservedInstanceId)) {
            Model::validateArray($this->reservedInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            if (\is_array($this->configuration)) {
                $res['Configuration'] = [];
                $n1                   = 0;
                foreach ($this->configuration as $item1) {
                    $res['Configuration'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->reservedInstanceId)) {
                $res['ReservedInstanceId'] = [];
                $n1                        = 0;
                foreach ($this->reservedInstanceId as $item1) {
                    $res['ReservedInstanceId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['Configuration'])) {
            if (!empty($map['Configuration'])) {
                $model->configuration = [];
                $n1                   = 0;
                foreach ($map['Configuration'] as $item1) {
                    $model->configuration[$n1++] = configuration::fromMap($item1);
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
                $model->reservedInstanceId = [];
                $n1                        = 0;
                foreach ($map['ReservedInstanceId'] as $item1) {
                    $model->reservedInstanceId[$n1++] = $item1;
                }
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
