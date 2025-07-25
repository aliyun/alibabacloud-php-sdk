<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody\ipamResourceCidrs;

use AlibabaCloud\Tea\Model;

class overlapDetail extends Model
{
    /**
     * @description The CIDR that overlaps with the current resource.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $overlapResourceCidr;

    /**
     * @description Instance ID that overlaps with the current resource.
     *
     * @example vpc-aq3fjgnig5av6jb8d****
     *
     * @var string
     */
    public $overlapResourceId;

    /**
     * @description The region of instance that overlaps with the current resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $overlapResourceRegion;
    protected $_name = [
        'overlapResourceCidr' => 'OverlapResourceCidr',
        'overlapResourceId' => 'OverlapResourceId',
        'overlapResourceRegion' => 'OverlapResourceRegion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->overlapResourceCidr) {
            $res['OverlapResourceCidr'] = $this->overlapResourceCidr;
        }
        if (null !== $this->overlapResourceId) {
            $res['OverlapResourceId'] = $this->overlapResourceId;
        }
        if (null !== $this->overlapResourceRegion) {
            $res['OverlapResourceRegion'] = $this->overlapResourceRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overlapDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverlapResourceCidr'])) {
            $model->overlapResourceCidr = $map['OverlapResourceCidr'];
        }
        if (isset($map['OverlapResourceId'])) {
            $model->overlapResourceId = $map['OverlapResourceId'];
        }
        if (isset($map['OverlapResourceRegion'])) {
            $model->overlapResourceRegion = $map['OverlapResourceRegion'];
        }

        return $model;
    }
}
