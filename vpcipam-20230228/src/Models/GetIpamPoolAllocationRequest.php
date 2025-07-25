<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class GetIpamPoolAllocationRequest extends Model
{
    /**
     * @description The ID of the instance to which CIDR blocks are allocated from the IPAM pool.
     *
     * This parameter is required.
     *
     * @example ipam-pool-alloc-112za33e4****
     *
     * @var string
     */
    public $ipamPoolAllocationId;

    /**
     * @description The region of the IPAM pool.
     *
     * >  If the IPAM pool to which CIDR allocation belongs has the region attribute, this parameter is the region of the IPAM pool. If not, this parameter is the IPAM hosted region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ipamPoolAllocationId' => 'IpamPoolAllocationId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipamPoolAllocationId) {
            $res['IpamPoolAllocationId'] = $this->ipamPoolAllocationId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIpamPoolAllocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpamPoolAllocationId'])) {
            $model->ipamPoolAllocationId = $map['IpamPoolAllocationId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
