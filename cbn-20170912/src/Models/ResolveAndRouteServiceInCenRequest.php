<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ResolveAndRouteServiceInCenRequest extends Model
{
    /**
     * @description The IDs of the regions where the cloud service is accessed.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string[]
     */
    public $accessRegionIds;

    /**
     * @description The ID of the CEN instance.
     *
     * This parameter is required.
     * @example cen-ckwa2hhmuislse****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 02fb3da4****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the cloud service.
     *
     * This parameter is optional. If you enter a description, it must be 1 to 256 characters in length and cannot start with http:// or https://.
     * @example descname
     *
     * @var string
     */
    public $description;

    /**
     * @description The IP addresses or CIDR blocks of the cloud service.
     *
     * This parameter is required.
     * @example 100.118.28.0/24
     *
     * @var string
     */
    public $host;

    /**
     * @description The ID of the region in which the cloud service is deployed.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $hostRegionId;

    /**
     * @description The ID of the VPC that is associated with the cloud service.
     *
     * This parameter is required.
     * @example vpc-o6woh5s494zueq40v****
     *
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
        'accessRegionIds'      => 'AccessRegionIds',
        'cenId'                => 'CenId',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'host'                 => 'Host',
        'hostRegionId'         => 'HostRegionId',
        'hostVpcId'            => 'HostVpcId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessRegionIds) {
            $res['AccessRegionIds'] = $this->accessRegionIds;
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

    /**
     * @param array $map
     *
     * @return ResolveAndRouteServiceInCenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessRegionIds'])) {
            if (!empty($map['AccessRegionIds'])) {
                $model->accessRegionIds = $map['AccessRegionIds'];
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
