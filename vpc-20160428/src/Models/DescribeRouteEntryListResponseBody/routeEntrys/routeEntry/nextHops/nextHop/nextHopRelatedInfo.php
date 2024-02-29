<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys\routeEntry\nextHops\nextHop;

use AlibabaCloud\Tea\Model;

class nextHopRelatedInfo extends Model
{
    /**
     * @description The ID of the instance that is associated with the next hop.
     *
     * @example vpc-bp1t36rn9l53iwbsf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the instance associated with the next hop. Valid values:
     *
     *   **VPC**: a VPC
     *   **VBR**: a VBR
     *   **PCONN**: an Express Connect circuit
     *
     * @example VPC
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The region ID of the instance associated with the next hop. Valid values:
     *
     * @example ch-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextHopRelatedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
