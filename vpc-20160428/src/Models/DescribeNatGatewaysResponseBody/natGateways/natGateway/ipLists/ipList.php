<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipLists;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @description The ID of the EIP associated with the NAT gateway.
     *
     * @example eip-m5egzuvp3dgixen6****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The IP address of the EIP associated with the NAT gateway.
     *
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The private IP address of the NAT gateway.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description Indicates whether IP addresses that are used in DNAT entries can be specified in SNAT entries. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $snatEntryEnabled;

    /**
     * @description The association between the EIP and the Internet NAT gateway. Valid values:
     *
     *   **UsedByForwardTable**: The EIP is specified in a DNAT entry.
     *   **UsedBySnatTable**: The EIP is specified in an SNAT entry.
     *   **UsedByForwardSnatTable**: The EIP is specified in both an SNAT entry and a DNAT entry.
     *   **Idle**: The EIP is not specified in a DNAT or SNAT entry.
     *
     * @example UsedByForwardTable
     *
     * @var string
     */
    public $usingStatus;
    protected $_name = [
        'allocationId'     => 'AllocationId',
        'ipAddress'        => 'IpAddress',
        'privateIpAddress' => 'PrivateIpAddress',
        'snatEntryEnabled' => 'SnatEntryEnabled',
        'usingStatus'      => 'UsingStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->snatEntryEnabled) {
            $res['SnatEntryEnabled'] = $this->snatEntryEnabled;
        }
        if (null !== $this->usingStatus) {
            $res['UsingStatus'] = $this->usingStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['SnatEntryEnabled'])) {
            $model->snatEntryEnabled = $map['SnatEntryEnabled'];
        }
        if (isset($map['UsingStatus'])) {
            $model->usingStatus = $map['UsingStatus'];
        }

        return $model;
    }
}
