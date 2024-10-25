<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterPrefixListAssociationRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-4266****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error code is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request.
     *
     * >  This parameter is not in use.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the next hop connection.
     *
     * To specify all CIDR blocks in the prefix list as blackhole routes, set this parameter to **BlackHole**.
     *
     * This parameter is required.
     * @example tr-attach-flbq507rg2ckrj****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The type of the next hop. Valid values:
     *
     *   **BlackHole**: specifies that all the CIDR blocks in the prefix list are blackhole routes. Packets destined for the CIDR blocks are dropped.
     *   **VPC**: specifies a virtual private cloud (VPC) connection as the next hop.
     *   **VBR**: specifies a virtual border router (VBR) connection as the next hop.
     *   **TR**: specifies an inter-region connection as the next hop.
     *   **ECR**: specifies an Express Connect Router (ECR) connection as the next hop.
     *
     * @example VPC
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the Alibaba Cloud account to which the prefix list belongs.
     *
     * @example 1210123456123456
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @description The ID of the prefix list.
     *
     * This parameter is required.
     * @example pl-6ehtn5kqxgeyy08fi****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description The ID of the region where the transit router is deployed.
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

    /**
     * @description The ID of the transit router.
     *
     * This parameter is required.
     * @example tr-6ehx7q2jze8ch5ji0****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The ID of the route table of the transit router.
     *
     * This parameter is required.
     * @example vtb-6ehgc262hr170qgyc****
     *
     * @var string
     */
    public $transitRouterTableId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'nextHop'              => 'NextHop',
        'nextHopType'          => 'NextHopType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'ownerUid'             => 'OwnerUid',
        'prefixListId'         => 'PrefixListId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'transitRouterId'      => 'TransitRouterId',
        'transitRouterTableId' => 'TransitRouterTableId',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
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
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterTableId) {
            $res['TransitRouterTableId'] = $this->transitRouterTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterPrefixListAssociationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
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
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterTableId'])) {
            $model->transitRouterTableId = $map['TransitRouterTableId'];
        }

        return $model;
    }
}
