<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateBasicAccelerateIpResponseBody extends Model
{
    /**
     * @description The accelerated IP address.
     *
     * @example 116.132.XX.XX
     *
     * @var string
     */
    public $accelerateIpAddress;

    /**
     * @description The ID of the accelerated IP address.
     *
     * @example gaip-bp1****
     *
     * @var string
     */
    public $accelerateIpId;

    /**
     * @description The ID of the basic GA instance.
     *
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The ID of the acceleration region.
     *
     * @example ips-bp11r5jb8ogp122xl****
     *
     * @var string
     */
    public $ipSetId;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the accelerated IP address.
     *
     * >  This parameter returns an empty string because the parameter is not in use.
     * @example null
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateIpAddress' => 'AccelerateIpAddress',
        'accelerateIpId'      => 'AccelerateIpId',
        'acceleratorId'       => 'AcceleratorId',
        'ipSetId'             => 'IpSetId',
        'requestId'           => 'RequestId',
        'state'               => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpAddress) {
            $res['AccelerateIpAddress'] = $this->accelerateIpAddress;
        }
        if (null !== $this->accelerateIpId) {
            $res['AccelerateIpId'] = $this->accelerateIpId;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
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
     * @return CreateBasicAccelerateIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpAddress'])) {
            $model->accelerateIpAddress = $map['AccelerateIpAddress'];
        }
        if (isset($map['AccelerateIpId'])) {
            $model->accelerateIpId = $map['AccelerateIpId'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
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
