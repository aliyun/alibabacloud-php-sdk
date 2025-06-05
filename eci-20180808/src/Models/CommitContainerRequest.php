<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest\acrRegistryInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest\arn;
use AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest\image;

class CommitContainerRequest extends Model
{
    /**
     * @var acrRegistryInfo
     */
    public $acrRegistryInfo;

    /**
     * @var arn
     */
    public $arn;

    /**
     * @var string
     */
    public $containerGroupId;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var image
     */
    public $image;

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
    protected $_name = [
        'acrRegistryInfo' => 'AcrRegistryInfo',
        'arn' => 'Arn',
        'containerGroupId' => 'ContainerGroupId',
        'containerName' => 'ContainerName',
        'image' => 'Image',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (null !== $this->acrRegistryInfo) {
            $this->acrRegistryInfo->validate();
        }
        if (null !== $this->arn) {
            $this->arn->validate();
        }
        if (null !== $this->image) {
            $this->image->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrRegistryInfo) {
            $res['AcrRegistryInfo'] = null !== $this->acrRegistryInfo ? $this->acrRegistryInfo->toArray($noStream) : $this->acrRegistryInfo;
        }

        if (null !== $this->arn) {
            $res['Arn'] = null !== $this->arn ? $this->arn->toArray($noStream) : $this->arn;
        }

        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }

        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }

        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcrRegistryInfo'])) {
            $model->acrRegistryInfo = acrRegistryInfo::fromMap($map['AcrRegistryInfo']);
        }

        if (isset($map['Arn'])) {
            $model->arn = arn::fromMap($map['Arn']);
        }

        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }

        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }

        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
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

        return $model;
    }
}
