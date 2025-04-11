<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ResolveAndRouteServiceInCenRequest extends Model
{
    /**
     * @var string[]
     */
    public $accessRegionIds;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $hostRegionId;

    /**
     * @var string
     */
    public $hostVpcId;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'accessRegionIds' => 'AccessRegionIds',
        'cenId' => 'CenId',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'host' => 'Host',
        'hostRegionId' => 'HostRegionId',
        'hostVpcId' => 'HostVpcId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->accessRegionIds)) {
            Model::validateArray($this->accessRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessRegionIds) {
            if (\is_array($this->accessRegionIds)) {
                $res['AccessRegionIds'] = [];
                $n1 = 0;
                foreach ($this->accessRegionIds as $item1) {
                    $res['AccessRegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->hostRegionId) {
            $res['HostRegionId'] = $this->hostRegionId;
        }

        if (null !== $this->hostVpcId) {
            $res['HostVpcId'] = $this->hostVpcId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['AccessRegionIds'])) {
            if (!empty($map['AccessRegionIds'])) {
                $model->accessRegionIds = [];
                $n1 = 0;
                foreach ($map['AccessRegionIds'] as $item1) {
                    $model->accessRegionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['HostRegionId'])) {
            $model->hostRegionId = $map['HostRegionId'];
        }

        if (isset($map['HostVpcId'])) {
            $model->hostVpcId = $map['HostVpcId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
