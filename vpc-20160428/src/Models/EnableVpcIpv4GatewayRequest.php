<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class EnableVpcIpv4GatewayRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The list of route tables. The system adds a 0.0.0.0/0 route that points to the IPv4 gateway to the route tables. The system supports at most 10 route tables.
     *
     * >  The route table and the IPv4 gateway must belong to the same virtual private cloud (VPC).
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to check the request without performing the operation. Valid values:
     *
     *   **true**: checks the request without performing the operation. The system checks the required parameters, request syntax, and limits. If the request fails the check, an error message is returned. If the request passes the check, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the API request. After the request passes the check, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example ipv4gw-5tsp9lumsxoqizvq2****
     *
     * @var string
     */
    public $ipv4GatewayId;

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
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system uses **RequestId** as **ClientToken**. **RequestId** may be different for each API request.
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

    /**
     * @var string[]
     */
    public $routeTableList;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'ipv4GatewayId'        => 'Ipv4GatewayId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeTableList'       => 'RouteTableList',
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
        if (null !== $this->ipv4GatewayId) {
            $res['Ipv4GatewayId'] = $this->ipv4GatewayId;
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
        if (null !== $this->routeTableList) {
            $res['RouteTableList'] = $this->routeTableList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableVpcIpv4GatewayRequest
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
        if (isset($map['Ipv4GatewayId'])) {
            $model->ipv4GatewayId = $map['Ipv4GatewayId'];
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
        if (isset($map['RouteTableList'])) {
            if (!empty($map['RouteTableList'])) {
                $model->routeTableList = $map['RouteTableList'];
            }
        }

        return $model;
    }
}
