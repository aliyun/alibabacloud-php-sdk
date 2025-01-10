<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetNetworkInterfaceRequest extends Model
{
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
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Subnet of Lingjun
     *
     * This parameter is required.
     * @example subnet-f3zfzmnc
     *
     * @var string
     */
    public $subnetId;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
        'regionId'           => 'RegionId',
        'subnetId'           => 'SubnetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
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
     * @return GetNetworkInterfaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
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
