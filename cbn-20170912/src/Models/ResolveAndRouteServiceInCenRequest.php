<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ResolveAndRouteServiceInCenRequest extends Model
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $hostRegionId;

    /**
     * @var int
     */
    public $updateInterval;

    /**
     * @var string
     */
    public $hostVpcId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $accessRegionIds;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'clientToken'          => 'ClientToken',
        'cenId'                => 'CenId',
        'host'                 => 'Host',
        'hostRegionId'         => 'HostRegionId',
        'updateInterval'       => 'UpdateInterval',
        'hostVpcId'            => 'HostVpcId',
        'description'          => 'Description',
        'accessRegionIds'      => 'AccessRegionIds',
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->hostRegionId) {
            $res['HostRegionId'] = $this->hostRegionId;
        }
        if (null !== $this->updateInterval) {
            $res['UpdateInterval'] = $this->updateInterval;
        }
        if (null !== $this->hostVpcId) {
            $res['HostVpcId'] = $this->hostVpcId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->accessRegionIds) {
            $res['AccessRegionIds'] = $this->accessRegionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResolveAndRouteServiceInCenRequest
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['HostRegionId'])) {
            $model->hostRegionId = $map['HostRegionId'];
        }
        if (isset($map['UpdateInterval'])) {
            $model->updateInterval = $map['UpdateInterval'];
        }
        if (isset($map['HostVpcId'])) {
            $model->hostVpcId = $map['HostVpcId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AccessRegionIds'])) {
            if (!empty($map['AccessRegionIds'])) {
                $model->accessRegionIds = $map['AccessRegionIds'];
            }
        }

        return $model;
    }
}
