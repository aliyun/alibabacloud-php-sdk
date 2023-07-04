<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListNatIpCidrsRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not set this parameter, the system automatically uses **RequestId** as **ClientToken**. **RequestId** may be different for each API request.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to only precheck this request. Valid values:
     *
     *   **true**: checks the API request. The CIDR blocks of the NAT gateway are not queried if the API request passes the precheck. The system checks whether your AccessKey pair is valid, whether the Resource Access Management (RAM) user is authorized, and whether the required parameters are set. If the request fails to pass the precheck, the corresponding error message is returned. If the check succeeds, the DryRunOperation error code is returned.
     *   **false**: sends the API request. If the request passes the precheck, 2xx HTTP status code is returned and the CIDR blocks of the NAT gateway are queried. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The ID of the VPC NAT gateway that you want to query.
     *
     * @example ngw-gw8v16wgvtq26vh59****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The CIDR block of the NAT gateway that you want to query.
     *
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $natIpCidr;

    /**
     * @description The name of the CIDR block that you want to query. Valid values of **N**: **1** to **20**.
     *
     * @example test
     *
     * @var string[]
     */
    public $natIpCidrName;

    /**
     * @description The status of the CIDR block that you want to query. Set the value to **Available**.
     *
     * @example Available
     *
     * @var string
     */
    public $natIpCidrStatus;

    /**
     * @description The CIDR block of the NAT gateway that you want to query. Valid values of **N**: **1** to **20**.
     *
     * @example 172.16.0.0/24
     *
     * @var string[]
     */
    public $natIpCidrs;

    /**
     * @description The token that is used for the next query. Set the value as needed.
     *
     *   If this is your first query or no next query is to be sent, ignore this parameter.
     *   If a next query is to be sent, set the value to the value of NextToken that is returned from the last call.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the Virtual Private Cloud (VPC) NAT gateway that you want to query.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example eu-central-1
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
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'maxResults'           => 'MaxResults',
        'natGatewayId'         => 'NatGatewayId',
        'natIpCidr'            => 'NatIpCidr',
        'natIpCidrName'        => 'NatIpCidrName',
        'natIpCidrStatus'      => 'NatIpCidrStatus',
        'natIpCidrs'           => 'NatIpCidrs',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->natIpCidr) {
            $res['NatIpCidr'] = $this->natIpCidr;
        }
        if (null !== $this->natIpCidrName) {
            $res['NatIpCidrName'] = $this->natIpCidrName;
        }
        if (null !== $this->natIpCidrStatus) {
            $res['NatIpCidrStatus'] = $this->natIpCidrStatus;
        }
        if (null !== $this->natIpCidrs) {
            $res['NatIpCidrs'] = $this->natIpCidrs;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListNatIpCidrsRequest
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NatIpCidr'])) {
            $model->natIpCidr = $map['NatIpCidr'];
        }
        if (isset($map['NatIpCidrName'])) {
            if (!empty($map['NatIpCidrName'])) {
                $model->natIpCidrName = $map['NatIpCidrName'];
            }
        }
        if (isset($map['NatIpCidrStatus'])) {
            $model->natIpCidrStatus = $map['NatIpCidrStatus'];
        }
        if (isset($map['NatIpCidrs'])) {
            if (!empty($map['NatIpCidrs'])) {
                $model->natIpCidrs = $map['NatIpCidrs'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
