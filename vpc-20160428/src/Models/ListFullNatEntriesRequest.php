<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListFullNatEntriesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the FULLNAT entry that you want to query.
     *
     * @example fullnat-gw8fz23jezpbblf1j****
     *
     * @var string
     */
    public $fullNatEntryId;

    /**
     * @description The name of the FULLNAT entry that you want to query. You can specify at most 20 names.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
     * @var string[]
     */
    public $fullNatEntryNames;

    /**
     * @description The ID of the FULLNAT table to which the FULLNAT entries to be queried belong.
     *
     * >  You must specify at least one of **FullNatTableId** and **NatGatewayId**.
     * @example fulltb-gw88z7hhlv43rmb26****
     *
     * @var string
     */
    public $fullNatTableId;

    /**
     * @description The protocol of the packets that are forwarded by the port. Valid values:
     *
     *   **TCP**
     *   **UDP**
     *
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The number of entries per page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The ID of the NAT gateway.
     *
     * >  You must specify at least one of **FullNatTableId** and **NatGatewayId**.
     * @example ngw-bp1uewa15k4iy5770****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natIp;

    /**
     * @var string
     */
    public $natIpPort;

    /**
     * @description The ID of the elastic network interface (ENI) that you want to query.
     *
     * @var string[]
     */
    public $networkInterfaceIds;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of the **NextToken** parameter.
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
     * @description The region ID of the virtual private cloud (VPC) NAT gateway to which the FULLNAT entries to be queried belong.
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
        'fullNatEntryId'       => 'FullNatEntryId',
        'fullNatEntryNames'    => 'FullNatEntryNames',
        'fullNatTableId'       => 'FullNatTableId',
        'ipProtocol'           => 'IpProtocol',
        'maxResults'           => 'MaxResults',
        'natGatewayId'         => 'NatGatewayId',
        'natIp'                => 'NatIp',
        'natIpPort'            => 'NatIpPort',
        'networkInterfaceIds'  => 'NetworkInterfaceIds',
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
        if (null !== $this->fullNatEntryId) {
            $res['FullNatEntryId'] = $this->fullNatEntryId;
        }
        if (null !== $this->fullNatEntryNames) {
            $res['FullNatEntryNames'] = $this->fullNatEntryNames;
        }
        if (null !== $this->fullNatTableId) {
            $res['FullNatTableId'] = $this->fullNatTableId;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }
        if (null !== $this->natIpPort) {
            $res['NatIpPort'] = $this->natIpPort;
        }
        if (null !== $this->networkInterfaceIds) {
            $res['NetworkInterfaceIds'] = $this->networkInterfaceIds;
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
     * @return ListFullNatEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['FullNatEntryId'])) {
            $model->fullNatEntryId = $map['FullNatEntryId'];
        }
        if (isset($map['FullNatEntryNames'])) {
            if (!empty($map['FullNatEntryNames'])) {
                $model->fullNatEntryNames = $map['FullNatEntryNames'];
            }
        }
        if (isset($map['FullNatTableId'])) {
            $model->fullNatTableId = $map['FullNatTableId'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }
        if (isset($map['NatIpPort'])) {
            $model->natIpPort = $map['NatIpPort'];
        }
        if (isset($map['NetworkInterfaceIds'])) {
            if (!empty($map['NetworkInterfaceIds'])) {
                $model->networkInterfaceIds = $map['NetworkInterfaceIds'];
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
