<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointsRequest\endpointConfigurations\policyConfigurations;

use AlibabaCloud\Tea\Model;

class portRanges extends Model
{
    /**
     * @description The start port of the port range in the destination to which to allow traffic. The specified port must fall within the port range of the specified endpoint group.
     *
     * This parameter takes effect only when **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * You can specify port ranges for up to 20 destinations for each endpoint and specify up to 20 start ports for each destination.
     * @example 80
     *
     * @var string
     */
    public $fromPort;

    /**
     * @description The end port of the port range in the destination to which to allow traffic. The specified port must fall within the port range of the specified endpoint group.
     *
     * This parameter takes effect only when **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * You can specify port ranges for up to 20 destinations for each endpoint and specify up to 20 end ports for each destination.
     * @example 80
     *
     * @var string
     */
    public $toPort;
    protected $_name = [
        'fromPort' => 'FromPort',
        'toPort'   => 'ToPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portRanges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
