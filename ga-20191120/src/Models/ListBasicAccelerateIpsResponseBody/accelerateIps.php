<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpsResponseBody;

use AlibabaCloud\Tea\Model;

class accelerateIps extends Model
{
    /**
     * @description The accelerated IP address of the basic GA instance.
     *
     * @example 116.132.XX.XX
     *
     * @var string
     */
    public $accelerateIpAddress;

    /**
     * @description The ID of the accelerated IP address of the basic GA instance.
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
     * @description The status of the accelerated IP address. Valid values:
     *
     *   **active**: The accelerated IP address is available.
     *   **binding**: The accelerated IP address is being associated.
     *   **bound**: The accelerated IP address is associated.
     *   **unbinding**: The accelerated IP address is being disassociated.
     *   **deleting**: The accelerated IP address is being deleted.
     *
     * >  This parameter is unavailable when the accelerated IP address is being created.
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateIpAddress' => 'AccelerateIpAddress',
        'accelerateIpId'      => 'AccelerateIpId',
        'acceleratorId'       => 'AcceleratorId',
        'ipSetId'             => 'IpSetId',
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerateIps
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
