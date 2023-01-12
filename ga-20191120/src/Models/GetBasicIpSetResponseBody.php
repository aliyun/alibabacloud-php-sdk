<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class GetBasicIpSetResponseBody extends Model
{
    /**
     * @description The ID of the region where the basic GA instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $accelerateRegionId;

    /**
     * @description The ID of the basic GA instance.
     *
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The bandwidth of the acceleration region of the basic GA instance. Unit: Mbit/s.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The accelerated IP address.
     *
     * @example 118.31.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The ID of the acceleration region of the basic GA instance.
     *
     * @example ips-bp11ilwqjdkjeg9r7****
     *
     * @var string
     */
    public $ipSetId;

    /**
     * @description The version of the accelerated IP address. Only **IPv4** is returned. This indicates that an IPv4 address is used.
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @example BGP
     *
     * @var string
     */
    public $ispType;

    /**
     * @description The ID of the request.
     *
     * @example 6D2BFF54-6AF2-4679-88C4-2F2E187F16CB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the acceleration region of the basic GA instance. Valid values:
     *
     *   **init**: The acceleration region is being initialized.
     *   **active**: The acceleration region is in the running state.
     *   **updating**: The acceleration region is being configured.
     *   **Deleting**: The acceleration region is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateRegionId' => 'AccelerateRegionId',
        'acceleratorId'      => 'AcceleratorId',
        'bandwidth'          => 'Bandwidth',
        'ipAddress'          => 'IpAddress',
        'ipSetId'            => 'IpSetId',
        'ipVersion'          => 'IpVersion',
        'ispType'            => 'IspType',
        'requestId'          => 'RequestId',
        'state'              => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateRegionId) {
            $res['AccelerateRegionId'] = $this->accelerateRegionId;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->ispType) {
            $res['IspType'] = $this->ispType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBasicIpSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateRegionId'])) {
            $model->accelerateRegionId = $map['AccelerateRegionId'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IspType'])) {
            $model->ispType = $map['IspType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
