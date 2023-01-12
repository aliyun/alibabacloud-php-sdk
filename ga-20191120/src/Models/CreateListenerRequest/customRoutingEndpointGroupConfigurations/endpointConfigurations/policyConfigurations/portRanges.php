<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations\endpointConfigurations\policyConfigurations;

use AlibabaCloud\Tea\Model;

class portRanges extends Model
{
    /**
     * @description The first port of the port range of the destination that allows traffic. The value of this parameter must fall within the port range of the backend service.
     *
     * This parameter takes effect only if **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * You can specify up to 20 destination port ranges for each endpoint of a custom routing listener. You can specify up to five first ports for each destination.
     *
     * >  You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The last port of the port range of the destination that allows traffic. The value of this parameter must fall within the port range of the backend service.
     *
     * This parameter takes effect only if **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * You can specify up to 20 destination port ranges for each endpoint of a custom routing listener. You can specify up to five last ports for each destination.
     *
     * >  You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @example 80
     *
     * @var int
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
