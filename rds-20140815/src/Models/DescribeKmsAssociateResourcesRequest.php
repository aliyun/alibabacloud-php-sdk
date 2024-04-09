<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeKmsAssociateResourcesRequest extends Model
{
    /**
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 494c98ce-f2b5-48ab-96ab-36c986b6****
     *
     * @var string
     */
    public $kmsResourceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $kmsResourceRegionId;

    /**
     * @example key
     *
     * @var string
     */
    public $kmsResourceType;

    /**
     * @example 164882191396****
     *
     * @var string
     */
    public $kmsResourceUser;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-bp67acfmxazb4p****
     *
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
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'kmsResourceId'        => 'KmsResourceId',
        'kmsResourceRegionId'  => 'KmsResourceRegionId',
        'kmsResourceType'      => 'KmsResourceType',
        'kmsResourceUser'      => 'KmsResourceUser',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->kmsResourceId) {
            $res['KmsResourceId'] = $this->kmsResourceId;
        }
        if (null !== $this->kmsResourceRegionId) {
            $res['KmsResourceRegionId'] = $this->kmsResourceRegionId;
        }
        if (null !== $this->kmsResourceType) {
            $res['KmsResourceType'] = $this->kmsResourceType;
        }
        if (null !== $this->kmsResourceUser) {
            $res['KmsResourceUser'] = $this->kmsResourceUser;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return DescribeKmsAssociateResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['KmsResourceId'])) {
            $model->kmsResourceId = $map['KmsResourceId'];
        }
        if (isset($map['KmsResourceRegionId'])) {
            $model->kmsResourceRegionId = $map['KmsResourceRegionId'];
        }
        if (isset($map['KmsResourceType'])) {
            $model->kmsResourceType = $map['KmsResourceType'];
        }
        if (isset($map['KmsResourceUser'])) {
            $model->kmsResourceUser = $map['KmsResourceUser'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
