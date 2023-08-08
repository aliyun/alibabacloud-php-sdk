<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DeleteTransitRouterRouteEntryRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. The client token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the value of **RequestId** as the value of **ClientToken**. The value of **RequestId** for each API request may be different.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to check the request but not perform the operation. The system checks the permissions and the status of the specified instances. Valid values:
     *
     *   **false** (default): sends the request. If the request passes the precheck, the route is deleted.
     *   **true**: sends a precheck request. The route is not deleted after the request passes the precheck. If you use this value, the system checks the required parameters and the request syntax. If the check fails, the corresponding error message is returned. If the request passes the check, the system returns the ID of the request.
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
     * @description The destination CIDR block.
     *
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $transitRouterRouteEntryDestinationCidrBlock;

    /**
     * @description The ID of the route entry.
     *
     * @example rte-75eg4jprkvk0pw****
     *
     * @var string
     */
    public $transitRouterRouteEntryId;

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
     *   **BlackHole**: a blackhole route. You do not need to specify a next hop.
     *   **Attachment**: a network instance connection. You must specify a network instance connection as the next hop.
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
        'transitRouterRouteEntryDestinationCidrBlock' => 'TransitRouterRouteEntryDestinationCidrBlock',
        'transitRouterRouteEntryId'                   => 'TransitRouterRouteEntryId',
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
        if (null !== $this->transitRouterRouteEntryDestinationCidrBlock) {
            $res['TransitRouterRouteEntryDestinationCidrBlock'] = $this->transitRouterRouteEntryDestinationCidrBlock;
        }
        if (null !== $this->transitRouterRouteEntryId) {
            $res['TransitRouterRouteEntryId'] = $this->transitRouterRouteEntryId;
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
     * @return DeleteTransitRouterRouteEntryRequest
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
        if (isset($map['TransitRouterRouteEntryDestinationCidrBlock'])) {
            $model->transitRouterRouteEntryDestinationCidrBlock = $map['TransitRouterRouteEntryDestinationCidrBlock'];
        }
        if (isset($map['TransitRouterRouteEntryId'])) {
            $model->transitRouterRouteEntryId = $map['TransitRouterRouteEntryId'];
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
