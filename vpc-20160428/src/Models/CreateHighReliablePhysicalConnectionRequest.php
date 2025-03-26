<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionRequest\apList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionRequest\tag;

class CreateHighReliablePhysicalConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var apList[]
     */
    public $apList;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $deviceAdvancedCapacity;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $highReliableType;

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
    public $portType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'apList' => 'ApList',
        'clientToken' => 'ClientToken',
        'deviceAdvancedCapacity' => 'DeviceAdvancedCapacity',
        'dryRun' => 'DryRun',
        'highReliableType' => 'HighReliableType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'portType' => 'PortType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->apList)) {
            Model::validateArray($this->apList);
        }
        if (\is_array($this->deviceAdvancedCapacity)) {
            Model::validateArray($this->deviceAdvancedCapacity);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->apList) {
            if (\is_array($this->apList)) {
                $res['ApList'] = [];
                $n1 = 0;
                foreach ($this->apList as $item1) {
                    $res['ApList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deviceAdvancedCapacity) {
            if (\is_array($this->deviceAdvancedCapacity)) {
                $res['DeviceAdvancedCapacity'] = [];
                $n1 = 0;
                foreach ($this->deviceAdvancedCapacity as $item1) {
                    $res['DeviceAdvancedCapacity'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->highReliableType) {
            $res['HighReliableType'] = $this->highReliableType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ApList'])) {
            if (!empty($map['ApList'])) {
                $model->apList = [];
                $n1 = 0;
                foreach ($map['ApList'] as $item1) {
                    $model->apList[$n1++] = apList::fromMap($item1);
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeviceAdvancedCapacity'])) {
            if (!empty($map['DeviceAdvancedCapacity'])) {
                $model->deviceAdvancedCapacity = [];
                $n1 = 0;
                foreach ($map['DeviceAdvancedCapacity'] as $item1) {
                    $model->deviceAdvancedCapacity[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['HighReliableType'])) {
            $model->highReliableType = $map['HighReliableType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
