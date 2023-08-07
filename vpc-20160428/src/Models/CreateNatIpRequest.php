<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateNatIpRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether only to precheck this request. Valid values:
     *
     *   **true**: sends the precheck request but does not create the NAT IP address. The system checks your AccessKey pair, the Resource Access Management (RAM) user permissions, and the required parameters. If the request fails the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. If the request passes the precheck, a 2xx HTTP status code is returned and the NAT IP address is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the Virtual Private Cloud (VPC) NAT gateway for which you want to create the NAT IP address.
     *
     * @example ngw-gw8v16wgvtq26vh59****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The NAT IP address that you want to create.
     *
     * If you do not specify an IP address, the system selects a random IP address from the specified CIDR block.
     * @example 192.168.0.34
     *
     * @var string
     */
    public $natIp;

    /**
     * @description The CIDR block to which the NAT IP address belongs.
     *
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $natIpCidr;

    /**
     * @description The description of the NAT IP address.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example test
     *
     * @var string
     */
    public $natIpDescription;

    /**
     * @description The name of the NAT IP address.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). It must start with a letter. It cannot start with `http://` or `https://`.
     * @example newnatip
     *
     * @var string
     */
    public $natIpName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the NAT gateway to which the NAT IP address that you want to create belongs.
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
        'natGatewayId'         => 'NatGatewayId',
        'natIp'                => 'NatIp',
        'natIpCidr'            => 'NatIpCidr',
        'natIpDescription'     => 'NatIpDescription',
        'natIpName'            => 'NatIpName',
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
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }
        if (null !== $this->natIpCidr) {
            $res['NatIpCidr'] = $this->natIpCidr;
        }
        if (null !== $this->natIpDescription) {
            $res['NatIpDescription'] = $this->natIpDescription;
        }
        if (null !== $this->natIpName) {
            $res['NatIpName'] = $this->natIpName;
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
     * @return CreateNatIpRequest
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
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }
        if (isset($map['NatIpCidr'])) {
            $model->natIpCidr = $map['NatIpCidr'];
        }
        if (isset($map['NatIpDescription'])) {
            $model->natIpDescription = $map['NatIpDescription'];
        }
        if (isset($map['NatIpName'])) {
            $model->natIpName = $map['NatIpName'];
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
