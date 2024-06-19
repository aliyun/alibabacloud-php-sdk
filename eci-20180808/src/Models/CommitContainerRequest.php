<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest\acrRegistryInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest\arn;
use AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest\image;
use AlibabaCloud\Tea\Model;

class CommitContainerRequest extends Model
{
    /**
     * @description The access credential configurations of the Container Registry Enterprise Edition instance.
     *
     * >  If you use a Container Registry Personal Edition instance, you do not need to configure this parameter. If you use a Container Registry Enterprise Edition instance, you must configure this parameter.
     * @var acrRegistryInfo
     */
    public $acrRegistryInfo;

    /**
     * @description The details about the ARN that is required for authorization.
     *
     * @var arn
     */
    public $arn;

    /**
     * @description The ID of the container group.
     *
     * This parameter is required.
     * @example eci-bp1do4xz75fa5sd****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The name of the container.
     *
     * This parameter is required.
     * @example container-1
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The image of the container.
     *
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
     * @description The region ID of the instance.
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
    protected $_name = [
        'acrRegistryInfo'      => 'AcrRegistryInfo',
        'arn'                  => 'Arn',
        'containerGroupId'     => 'ContainerGroupId',
        'containerName'        => 'ContainerName',
        'image'                => 'Image',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acrRegistryInfo) {
            $res['AcrRegistryInfo'] = null !== $this->acrRegistryInfo ? $this->acrRegistryInfo->toMap() : null;
        }
        if (null !== $this->arn) {
            $res['Arn'] = null !== $this->arn ? $this->arn->toMap() : null;
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return CommitContainerRequest
     */
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
