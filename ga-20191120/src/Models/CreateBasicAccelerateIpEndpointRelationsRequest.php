<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpEndpointRelationsRequest\accelerateIpEndpointRelations;
use AlibabaCloud\Tea\Model;

class CreateBasicAccelerateIpEndpointRelationsRequest extends Model
{
    /**
     * @description A list of accelerated IP addresses and the endpoints with which the accelerated IP addresses are associated.
     *
     * This parameter is required.
     * @var accelerateIpEndpointRelations[]
     */
    public $accelerateIpEndpointRelations;

    /**
     * @description The ID of the basic GA instance.
     *
     * This parameter is required.
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accelerateIpEndpointRelations' => 'AccelerateIpEndpointRelations',
        'acceleratorId'                 => 'AcceleratorId',
        'clientToken'                   => 'ClientToken',
        'regionId'                      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpEndpointRelations) {
            $res['AccelerateIpEndpointRelations'] = [];
            if (null !== $this->accelerateIpEndpointRelations && \is_array($this->accelerateIpEndpointRelations)) {
                $n = 0;
                foreach ($this->accelerateIpEndpointRelations as $item) {
                    $res['AccelerateIpEndpointRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBasicAccelerateIpEndpointRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpEndpointRelations'])) {
            if (!empty($map['AccelerateIpEndpointRelations'])) {
                $model->accelerateIpEndpointRelations = [];
                $n                                    = 0;
                foreach ($map['AccelerateIpEndpointRelations'] as $item) {
                    $model->accelerateIpEndpointRelations[$n++] = null !== $item ? accelerateIpEndpointRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
