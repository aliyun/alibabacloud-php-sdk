<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouteTableAggregationRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  If you do not set this parameter, ClientToken is set to the value of RequestId. The value of RequestId for each API request may be different.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **false** (default): performs a dry run and sends the request.
     *   **true**: performs a dry run. The system checks the required parameters and request syntax. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
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
     * @description The destination CIDR block of the aggregate route.
     *
     * >  The following CIDR blocks are not supported:
     * >*   CIDR blocks that start with 0 or 100.64.
     * >*   Multicast CIDR blocks, including 224.0.0.1 to 239.255.255.254.
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $transitRouteTableAggregationCidr;

    /**
     * @description The description of the aggregate route.
     *
     * The description must be 0 to 256 characters in length, and can contain letters, digits, and the following special characters: , . ; / @ \_ -.
     * @example desctest
     *
     * @var string
     */
    public $transitRouteTableAggregationDescription;

    /**
     * @description The name of the aggregate route.
     *
     * The name must be 1 to 128 characters in length, and can contain letters, digits, and the following special characters: , . ; / @ \_ -. You can also leave the name empty.
     * @example nametest
     *
     * @var string
     */
    public $transitRouteTableAggregationName;

    /**
     * @description The scope of networks that you want to advertise the aggregate route.
     *
     * Set the value to **VPC**, which specified that the aggregate route is advertised to VPCs that are in associated forwarding relationship with a route table of the Enterprise Edition transit router and have route synchronization enabled.
     * @example VPC
     *
     * @var string
     */
    public $transitRouteTableAggregationScope;

    /**
     * @description The ID of the route table of the Enterprise Edition transit router.
     *
     * @example vtb-iq8qgruq1ry8jc7vt****
     *
     * @var string
     */
    public $transitRouteTableId;
    protected $_name = [
        'clientToken'                             => 'ClientToken',
        'dryRun'                                  => 'DryRun',
        'ownerAccount'                            => 'OwnerAccount',
        'ownerId'                                 => 'OwnerId',
        'resourceOwnerAccount'                    => 'ResourceOwnerAccount',
        'resourceOwnerId'                         => 'ResourceOwnerId',
        'transitRouteTableAggregationCidr'        => 'TransitRouteTableAggregationCidr',
        'transitRouteTableAggregationDescription' => 'TransitRouteTableAggregationDescription',
        'transitRouteTableAggregationName'        => 'TransitRouteTableAggregationName',
        'transitRouteTableAggregationScope'       => 'TransitRouteTableAggregationScope',
        'transitRouteTableId'                     => 'TransitRouteTableId',
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
        if (null !== $this->transitRouteTableAggregationCidr) {
            $res['TransitRouteTableAggregationCidr'] = $this->transitRouteTableAggregationCidr;
        }
        if (null !== $this->transitRouteTableAggregationDescription) {
            $res['TransitRouteTableAggregationDescription'] = $this->transitRouteTableAggregationDescription;
        }
        if (null !== $this->transitRouteTableAggregationName) {
            $res['TransitRouteTableAggregationName'] = $this->transitRouteTableAggregationName;
        }
        if (null !== $this->transitRouteTableAggregationScope) {
            $res['TransitRouteTableAggregationScope'] = $this->transitRouteTableAggregationScope;
        }
        if (null !== $this->transitRouteTableId) {
            $res['TransitRouteTableId'] = $this->transitRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouteTableAggregationRequest
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
        if (isset($map['TransitRouteTableAggregationCidr'])) {
            $model->transitRouteTableAggregationCidr = $map['TransitRouteTableAggregationCidr'];
        }
        if (isset($map['TransitRouteTableAggregationDescription'])) {
            $model->transitRouteTableAggregationDescription = $map['TransitRouteTableAggregationDescription'];
        }
        if (isset($map['TransitRouteTableAggregationName'])) {
            $model->transitRouteTableAggregationName = $map['TransitRouteTableAggregationName'];
        }
        if (isset($map['TransitRouteTableAggregationScope'])) {
            $model->transitRouteTableAggregationScope = $map['TransitRouteTableAggregationScope'];
        }
        if (isset($map['TransitRouteTableId'])) {
            $model->transitRouteTableId = $map['TransitRouteTableId'];
        }

        return $model;
    }
}
