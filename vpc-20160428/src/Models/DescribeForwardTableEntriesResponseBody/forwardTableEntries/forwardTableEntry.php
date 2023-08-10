<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries;

use AlibabaCloud\Tea\Model;

class forwardTableEntry extends Model
{
    /**
     * @description *   The EIPs that can be accessed over the Internet when you query DNAT entries of Internet NAT gateways.
     *   The NAT IP addresses that can be accessed by external networks when you query DNAT entries of VPC NAT gateways.
     *
     * @example 139.79.XX.XX
     *
     * @var string
     */
    public $externalIp;

    /**
     * @description *   The external port or port range that is used for port forwarding when you query DNAT entries of Internet NAT gateways.
     *   The port that is used when the NAT IP address can be accessed by external networks when you query DNAT entries of VPC NAT gateways.
     *
     * @example 80
     *
     * @var string
     */
    public $externalPort;

    /**
     * @description The ID of the DNAT entry.
     *
     * @example fwd-119smw5tk****
     *
     * @var string
     */
    public $forwardEntryId;

    /**
     * @description The name of the DNAT entry.
     *
     * @example ForwardEntry-1
     *
     * @var string
     */
    public $forwardEntryName;

    /**
     * @description The ID of the DNAT table to which the DNAT entry belongs.
     *
     * @example ftb-11tc6xgmv****
     *
     * @var string
     */
    public $forwardTableId;

    /**
     * @description The private IP address.
     *
     *   The private IP address of the ECS instance that uses DNAT entries to communicate with the Internet when you query DNAT entries of Internet NAT gateways.
     *   The private IP address that uses DNAT entries when you query DNAT entries of VPC NAT gateways.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $internalIp;

    /**
     * @description *   The internal port or port range that is used for port forwarding when you query DNAT entries of Internet NAT gateways.
     *   The destination ECS instance port to be mapped when you query DNAT entries of VPC NAT gateways.
     *
     * @example 25
     *
     * @var string
     */
    public $internalPort;

    /**
     * @description The protocol. Valid values:
     *
     *   **TCP**: The NAT gateway forwards TCP packets.
     *   **UDP**: The NAT gateway forwards UDP packets.
     *   **Any**: The NAT gateway forwards packets of all protocols.
     *
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The status of the DNAT entry. Valid values:
     *
     *   **Pending**: being created or modified
     *   **Available**: available
     *   **Deleting**: being deleted
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'externalIp'       => 'ExternalIp',
        'externalPort'     => 'ExternalPort',
        'forwardEntryId'   => 'ForwardEntryId',
        'forwardEntryName' => 'ForwardEntryName',
        'forwardTableId'   => 'ForwardTableId',
        'internalIp'       => 'InternalIp',
        'internalPort'     => 'InternalPort',
        'ipProtocol'       => 'IpProtocol',
        'natGatewayId'     => 'NatGatewayId',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardTableEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
