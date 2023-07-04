<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyForwardEntryRequest extends Model
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
     * @description *   The private IP address of the ECS instance that uses DNAT entries to communicate with the Internet when you modify DNAT entries of Internet NAT gateways.
     *   The private IP address that uses DNAT entries to communicate when you modify DNAT entries of VPC NAT gateways.
     *
     * @example 116.85.XX.XX
     *
     * @var string
     */
    public $externalIp;

    /**
     * @description *   The internal port or port range that is used to forward traffic when you modify DNAT entries of Internet NAT gateways. Valid values: **1** to **65535**.
     *   The port of the destination ECS instance to be mapped when you modify DNAT entries of VPC NAT gateways. Valid values: **1** to **65535**.
     *
     * @example 80
     *
     * @var string
     */
    public $externalPort;

    /**
     * @description *   The external port that is used to forward traffic when you modify DNAT entries of Internet NAT gateways.
     *
     *   Valid values: **1** to **65535**.
     *   If you want to modify the port range, separate port numbers with a forward slash (/), such as `10/20`.
     *   If you want to modify **ExternalPort** and **InternalPort** at the same time, and set **ExternalPort** to a port range, you must also set **InternalPort** to a port range. For example, you can set **ExternalPort** to `10/20` and set **InternalPor** to `80/90`.
     *
     *   The port that is accessed by external networks when you modify DNAT entries of VPC NAT gateways. Valid values: **1** to **65535**.
     *
     * @example fwd-8vbn3bc8roygjp0gy****
     *
     * @var string
     */
    public $forwardEntryId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example test
     *
     * @var string
     */
    public $forwardEntryName;

    /**
     * @description *   When you modify DNAT entries of Internet NAT gateways, this parameter specifies the elastic IP addresses (EIPs) that are used to access the Internet.
     *   When you modify DNAT entries of Virtual Private Cloud (VPC) NAT gateways, this parameter specifies the NAT IP addresses that are accessed by external networks.
     *
     * @example ftb-8vbx8xu2lqj9qb334****
     *
     * @var string
     */
    public $forwardTableId;

    /**
     * @description The protocol type. Valid values:
     *
     *   **TCP**: The NAT gateway forwards TCP packets.
     *   **UDP**: The NAT gateway forwards UDP packets.
     *   **Any**: The NAT gateway forwards packets of all protocols.
     *
     * @example 10.0.0.78
     *
     * @var string
     */
    public $internalIp;

    /**
     * @description The new name of the DNAT entry.
     *
     * The name must be 2 to 128 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example 80
     *
     * @var string
     */
    public $internalPort;

    /**
     * @description The region ID of the NAT gateway.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example false
     *
     * @var bool
     */
    public $portBreak;

    /**
     * @description Specifies whether to remove limits on the port range. Valid values:
     *
     *   **true**: yes
     *   **false**: no If an SNAT entry and a DNAT entry use the same public IP address, and you want to specify a port number greater than `1024`, set `PortBreak` to `true`.
     *
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
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'externalIp'           => 'ExternalIp',
        'externalPort'         => 'ExternalPort',
        'forwardEntryId'       => 'ForwardEntryId',
        'forwardEntryName'     => 'ForwardEntryName',
        'forwardTableId'       => 'ForwardTableId',
        'internalIp'           => 'InternalIp',
        'internalPort'         => 'InternalPort',
        'ipProtocol'           => 'IpProtocol',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'portBreak'            => 'PortBreak',
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
        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }
        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }
        if (null !== $this->forwardEntryId) {
            $res['ForwardEntryId'] = $this->forwardEntryId;
        }
        if (null !== $this->forwardEntryName) {
            $res['ForwardEntryName'] = $this->forwardEntryName;
        }
        if (null !== $this->forwardTableId) {
            $res['ForwardTableId'] = $this->forwardTableId;
        }
        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }
        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->portBreak) {
            $res['PortBreak'] = $this->portBreak;
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
     * @return ModifyForwardEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }
        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }
        if (isset($map['ForwardEntryId'])) {
            $model->forwardEntryId = $map['ForwardEntryId'];
        }
        if (isset($map['ForwardEntryName'])) {
            $model->forwardEntryName = $map['ForwardEntryName'];
        }
        if (isset($map['ForwardTableId'])) {
            $model->forwardTableId = $map['ForwardTableId'];
        }
        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }
        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PortBreak'])) {
            $model->portBreak = $map['PortBreak'];
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
