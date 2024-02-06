<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeForwardTableEntriesRequest extends Model
{
    /**
     * @description The EIP in the DNAT entry. The public IP address is used to access the Internet.
     *
     * @example 36.XXX.XXX.72
     *
     * @var string
     */
    public $externalIp;

    /**
     * @description The ID of the DNAT entry.
     *
     * @example fwd-5tfi6f0rutmd00xrhkag7****
     *
     * @var string
     */
    public $forwardEntryId;

    /**
     * @description The name of the DNAT entry.
     *
     * @example test0
     *
     * @var string
     */
    public $forwardEntryName;

    /**
     * @description The private IP address of the instance that uses the DNAT entry for Internet communication.
     *
     * @example 10.XXX.XXX.50
     *
     * @var string
     */
    public $internalIp;

    /**
     * @description The protocol. Valid values:
     *
     *   **TCP**: forwards TCP packets.
     *   **UDP**: forwards UDP packets.
     *   **Any**: forwards all packets.
     *
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example nat-5t7nh1cfm6kxiszlttr38****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The page number. Pages start from page **1**.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: **100**.
     *
     * Default value: **10**.
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'externalIp'       => 'ExternalIp',
        'forwardEntryId'   => 'ForwardEntryId',
        'forwardEntryName' => 'ForwardEntryName',
        'internalIp'       => 'InternalIp',
        'ipProtocol'       => 'IpProtocol',
        'natGatewayId'     => 'NatGatewayId',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
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
        if (null !== $this->forwardEntryId) {
            $res['ForwardEntryId'] = $this->forwardEntryId;
        }
        if (null !== $this->forwardEntryName) {
            $res['ForwardEntryName'] = $this->forwardEntryName;
        }
        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeForwardTableEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }
        if (isset($map['ForwardEntryId'])) {
            $model->forwardEntryId = $map['ForwardEntryId'];
        }
        if (isset($map['ForwardEntryName'])) {
            $model->forwardEntryName = $map['ForwardEntryName'];
        }
        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
