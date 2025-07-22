<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNatGatewaysResponseBody\natGateways;

use AlibabaCloud\Tea\Model;

class ipLists extends Model
{
    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $snatEntryEnabled;

    /**
     * @var string
     */
    public $usingStatus;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'ipAddress' => 'IpAddress',
        'privateIpAddress' => 'PrivateIpAddress',
        'snatEntryEnabled' => 'SnatEntryEnabled',
        'usingStatus' => 'UsingStatus',
    ];

    public function validate() {}

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
     * @return ipLists
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
