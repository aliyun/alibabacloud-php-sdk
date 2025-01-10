<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class UnAssignPrivateIpAddressRequest extends Model
{
    /**
     * @description By default, popApi is not ignored and idempotent
     *
     * @example 141cccd6-dfbd-11ec-b8e8-0242ac110003
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description IP unique identifier
     *
     * This parameter is required.
     * @example sip-xxxx
     *
     * @var string
     */
    public $ipName;

    /**
     * @description Lingjun network interface controller ID
     *
     * This parameter is required.
     * @example lni-bp18exxqa2rvfn45e5pz
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The private IP address of the instance.
     *
     * @example 10.209.75.242
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description Region
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Subnet
     *
     * This parameter is required.
     * @example subnet-f3zfzmnc
     *
     * @var string
     */
    public $subnetId;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'ipName'             => 'IpName',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpAddress'   => 'PrivateIpAddress',
        'regionId'           => 'RegionId',
        'subnetId'           => 'SubnetId',
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
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnAssignPrivateIpAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['IpName'])) {
            $model->ipName = $map['IpName'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }

        return $model;
    }
}
