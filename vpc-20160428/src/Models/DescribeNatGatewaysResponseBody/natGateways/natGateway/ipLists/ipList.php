<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipLists;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @example eip-m5egzuvp3dgixen6****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @example false
     *
     * @var bool
     */
    public $snatEntryEnabled;

    /**
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
