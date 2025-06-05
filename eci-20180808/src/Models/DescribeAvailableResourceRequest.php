<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceRequest\destinationResource;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceRequest\spotResource;

class DescribeAvailableResourceRequest extends Model
{
    /**
     * @var destinationResource
     */
    public $destinationResource;

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
     * @var spotResource
     */
    public $spotResource;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'destinationResource' => 'DestinationResource',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'spotResource' => 'SpotResource',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->destinationResource) {
            $this->destinationResource->validate();
        }
        if (null !== $this->spotResource) {
            $this->spotResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationResource) {
            $res['DestinationResource'] = null !== $this->destinationResource ? $this->destinationResource->toArray($noStream) : $this->destinationResource;
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

        if (null !== $this->spotResource) {
            $res['SpotResource'] = null !== $this->spotResource ? $this->spotResource->toArray($noStream) : $this->spotResource;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['DestinationResource'])) {
            $model->destinationResource = destinationResource::fromMap($map['DestinationResource']);
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

        if (isset($map['SpotResource'])) {
            $model->spotResource = spotResource::fromMap($map['SpotResource']);
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
