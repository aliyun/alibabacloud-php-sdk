<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointsRequest\endpoints;
use AlibabaCloud\Tea\Model;

class CreateBasicEndpointsRequest extends Model
{
    /**
     * @description The ID of the basic GA instance.
     *
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that the value is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The endpoints that are associated with the basic GA instance.
     *
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorId'   => 'AcceleratorId',
        'clientToken'     => 'ClientToken',
        'endpointGroupId' => 'EndpointGroupId',
        'endpoints'       => 'Endpoints',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = [];
            if (null !== $this->endpoints && \is_array($this->endpoints)) {
                $n = 0;
                foreach ($this->endpoints as $item) {
                    $res['Endpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBasicEndpointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n                = 0;
                foreach ($map['Endpoints'] as $item) {
                    $model->endpoints[$n++] = null !== $item ? endpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
