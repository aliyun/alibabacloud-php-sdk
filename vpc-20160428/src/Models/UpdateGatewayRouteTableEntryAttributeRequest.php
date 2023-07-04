<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteTableEntryAttributeRequest extends Model
{
    /**
     * @description The destination CIDR block of the route entry.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example new
     *
     * @var string
     */
    public $description;

    /**
     * @description The next hop ID of the route entry after the route entry is modified.
     *
     *   If you set **NextHopType** to **Instance**, specify an ECS instance ID for the **NextHopId** parameter.
     *   If you set **NextHopType** to **NetworkInterface**, specify an ENI ID for the **NextHopId** parameter.
     *   If you set **NextHopType** to **Local**, leave the **NextHopId** parameter empty, which specifies a local next hop.
     *
     * >  If you want to modify a route entry whose next hop type is **Instance** or **NetworkInterface**, you must first change the value of the **NextHopType** parameter to **Local**. Then, change the value of **NextHopType** to **Instance** or **NetworkInterface** and specify the **NextHopId** parameter. When you modify a route entry whose next hop type is Instance or NetworkInterface, you cannot directly specify a different ENI ID or ECS instance ID for the NextHopId parameter.
     * @example 47.100.XX.XX/16
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The next hop type of the route entry after the route entry is modified. Valid values:
     *
     *   **EcsInstance**: an Elastic Compute Service (ECS) instance
     *   **NetworkInterface**: an elastic network interface (ENI)
     *   **Local**: a local next hop
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to check the request without performing the operation. Valid values:
     *
     *   **true**: checks the request but does not modify the route entry. The system checks the required parameters, request syntax, and limits. If the request fails to pass the check, an error message is returned. If the request passes the check, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. If the request passes the check, a 2xx HTTP status code is returned and the route entry is modified.
     *
     * @example vtb-5ts0ohchwkp3dydt2****
     *
     * @var string
     */
    public $IPv4GatewayRouteTableId;

    /**
     * @description The ID of the request.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the gateway route table.
     *
     * The description must be 2 to 256 characters in length. The description must start with a letter but cannot start with `http://` or `https://`.
     * @example i-bp18xq9yguxoxe7m****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The name of the gateway route table.
     *
     * The name must be 2 to 128 characters in length and can contain letter, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     * @example EcsInstance
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
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the value of **RequestId** as the value of **ClientToken**. The value of **RequestId** may be different for each API request.
     * @example ap-southeast-6
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
        'clientToken'             => 'ClientToken',
        'description'             => 'Description',
        'destinationCidrBlock'    => 'DestinationCidrBlock',
        'dryRun'                  => 'DryRun',
        'IPv4GatewayRouteTableId' => 'IPv4GatewayRouteTableId',
        'name'                    => 'Name',
        'nextHopId'               => 'NextHopId',
        'nextHopType'             => 'NextHopType',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->IPv4GatewayRouteTableId) {
            $res['IPv4GatewayRouteTableId'] = $this->IPv4GatewayRouteTableId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
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
     * @return UpdateGatewayRouteTableEntryAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IPv4GatewayRouteTableId'])) {
            $model->IPv4GatewayRouteTableId = $map['IPv4GatewayRouteTableId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
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
