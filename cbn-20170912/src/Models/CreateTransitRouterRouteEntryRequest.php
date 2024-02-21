<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterRouteEntryRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** is different for each request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **false** (default): performs a dry run and performs the actual request.
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

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
     * @description The description of the route.
     *
     * The description must be 1 to 256 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterRouteEntryDescription;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $transitRouterRouteEntryDestinationCidrBlock;

    /**
     * @description The name of the route.
     *
     * The name must be 1 to 128 characters in length, and cannot start with http:// or https://. You can also leave this parameter empty.
     * @example testname
     *
     * @var string
     */
    public $transitRouterRouteEntryName;

    /**
     * @description The ID of the network instance connection that you want to specify as the next hop.
     *
     * @example tr-attach-nls9fzkfat8934****
     *
     * @var string
     */
    public $transitRouterRouteEntryNextHopId;

    /**
     * @description The type of the next hop. Valid values:
     *
     *   **BlackHole**: routes network traffic to a black hole. All packets that match this route are dropped. If you select this option, you do not need to specify the next hop information.
     *   **Attachment**: routes network traffic to a network instance connection. If you select this option, you must specify the ID of the network instance connection. All packets that match this route are routed to the specified network instance connection.
     *
     * @example BlackHole
     *
     * @var string
     */
    public $transitRouterRouteEntryNextHopType;

    /**
     * @description The ID of the route table of the Enterprise Edition transit router.
     *
     * @example vtb-bp1dudbh2d5na6b50****
     *
     * @var string
     */
    public $transitRouterRouteTableId;
    protected $_name = [
        'clientToken'                                 => 'ClientToken',
        'dryRun'                                      => 'DryRun',
        'ownerAccount'                                => 'OwnerAccount',
        'ownerId'                                     => 'OwnerId',
        'resourceOwnerAccount'                        => 'ResourceOwnerAccount',
        'resourceOwnerId'                             => 'ResourceOwnerId',
        'transitRouterRouteEntryDescription'          => 'TransitRouterRouteEntryDescription',
        'transitRouterRouteEntryDestinationCidrBlock' => 'TransitRouterRouteEntryDestinationCidrBlock',
        'transitRouterRouteEntryName'                 => 'TransitRouterRouteEntryName',
        'transitRouterRouteEntryNextHopId'            => 'TransitRouterRouteEntryNextHopId',
        'transitRouterRouteEntryNextHopType'          => 'TransitRouterRouteEntryNextHopType',
        'transitRouterRouteTableId'                   => 'TransitRouterRouteTableId',
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
        if (null !== $this->transitRouterRouteEntryDescription) {
            $res['TransitRouterRouteEntryDescription'] = $this->transitRouterRouteEntryDescription;
        }
        if (null !== $this->transitRouterRouteEntryDestinationCidrBlock) {
            $res['TransitRouterRouteEntryDestinationCidrBlock'] = $this->transitRouterRouteEntryDestinationCidrBlock;
        }
        if (null !== $this->transitRouterRouteEntryName) {
            $res['TransitRouterRouteEntryName'] = $this->transitRouterRouteEntryName;
        }
        if (null !== $this->transitRouterRouteEntryNextHopId) {
            $res['TransitRouterRouteEntryNextHopId'] = $this->transitRouterRouteEntryNextHopId;
        }
        if (null !== $this->transitRouterRouteEntryNextHopType) {
            $res['TransitRouterRouteEntryNextHopType'] = $this->transitRouterRouteEntryNextHopType;
        }
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterRouteEntryRequest
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
        if (isset($map['TransitRouterRouteEntryDescription'])) {
            $model->transitRouterRouteEntryDescription = $map['TransitRouterRouteEntryDescription'];
        }
        if (isset($map['TransitRouterRouteEntryDestinationCidrBlock'])) {
            $model->transitRouterRouteEntryDestinationCidrBlock = $map['TransitRouterRouteEntryDestinationCidrBlock'];
        }
        if (isset($map['TransitRouterRouteEntryName'])) {
            $model->transitRouterRouteEntryName = $map['TransitRouterRouteEntryName'];
        }
        if (isset($map['TransitRouterRouteEntryNextHopId'])) {
            $model->transitRouterRouteEntryNextHopId = $map['TransitRouterRouteEntryNextHopId'];
        }
        if (isset($map['TransitRouterRouteEntryNextHopType'])) {
            $model->transitRouterRouteEntryNextHopType = $map['TransitRouterRouteEntryNextHopType'];
        }
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }

        return $model;
    }
}
