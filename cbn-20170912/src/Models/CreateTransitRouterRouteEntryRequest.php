<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterRouteEntryRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a precheck to check information such as the permissions and instance status. Valid values:
     *
     *   **false** (default): sends the request. If the request passes the precheck, the route entry is added.
     *   **true**: sends a precheck request but does not add the route. If you use this value, the system checks the required parameters and the request syntax. If the request fails to pass the precheck, an error message is returned. If the request passes the check, the system returns the ID of the request.
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
     * The description must be 2 to 256 characters in length, and can contain letters, digits, and the following special characters: , . ; / @ \_ -. You can also leave the description empty.
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
     * The name must be 0 to 128 characters in length, and can contain letters, digits, and the following special characters: , . ; / @ \_ -.
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
