<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomRoutingEndpointRequest extends Model
{
    /**
     * @description 待查询终端节点所属终端节点组ID。
     *
     * @example epg-bp1j184jhb9i9ubwf****
     *
     * @var string
     */
    public $endpointGroup;

    /**
     * @description The ID of the endpoint.
     *
     * @example ep-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'endpointGroup' => 'EndpointGroup',
        'endpointId'    => 'EndpointId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointGroup) {
            $res['EndpointGroup'] = $this->endpointGroup;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomRoutingEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointGroup'])) {
            $model->endpointGroup = $map['EndpointGroup'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
