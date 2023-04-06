<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomRoutingEndpointGroupDestinationsRequest extends Model
{
    /**
     * @description The ID of the endpoint group mapping configuration.
     *
     * @example dst-123abc****
     *
     * @var string
     */
    public $destinationId;

    /**
     * @example epg-bp1j184jhb9i9ubwf****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The ID of the region where the Global Accelerator (GA) instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'destinationId'   => 'DestinationId',
        'endpointGroupId' => 'EndpointGroupId',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomRoutingEndpointGroupDestinationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
