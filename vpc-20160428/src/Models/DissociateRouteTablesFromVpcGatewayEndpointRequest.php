<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DissociateRouteTablesFromVpcGatewayEndpointRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. **ClientToken** can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not set this parameter, the system automatically uses **RequestId** as **ClientToken**. **RequestId** may be different for each API request.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to precheck this request. Valid values:
     *
     *   **true**: prechecks the request. The gateway endpoint is not disassociated from the route table. The system checks whether your AccessKey pair is valid, whether the Resource Access Management (RAM) user is authorized, and whether required parameters are set. If the request fails the precheck, the corresponding error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false**: sends the API request. After the request passes the check, a 2XX HTTP status code is returned and the gateway endpoint is disassociated from the route table. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the gateway endpoint to be disassociated from the route table.
     *
     * @example vpce-m5e371h5clm3uadih****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the gateway endpoint.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
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
     * @example vtb-m5elgtm3aj586iitr****
     *
     * @var string[]
     */
    public $routeTableIds;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'endpointId'           => 'EndpointId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeTableIds'        => 'RouteTableIds',
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
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
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
        if (null !== $this->routeTableIds) {
            $res['RouteTableIds'] = $this->routeTableIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DissociateRouteTablesFromVpcGatewayEndpointRequest
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
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
        if (isset($map['RouteTableIds'])) {
            if (!empty($map['RouteTableIds'])) {
                $model->routeTableIds = $map['RouteTableIds'];
            }
        }

        return $model;
    }
}
